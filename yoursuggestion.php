<?php
include "conn.php";
?>
<html>
<head>
<title>My suggestions</title>
</head>
<body>
<?php


$sql = "SELECT * FROM suggestion";
$result = $conn->query($sql);
?>
<center><table border="1">
<caption><h2>Your suggestions</h2></caption>
<tr><th>movie</th><th>Category</th><th>Description</th></tr>
<?php
if (mysqli_num_rows($result ) > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
?>
<tr>
<td><?php echo $row["movie"]; ?></td>       
<td><?php echo $row["category"]; ?></td> 
<td><?php echo $row["description"]; ?></td> 
 </tr>
<?php
}    
} 
$conn->close();
?>
</center>

</body>
</html>