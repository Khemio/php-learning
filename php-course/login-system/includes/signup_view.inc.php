<?php

declare(strict_types=1);

function signup_inputs() {
    // <input class="border border-black px-3 py-1 rounded" type="text" name="username" placeholder="Username">
    // <input class="border border-black px-3 py-1 rounded" type="password" name="pwd" placeholder="Password">
    // <input class="border border-black px-3 py-1 rounded" type="email" name="email" placeholder="Email">

    if (isset($_SESSION['signup_data']['username']) && !isset($_SESSION['errors_signup']['username_taken'])) {
        echo   "<input class='border border-black px-3 py-1 rounded' type='text' name='username' placeholder='Username' value='{$_SESSION["signup_data"]["username"]}'>";
    } else {
        echo '<input class="border border-black px-3 py-1 rounded" type="text" name="username" placeholder="Username">';
    }

    echo '<input class="border border-black px-3 py-1 rounded" type="password" name="pwd" placeholder="Password">';

    if (isset($_SESSION['signup_data']['email']) && !isset($_SESSION['errors_signup']['email_registered']) && !isset($_SESSION['errors_signup']['invalid_email'])) {
        echo   "<input class='border border-black px-3 py-1 rounded' type='email' name='email' placeholder='Email' value='{$_SESSION["signup_data"]["email"]}'>";
    } else {
        echo '<input class="border border-black px-3 py-1 rounded" type="email" name="email" placeholder="Email">';
    }
}

function check_signup_errors() {
    if(isset($_SESSION['errors_signup'])) {
        $errors = $_SESSION['errors_signup'];

        echo "<br>";

        foreach($errors as $error) {
            echo "<p class='text-lg flex justify-center text-red-500'>{$error}</p>";
        }

        unset($_SESSION['errors_signup']);
    } else if (isset($_GET['signup']) && $_GET['signup'] === 'success') {
        echo "<br> <p class='text-lg flex justify-center text-green-500'>Signup Success!</p>";
    }
}