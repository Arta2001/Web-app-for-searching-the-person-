<?php
/* Kontrollon sesionin */
include('config.php');
session_start();
$user_check=$_SESSION['emri'];
$ses_sql = mysqli_query($conn,"SELECT Emri FROM akt WHERE Emri='$user_check' ");
$row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
$login_user=$row['Emri'];
if(!isset($user_verifikimi))
{ header("Location: index.php");} 
?>