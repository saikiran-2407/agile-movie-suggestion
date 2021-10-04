<?php
include "conn.php";
?>
<?php 

$id=$_POST['id'];
$Description=$_POST['description'];
$category=$_POST['category'];
$stock=$_POST['stock'];
$price=$_POST['price'];

$sql="INSERT INTO products (id, description, category, stock, price) VALUES ( '$id', '$Description', '$category', '$stock', '$price')";

if (mysqli_query($conn, $sql)){
    header('Location: index_login.html');
}
?>