<?php

$studentGrades = array(
    array("Math" => 85, "English" => 92, "Science" => 78),
    array("Math" => 90, "English" => 88, "Science" => 95),
    array("Math" => 75, "English" => 82, "Science" => 89)
);

function calculateAverageGrade($grades) {
    $averageGrades = array();

    foreach ($grades as $student) {
        $total = 0;
        $count = 0;

        foreach ($student as $subject => $grade) {
            $total += $grade;
            $count++;
        }

        $average = $total / $count;
        $averageGrades[] = $average;
    }

    return $averageGrades;
}

$averageGrades = calculateAverageGrade($studentGrades);

for ($i = 0; $i < count($averageGrades); $i++) {
    echo "Student " . ($i + 1) . " Average Grade: " . $averageGrades[$i] . PHP_EOL;
}



