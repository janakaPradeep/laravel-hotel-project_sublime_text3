
<?php
echo"fail to conect to mysql";
include 'index.html'
$con=mysqli_connect("localhost","ssssss","root","hotel");
if(mysqli_connect_errno())
{

echo"fail to conect to mysql" .mysqli_connect_errno();
	
}
$name=mysqli_real_escape_string($con,$_POST['name']);
$address=mysqli_real_escape_string($con,$_POST['address']);
$city=mysqli_real_escape_string($con,$_POST['city']);
$sql="INSERT INTO info(name,address,city)
VALUES('$name','$address','$city')";

echo"fail to conect to mysql";
if(!mysqli_query($con,$sql))
{
die('Error:'.mysqli_error($con));


}

//header('Location:thank.html');
mysqli_close($con);
?>