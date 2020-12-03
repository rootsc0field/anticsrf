<?php 
// Anti Csrf Coded by sadboy5
//user information
$username = $_POST["default_username"]; //post username
$password = $_POST["default_password"]; //post password
//create new cookie
setcookie("user",$username,time()+3600); //1 hour -> delete cookie(username)
setcookie("pass",$password,time()+3600); //1 hour -> delete cookie(password)
?>