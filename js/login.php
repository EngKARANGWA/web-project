<?php
require("server.php");
$name=$_POST['names'];
$nationalId=$_POST['nationalId'];
$tel=$_POST['tel'];
$email=$_POST['email'];
$image=$_POST['images'];
$password=$_POST['password'];
echo"creation of new account is successful..";

$sql="INSERT INTO  users(names,nationalId,tel,email,images,passwords) values('$name',$nationalId,$tel,'$email','$image','$password')";
$result=mysqli_query($con,$sql);
if(!$result){
    echo"folse".mysqli_error($con);
}
?>