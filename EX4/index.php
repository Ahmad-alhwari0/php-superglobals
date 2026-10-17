<?php
session_start();

if (!isset($_SESSION["tasks"])) {
    $_SESSION["tasks"] = [];
}
if (isset($_POST["add"])) {
    $_SESSION["tasks"][] = $_POST["task"];
}
if (isset($_POST["delete"])) {
    $index=$_POST["delete"];
    unset($_SESSION["tasks"][$index]);
}



$tasks = $_SESSION["tasks"];
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <h1>to do list</h1>

    <form action="index.php" method="post">
        <input type="text" name="task" required>

        <div>
            <button type="submit" name="add">add task</button>
        </div>



    </form>

    <ul>
        <?php
        foreach ($tasks as $index => $task) {
            echo "<li>";
            echo $task;
            echo "<form method='post' style='display:inline'>";
            echo "<button name='delete' value='" . $index . "'>Delete</button>";
            echo "</form>";
            echo "</li>";
        }
        ?>
    </ul>
</body>

</html>