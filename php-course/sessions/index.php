<?php
    require_once "config.php";
    session_start();

    $_SESSION["username"] = "Khemio";

    // Remove session data
    // unset($_SESSION["username"]);
    // session_unset();
    // session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Sessions</title>
</head>
<body>
    <h1 class="mt-5 flex justify-center text-2xl text-green-600">Tailwind live again</h1>

    <?php
        echo $_SESSION["username"];
    ?>
</body>
</html>