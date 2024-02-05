<?php
    if (isset($_POST['submit'])) echo $_POST['name'] . ' ' . $_POST['age'] . '<br>' ;
    // echo $_POST['name'] . ' ' . $_POST['age'] . '<br>' ;
    // $string = "String $GET";
    // echo $string;
?>

<a href="<?php echo $_SERVER['PHP_SELF'];?>?name=Andrei&age=27">Click</a>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
    <div>
        <label for="name">Name: </label>
        <input type="text" id="name" name="name">
    </div>
    <div>
        <label for="age">Age: </label>
        <input type="text" id="age" name="age">
    </div>
    <input type="submit" value="Submit" name="submit">
</form>