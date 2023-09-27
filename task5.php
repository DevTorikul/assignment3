<?php
function generatePassword($length) {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+';
    $password = '';
    
    // Get the total number of characters in the $characters string
    $characterCount = strlen($characters);
    
    // Generate the random password
    for ($i = 0; $i < $length; $i++) {
        $randomIndex = mt_rand(0, $characterCount - 1);
        $password .= $characters[$randomIndex];
    }
    
    return $password;
}

// Generate a password with a length of 12 characters
$generatedPassword = generatePassword(12);

// Print the generated password
echo "Generated Password: " . $generatedPassword;
?>