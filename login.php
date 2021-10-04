<?php
include "conn.php";
?>

<?php  
//include "conn.php";
//require_once "conn.php";
//session_start();
if (isset($_POST['id']) and isset($_POST['password'])){
	

$id = $_POST['id'];
$password = $_POST['password'];
$name="";


$qu = "SELECT * FROM customer1 WHERE id='$id' and password='$password'";
 
$result = mysqli_query($conn, $qu) or die(mysqli_error($conn));
$count = mysqli_num_rows($result);
while($row=mysqli_fetch_array($result)){
    $name=$row['fullname'];
}
//
if ($count == 1){
            $_SESSION['id'] = $id;
          $_SESSION['name'] = $name;
            header('Location: view.html');
           

        }else{
          header('Location: login.html');
          echo "failed";
}
}
?>