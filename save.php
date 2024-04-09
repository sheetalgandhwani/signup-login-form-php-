<?php

$server="localhost";
$username="root";
$password="";
$dbname="webcoding";


$con = mysqli_connect($server,$username,$password,$dbname);

if(!$con)
{

    echo"not connected";
}

//start
    
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$city=$_POST['city'];
$password=$_POST['pass'];

$sql="INSERT INTO `signupsystem`(`fullname`, `email`, `phone`, `city`, `addpassword`) VALUES ('$name','$email','$phone','$city','$password')";

$result=mysqli_query($con,$sql);

if($result)
{
    echo"data submitted";
}
else{
    echo"query failed...!";
}

?>