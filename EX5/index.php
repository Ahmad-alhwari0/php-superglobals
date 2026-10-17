<?php

$path = $_SERVER["SCRIPT_NAME"];

$project = basename(dirname($path));
$script = basename($path);


echo "Project name: " . $project . "<br>";
echo "Script name: " . $script;


// echo "<pre>";
// print_r($_SERVER);
// echo "</pre>";