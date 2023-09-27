<?php
function sortGradesDescending($grades) {
    // Sort the array in descending order
    rsort($grades);
    
    // Print the sorted grades as an array
    print_r($grades);
}

// Create an array with the grades
$grades = array(85, 92, 78, 88, 95);

// Call the function with the grades as an argument
sortGradesDescending($grades);
?>