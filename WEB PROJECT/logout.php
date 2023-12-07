<?php
session_start();


if( isset($_SESSION['logged_in']) ){
	$_SESSION['logged_in'] = false;
	session_unset();
	header("location: index.php");
	die;
} 