<?php
setcookie("username", "Abd", time() + 3600, "/", "localhost", false, true);

header("Location: index.php");
exit;