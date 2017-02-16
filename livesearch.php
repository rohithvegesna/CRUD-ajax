<?php
$q = $_GET['q'];

include "db.php";
$sql="SELECT * FROM data WHERE fn LIKE '%".$q."%' OR ln LIKE '%".$q."%'";
$result = mysqli_query($MySQLiconn,$sql);
while($row = mysqli_fetch_array($result)) {
    echo "<tr><td>".$row['id']."</td>
		<td>".$row['fn']."</td>
		<td>".$row['ln']."</td>
		<td><a href='?edit=".$row['id']."' onclick='return confirm('sure to edit !'); ' >edit</a></td>
		<td><a href='?del=".$row['id']."' onclick='return confirm('sure to delete !'); ' >delete</a></td></tr>";
}
mysqli_close($MySQLiconn);
?>