<?php
class Calculator {
    public function add($num1, $num2) {
        return $num1 + $num2;
    }

    public function subtract($num1, $num2) {
        return $num1 - $num2;
    }

    public function multiply($num1, $num2) {
        return $num1 * $num2;
    }

    public function divide($num1, $num2) {
        if ($num2 == 0) {
            return "Division by zero is not allowed.";
        } else {
            return $num1 / $num2;
        }
    }
}

if (isset($_POST['calculate'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];

    $calculator = new Calculator();

    switch ($operation) {
        case 'add':
            $result = $calculator->add($num1, $num2);
            break;
        case 'subtract':
            $result = $calculator->subtract($num1, $num2);
            break;
        case 'multiply':
            $result = $calculator->multiply($num1, $num2);
            break;
        case 'divide':
            $result = $calculator->divide($num1, $num2);
            break;
        default:
            $result = "Invalid operation";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Calculator Result</title>
</head>
<body>
    <h2>Calculator Result</h2>
    <?php if (isset($result)) : ?>
        <p>Result: <?php echo $result; ?></p>
    <?php endif; ?>
    <a href="calculator.html">Back to Calculator</a>
</body>
</html>
