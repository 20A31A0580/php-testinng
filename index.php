<?php
session_start();
include("connection.php");
include("functions.php");
$user_data=check_login($con);
?>
<html>
<head>
    <title>this is</title>
</head>
<body>
    <a href ="logout.php">logout</a>
    <h1>index page</h1>
    <br>
    hi, <?php echo $user_data['username']; ?>
</body>
</html>
