<?php
    $username = $_GET['username'];

    echo "Hallo {$username}!<br />";
    $username = $_GET['age'];
    if ($_GET['age']) {
        $age = $_GET['age'];
        echo "Du bist {$age} Jahre alt.";
    }
?>