<?php
session_start();
include("connection.php");
include("functions.php");
if($_SERVER['REQUEST_METHOD']=="POST")
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    if(!empty($username) && !empty($password) && !empty($username))
    {   $us_id=random_num(20);
        $query="insert into users (us_id,username,password) values ('$us_id','$username','$password')";
        mysqli_query($con,$query);
        header("Location:login.php");
        die;
    }else
    {
        echo "please enter some valid informantion!! ";
    }
}
?>
<html>
<head>
    <title>signup</title>
</head>
<body>
    <style type="text/css">
        #text{
            height:25px;
            border-radius:5px;
            padding:4px;
            border: solid thin #aaa;
            width:100%;
        }
        #button{
            padding:10px;
            width:100px;
            color:white;
            background-color:lightblue;
            border:none;
        }
        #box{
            background-color:grey;
            margin:auto;
            width:300px;
            padding:20px;
        }
    </style>
    <div id="box">
        <form method="post">
            <div style="font-size:20px;margin:10px;color:white;">signup</div>
            <input id="text" type="text" name="username"><br><br>
            <input id="text" type="password" name="password"><br><br>
            <input id="button" type="submit" value="signup"><br><br>
            <a href="login.php">click to login</a><br><br>
        </form>
    </div>

</body>
</html>