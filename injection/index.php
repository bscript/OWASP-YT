<?php

$mysql = new PDO('mysql:host=localhost;dbname=owasp', 'bor', 'bor123');

if (isset($_GET["name"])) {

    $name = $_GET["name"];

    $query = $mysql->query("SELECT age from users where name = '$name'");

    while($row = $query->fetch(PDO::FETCH_ASSOC)) {

        echo $row["age"]." years";
    } 
}

?>

<form action="" method="GET">

    <input type="text" name="name">

    <input type="submit" value="Show My Age">
</form>