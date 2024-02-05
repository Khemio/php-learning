<?php
// General hashing

// $sensitiveData = "Khemio";

// $salt = bin2hex(random_bytes(16));
// $pepper = "ASecretPepperString";

// $dataToHash = $sensitiveData . $salt . $pepper;
// $hash = hash('sha256', $dataToHash);

// $sensitiveData = "Khemio";

// $storedSalt =  $salt;
// $storedHash = $hash;
// $pepper = "ASecretPepperString";

// $dataToHash = $sensitiveData . $storedSalt . $pepper;

// $verificationHash = hash('sha256', $dataToHash);

// if($storedHash === $verificationHash) {
//     echo "Data is the same!";
// } else {
//     echo "Data is NOT the same!";
// }

// Password hashing

$pwdSignup = "khemio";

$options = [
    'cost' => 12
];

$hashedPwd = password_hash($pwdSignup, PASSWORD_BCRYPT, $options);

$pwdVerify = "khemio";

if(password_verify($pwdVerify, $hashedPwd)) {
    echo "Passwords are the same!";
} else {
    echo "Passwords are the different!";
};