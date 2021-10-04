<?php
$conn = mysqli_connect('localhost','root','','joy');

if(mysqli_connect_errno()){
    echo " fail to connect :".mysqli_connect_errno();
    return;
}