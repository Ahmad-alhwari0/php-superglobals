<?php
setcookie("username", "", time() - 3600, "/", "localhost");

header("Location: index.php");
exit;