<?php
require("myserver.php");
$plateno=$_POST['plateNo'];
$marker=$_POST['marker'];
$rent=$_POST['rent'];
$license=$_POST['licence'];
$car_photo=$_POST['car_photo'];

echo"Addition of new car is successful..";

$sql="INSERT INTO  cars(plateNo,marker,rent,licence,car_photo) values('$plateno','$marker','$rent','$license','$car_photo')";
$result=mysqli_query($con,$sql);
if(!$result){
    echo"false".mysqli_error($con);
}
?>