<?php 
session_start();

if(!isset($_SESSION['hasib_lgn'])){
	header('location: login.php');
	die();
}else{
	header('location: ../admin');
}	

?>