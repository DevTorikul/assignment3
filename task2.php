<?php
function removeEvenNumbers($numbers) {
    // Initialize an empty array to store the result
    $result = array();
    
    // Loop through the original array
    foreach ($numbers as $number) {
        // Check if the number is odd
        if ($number % 2 != 0) {
            // If it's odd, add it to the result array
            $result[] = $number;
        }
    }
    
    // Print the resulting array
    print_r($result);
}

// Create an array containing numbers 1 to 10
$numbers = range(1, 10);

// Call the function with the array as an argument
removeEvenNumbers($numbers);
?>