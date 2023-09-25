<?php
$studentGrades = [
    "Emran" => ["Math" => 85, "English" => 92, "Science" => 78],
    "Arman" => ["Math" => 88, "English" => 33, "Science" => 90],
    "Sakib" => ["Math" => 75, "English" => 82, "Science" => 88],
];

function avarageGradeCalculate($grades) {
    foreach ($grades as $student => $subjects) {
        $total = array_sum($subjects);
        $count = count($subjects);
        $average = $total / $count;
        
        echo "$student's Average Grade: $average\n";
    }
}

avarageGradeCalculate($studentGrades);
