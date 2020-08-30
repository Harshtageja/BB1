<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
$conn=new mysqli("localhost","root","bbtrucks","truck");
$sql="select *from feedback";
$res=$conn->query($sql);
if($res->num_rows>0){
	echo "<table>
<tr>
<th>Id</th>
<th>FirstName</th>
<th>LastName</th>
<th>Country</th>
<th>feedback</th>
<th>REG_DATE</th>
</tr>";
while($row=$res->fetch_assoc()){
 echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['FirstName'] . "</td>";
   echo "<td>" . $row['LastName'] . "</td>";
    echo "<td>" . $row['country'] . "</td>";
     echo "<td>" . $row['feedback'] . "</td>";
  echo "<td>" . $row['REG_DATE'] . "</td>";
  
  echo "</tr>";
}
echo "</table";

}
	?>


</body>
</html>