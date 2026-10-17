<?php

session_start();

if (!isset($_SESSION["ex7_count"])){
    $_SESSION["ex7_count"] = 0;
}


$_SESSION["ex7_count"]++;

echo "You have visited this page " . $_SESSION["ex7_count"] . "  times";
