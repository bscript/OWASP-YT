<?php

if (isset($_POST['name'])) {
    $name = $_POST['name']; 
    echo "<br>Your name is: ". $name;
}

?>

<form action="" method="POST">
    <br>
    Name <input type="text" name="name">
    <input type="submit" value="Say My Name">
</form>