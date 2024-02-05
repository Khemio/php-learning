<?php
require_once "includes/config_session.inc.php";
require_once "includes/signup_view.inc.php";
require_once "includes/login_view.inc.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/output.css">
    <title>Signup System</title>
</head>
<body>
    <h2 class="my-5 text-2xl flex justify-center" ><?php output_username(); ?></h2>

    <h2 class="my-5 text-2xl flex justify-center" >Signup</h2>

    <form action="includes/signup.inc.php" method="post"
        class="mx-auto w-fit flex flex-col gap-3">
        <?php signup_inputs(); ?>
        <button class="w-min mx-auto px-3 py-1 rounded-md text-xl text-white bg-black">Signup</button>
    </form>

    <?php if (!isset($_SESSION["user_id"])) {?>

    <h2 class="my-5 text-2xl flex justify-center" >Login</h2>

    <form action="includes/login.inc.php" method="post"
        class="mx-auto w-fit flex flex-col gap-3">
        <input class="border border-black px-3 py-1 rounded" type="text" name="username" placeholder="Username">
        <input class="border border-black px-3 py-1 rounded" type="password" name="pwd" placeholder="Password">
        <button class="w-min mx-auto px-3 py-1 rounded-md text-xl text-white bg-black">Login</button>
    </form>
        
    <?php } ?>

    <!-- <h2 class="my-5 text-2xl flex justify-center" >Login</h2>

    <form action="includes/login.inc.php" method="post"
        class="mx-auto w-fit flex flex-col gap-3">
        <input class="border border-black px-3 py-1 rounded" type="text" name="username" placeholder="Username">
        <input class="border border-black px-3 py-1 rounded" type="password" name="pwd" placeholder="Password">
        <button class="w-min mx-auto px-3 py-1 rounded-md text-xl text-white bg-black">Login</button>
    </form> -->

    <?php if (isset($_SESSION["user_id"])) {?>
    <h2 class="my-5 text-2xl flex justify-center" >Logout</h2>

    <form action="includes/logout.inc.php" method="post"
        class="mx-auto w-fit flex flex-col gap-3">
        <button class="w-min mx-auto px-3 py-1 rounded-md text-xl text-white bg-black">Logout</button>
    </form>

    <?php } ?>

    <?php
    check_login_errors();
    ?>

    <?php
    check_signup_errors();
    ?>

</body>
</html>