<?php
$server = "localhost";
$username= "root";
$password="";
$dbname ="precious data";
$con =mysqli_connect("$server","$username","","$dbname");
if(!$con)
{
    echo "not connected";
}
else{
    echo"connect"
}
$name  =$_POST['name']
$email  =$_POST['email']
$number =$_POST['number']
$order  =$_POST['order']
$message =$_POST['message']

$sql ="INSERT INTO 'data'('name','email','number','order','message') VALUES
('$name','$email','$number','$order','$message')";

$result =mysqli_query($con,$sql);
if($result)
{
    echo "data submited";
}
else
{
    echo"error";
}



?>
