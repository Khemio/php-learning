<?php
    session_start();

    session_destroy();

    header('Location: /php-crashcourse/13_sessions.php');
    ?>