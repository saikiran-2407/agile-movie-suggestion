<?php
include "conn.php";
?>

<html>
<head>
<title> Create student table</title>
</head>
<body>
<?php
$r=$_POST["id"];
$sql = "DELETE FROM suggestion WHERE id=$r";
$conn->query($sql);
$sql = "SELECT * FROM suggestion";
$result = $conn->query($sql);
?>
<table border="1">
<caption>Suggestions</caption>
<tr><th>Id</th><th>Movie</th><th>Category</th><th>Description</th></tr>
<?php
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
?>
<tr>
<td><?php echo $row["id"]; ?></td>       
<td><?php echo $row["movie"]; ?></td> 
<td><?php echo $row["category"]; ?></td> 
<td><?php echo $row["description"]; ?></td> 

 </tr>
<?php
}    
} 

?>
</table>
</body>
</html>