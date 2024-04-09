<?php

$server="localhost";
$username="root";
$password="";
$dbname="webcoding";

$con=mysqli_connect($server,$username,$password,$dbname);
if(!$con)
{
    echo"not connected ";

}
// else{

//     echo"connected";
// }

$username = $_POST['username'];
$password = $_POST['passw'];

$sql="INSERT INTO `loginsystem`(`username`, `passwordd`) VALUES ('$username','$password')";

$result=mysqli_query($con,$sql);

if($result)
{
    echo"data sumitted";
}
else{
    echo"query failed...!";
}




?>