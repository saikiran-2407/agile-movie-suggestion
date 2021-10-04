<?php
include "conn.php";
?>
<html>
<head>
<title>view</title>
</head>
<body>
<?php

//$tn=$_POST["id"];
$sql = "SELECT * FROM suggestion";
$result = $conn->query($sql);
?>
<center><table border="1">
<caption>All suggestions</caption>
<tr><th>Id</th><th>Movie</th><th>Category</th><th>Description</th></tr>
<?php
if (mysqli_num_rows($result ) > 0) {
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
$conn->close();
?>
</center>

</body>
</html>