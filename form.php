<html>
<head>  
    <title>show  the data on html page</title> 
</head>
 <body>  
<table border="2" style="width:40 ;float:left; ">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Branch</th>
    <th>Year</th>
    <th>date</th>
</tr>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "practicedb";

$conn = new mysqli($servername, $username, $password, $dbname);

$sql ="select * from user";
$total=$conn->query($sql);


if($total->num_rows>0)
{
while($result= $total->fetch_assoc())
{
    echo"
         <tr>
         <td>".$result['ID']."</td>
         <td>".$result['Name']."</td>
         <td>".$result['Branch']."</td>
         <td>".$result['Year']."</td>
        <td>".$result['date']."</td>
         ";
}

}
else
{
    echo "No records found";
}
?>
</table>
</body>
</html>