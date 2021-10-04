<?php
include "conn.php";
?>
<?php

$movie=$_POST['movie'];
$fullname=$_POST['cate'];
$id=$_POST['desc'];


$sql="INSERT INTO suggestion ( movie,category	,description) VALUES ('$movie','$fullname','$id')";

if (mysqli_query($conn, $sql)){
            header('Location: view.html');
        }
?>


