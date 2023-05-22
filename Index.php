<?php

// Marks for each student
$students = array(
    array('English' => 80, 'Maths' => 70, 'Science' => 60),
    array('English' => 90, 'Maths' => 85, 'Science' => 80),
    array(('English' => 99, 'Maths' => 50, 'Science' => 70)
);

$totalStudents = count($students);

// Marks for each student
for ($i = 0; $i < $totalStudents; ++$i) {
    $studentNumber = $i + 1;
    
    // Total marks for the current student
    $totalMarks = $students[$i]['English'] + $students[$i]['Maths'] + $students[$i]['Science'];
    
    // Total marks for the current student
    echo "Marks for student {$studentNumber} are: {$totalMarks}";
    echo "<br>";
}

// Total sum of marks for each subject
$EnglishTotal = 0;
$MathsTotal = 0;
$ScienceTotal = 0;

for ($i = 0; $i < $totalStudents; ++$i) {
    $EnglishTotal += $students[$i]['English'];
    $MathsTotal += $students[$i]['Maths'];
    $ScienceTotal += $students[$i]['Science'];
}

// Average marks for each subject
$EnglishAverage = $EnglishTotal / $totalStudents;
$MathsAverage = $MathsTotal / $totalStudents;
$ScienceAverage = $ScienceTotal / $totalStudents;

echo "<br>";
// Average marks for each subject
echo "Average English marks for the whole class: {$EnglishAverage}";
echo "<br>";
echo "Average Maths marks for the whole class: {$MathsAverage}";
echo "<br>";
echo "Average Science marks for the whole class: {$ScienceAverage}";
echo "<br>";

?>