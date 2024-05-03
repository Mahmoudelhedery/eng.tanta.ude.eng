<?php 
         $errors=array();

$db = mysqli_connect('localhost','root','','registration') ;


if(isset($_POST['register'])){
		$password_1= mysql_real_escape_string($_POST['password_1']);
$password_2= mysql_real_escape_string($_POST['password_2']);
//--------------------------------------------------
if(empty($password_1)){
	array_push($errors,"Password is required"); //add error to errors array

if($password_1 != $password_2){
	array_push($errors, "The two password do not match  ");}
//----------------------------------------------
	if(count($errors) == 0){
	$password= md5($password_1);
 // encrypt password befor string i database (security)
	$sql= "INSERT INTO users ( password) 
	VALUES (  '$password') ";
	mysqli_query($db , $sql);
}}
?>