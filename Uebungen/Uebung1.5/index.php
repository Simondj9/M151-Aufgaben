<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['name'];
        $Klasse = $_POST['Klasse'];
        echo "Hallo {$username}!";
        echo "Du bist in {$Klasse}!";

    }
?>
<form method="POST" action="http://m151.test/Uebungen/Uebung1.5/">
    <input type="text" name="name" placeholder="Benutzername" />
    <select name="Klasse" id="Klasse">
    <option value="1a">1a</option>
    <option value="1b">1b</option>
    <option value="1c">1c</option>
    <option value="1d">1d</option>
    </select>
    <input type="submit" value="Absenden" />
</form>