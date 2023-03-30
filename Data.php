<?php
$con=new mysqli("localhost","root","","mytest");
if(!$con)
{
echo "COULD NOT CONNECT TO THE DATABASE";
}
$sql="SELECT * FROM tb_upload";
$result=$con->query($sql);
echo "<table border=1>";
echo"<th>";
echo"title";
echo"</th>";
echo"<th>";
echo"Firstname";
echo"</th>";
echo"<th>";
echo"Lastname";
echo"</th>";
echo"<th>";
echo"Address1";
echo"</th>";
echo"<th>";
echo"Address2";
echo"</th>";
echo"<th>";
echo"City";
echo"</th>";
echo"<th>";
echo"State";
echo"</th>";
echo"<th>";
echo"Zip";
echo"</th>";
echo"<th>";
echo"Photo";
echo"</th>";
echo"<th>";
while($row=$result->fetch_array())
{
echo"<tr>";
echo"<td>".$row['title']."</td>";
echo"<td>".$row['firstname']."</td>";
echo"<td>".$row['lastname']."</td>";ssssss
echo"<td>".$row['address1']."</td>";
echo"<td>".$row['address2']."</td>";
echo"<td>".$row['city']."</td>";
echo"<td>".$row['state']."</td>";
echo"<td>".$row['zip']."</td>";
echo"<td>".$row['photo']."</td>";
echo"<tr>"; }
echo"</table>";
?>
