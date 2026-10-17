<?php
session_start();
$number = file_get_contents("counter.txt");

if (!isset($_SESSION["visited"])) {
    $number++;

    file_put_contents("counter.txt", $number);
    $_SESSION["visited"] = true;
}

echo $number;
