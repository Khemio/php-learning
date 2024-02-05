<?php 

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $userSearch = $_POST["usersearch"];

        
        try {
            require_once "includes/dbh.inc.php";

            $query = 'SELECT * FROM comments WHERE username = :userSearch;';
            
            $stmt = $pdo->prepare($query);
            
            $stmt->bindParam(":userSearch", $userSearch);

            $stmt->execute();

            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

            $pdo = null;
            $stmt = null;
        } catch (PDOException $e) {
            die();
            echo "Query failed {$e->getMessage()}";
        }

    } else {
        header("Location: ../index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>

    <h3>Search results: </h3>

    <?php
        if(empty($results)) {
            echo "<div>
            <p>This user has no comments </p>
            </div>";
        } else {
            foreach($results as $row) {
                $id = htmlspecialchars($row['id']);
                $username = htmlspecialchars($row['username']);
                $comment = htmlspecialchars($row['comment_text']);
                echo "<div>
                <p>{$id} - {$username} - {$comment}</p>
                </div> <br>";
            }
        }
    ?>
    
</body>
</html>