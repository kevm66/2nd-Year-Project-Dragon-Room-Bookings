<?php
session_start();
if(isset($_SESSION['user'])=="")
{
 echo "<script>alert('You must log in first to continue!');</script>";
 echo "<script>window.location = 'login.php';</script>";
}
include_once 'classes/dbconnect.php';

if(isset($_POST['btn-addbooking']))
{
 $name = mysql_real_escape_string($_POST['name']);
 $description = mysql_real_escape_string($_POST['description']);
 $date = mysql_real_escape_string($POST['date']);
 $capacity = mysql_real_escape_string($_POST['capacity']);
 $owner = $_SESSION['user'];
 if(mysql_query("INSERT INTO bookings (name, description, date, capacity, owner) VALUES ('$name','$description','$date','$capacity','$owner')"))
 {
  
        echo"<script>alert('successfully added room ');</script>";
        
 }
 else
 {
  
        echo"<script>alert('error while adding your room...');</script>";
        
 }
}
?>