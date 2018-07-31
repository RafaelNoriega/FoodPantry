<?php
session_start();
if(!isset($_SESSION['active']))
{
	header('Location: ../index.php');
}
if($_SESSION['role'] == "admin")
{
		require 'admin.php';
}
else require 'volunteer.php';

?>
