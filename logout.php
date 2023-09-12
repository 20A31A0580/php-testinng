<?php
session_start();
if(isset($_SESSION['us_id']))
{
    unset($_SESSION['us_id']);
}
header("Location:login.php");
die;
