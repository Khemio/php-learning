<?php
    session_start();

    if (isset($_SESSION['username'])) {
        echo "<h1>Hello $_SESSION[username]</h1>";
        echo '<a href="logout.php">Logout</a>';
    } else {
        echo 'Hello Guest';
        echo '<a href="../13_sessions.php">Go Back</a>';
    }
?>