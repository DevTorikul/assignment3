<?php
// Create a multidimensional array $studentGrades
$studentGrades = array(
    array('Math' => 90, 'English' => 85, 'Science' => 88),
    array('Math' => 78, 'English' => 92, 'Science' => 87),
    array('Math' => 95, 'English' => 89, 'Science' => 91)
);

// Function to calculate and print the average grade for each student
function calculateAverageGrades($grades) {
    foreach ($grades as $student) {
        $average = array_sum($student) / count($student);
        echo "Average grade for student: " . $average . "<br>";
    }
}

// Call the function with the studentGrades as an argument
calculateAverageGrades($studentGrades);
?>