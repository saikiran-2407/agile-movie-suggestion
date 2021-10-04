<?php
include "conn.php";
?>
<?php

$fullname=$_POST['fullname'];
$id=$_POST['id'];
$phone=$_POST['phonenumber'];
$password=$_POST['password'];

$sql="INSERT INTO customer1 ( fullname,id, phone, password) VALUES ('$fullname','$id','$phone','$password')";

if (mysqli_query($conn, $sql)){
            header('Location: login.html');
        }
?>
