<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="output.css">
    <title>Calculator</title>
</head>
<body>
    <main class="my-5 flex flex-col content-center items-center gap-10">
        <h1>Calculator</h1>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"
            class="flex gap-3">
            <input type="number" name="num01" placeholder="Number 1">
            <select name="operator">
                <option value="add">+</option>
                <option value="subtract">-</option>
                <option value="multiply">*</option>
                <option value="divide">/</option>
            </select>
            <input type="number" name="num02" placeholder="Number 2">

            <button>Calculate</button>

        </form>
    </main>

    <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num01 = filter_input(INPUT_POST, "num01", FILTER_SANITIZE_NUMBER_FLOAT);
            $num02 = filter_input(INPUT_POST, "num02", FILTER_SANITIZE_NUMBER_FLOAT);
            $operator = htmlspecialchars($_POST["operator"]);

            $errors = false;

            if(empty($num01) || empty($num02 || empty($operator))) {
                echo "<p>Fill in all the fields!</p>";
                $errors = true;
            }

            if(!is_numeric($num01) || !is_numeric($num02)) {
                echo "<p>Only write numbers!</p>";
                $errors = true;
            }

            if (!$errors) {
                $result = match ($operator) {
                    "add" => $num01 + $num02,
                    "subtract" => $num01 - $num02,
                    "multiply" => $num01 * $num02,
                    "divide" => $num01 / $num02,
                    default => "Something went wrong",
                };

                echo "<p class='text-green-500 flex justify-center'>Result = {$result}</p>";
            }
        }
    ?>

</body>
</html>