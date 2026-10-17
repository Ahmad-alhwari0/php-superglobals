<?php
$method = $_SERVER["REQUEST_METHOD"];

if ($method == "POST") {
    $email = $_POST["email"];
} else {
        $email = $_GET["email"];

}

echo "Method: " . $method . "<br>";
echo "Email: " . $email;