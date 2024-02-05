<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <main>
        <form action="includes/formhandler.php" method="post">
            <div>
                <label for="firstname">Firstname?</label>
                <input type="text" id="firstname" name="firstname" placeholder="Firstname...">
            </div>

            <div>
                <label for="lastname">Lastname?</label>
                <input type="text" id="lastname" name="lastname" placeholder="Lastname...">
            </div>

            <div>
                <label for="favouritepet">Favourite pet?</label>
                <select type="text" id="favouritepet" name="favouritepet" placeholder="Firstname...">
                    <option value="none">None</option>
                    <option value="dog">Dog</option>
                    <option value="cat">Cat</option>
                    <option value="bird">Bird</option>
                </select>
            </div>

            <button type="submit">Submit</button>
        </form>
    </main>
</body>
</html>