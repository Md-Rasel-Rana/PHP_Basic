<!DOCTYPE html>
<html>
<head>
    <title>User Input to String</title>
</head>
<body>
    <form method="post">
        <label for="values">Enter values (comma-separated):</label>
        <input type="text" name="values" id="values"><br>
        <input type="submit" value="Convert to String"><br>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get user input from the form
        $userInput = $_POST["values"];
            $arraycreate = explode(" ",$userInput);
          //  print_r($arraycreate);
          
          echo  $Arrjoin = join(", ",$arraycreate);
        echo $countword = str_word_count($Arrjoin);


         
    }
    
    ?>
</body>
</html>
