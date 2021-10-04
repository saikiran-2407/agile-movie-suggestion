<?php
include "conn.php";
?>
<?php

$fullname=$_POST['fullname'];
$id=$_POST['id'];
$phonenumber=$_POST['phonenumber'];
$password=$_POST['password'];

$sql="INSERT INTO customer ( fullname,id, phonenumber, password) VALUES ('$fullname','$id','$phonenumber','$password')";

if (mysqli_query($conn, $sql)){
            header('Location: login.html');
        }
?>
