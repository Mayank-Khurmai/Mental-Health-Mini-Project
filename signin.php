<?php
include("class/users.php");
$signin=new users;
extract($_POST);
if($signin->signin($e,$p))
{
	$signin->url("home.php");
}
else
{
	$signin->url("login.php?run=failed");
}
?>