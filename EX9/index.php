<a href="create.php">Create cookie</a> |
<a href="delete.php">Delete cookie</a>

<h3>All cookies:</h3>

<?php
foreach ($_COOKIE as $name => $value) {
    echo $name . " = " . $value . "<br>";
}