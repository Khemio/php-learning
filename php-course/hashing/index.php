<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>DB Intro</title>
</head>
<body>
    <h1 class="my-5 text-2xl flex justify-center" >Signup Form</h1>

    <form action="includes/formhandler.inc.php" method="post"
        class="mx-auto w-fit flex flex-col gap-3">
        <input class="border border-black px-3 py-1 rounded" type="text" name="username" placeholder="Username">
        <input class="border border-black px-3 py-1 rounded" type="password" name="pwd" placeholder="Password">
        <input class="border border-black px-3 py-1 rounded" type="email" name="email" placeholder="Email">
        <button class="mx-auto text-xl w-min border-b-2 border-spacing-10 border-black">Signup</button>
    </form>

    

</body>
</html>