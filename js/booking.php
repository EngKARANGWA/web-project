<?php
require("server.php");

$name=$_POST['names'];
$nationalId=$_POST['nationalId'];
$tel=$_POST['tel'];
$resident=$_POST['resident'];
$departing=$_POST['departing'];
$returning=$_POST['returning'];
$Payment=$_POST['Payment'];
$email=$_POST['email'];

$book= mysqli_query($con,"INSERT INTO booking(names,nationalId,phone,street,departing,returning,payment,email)
VALUES('$name','$nationalId','$tel','$resident','$departing','$returning','$Payment','$email')");
if(!$book){
    echo "false".mysqli_error($con);
}else{
    echo"creation of new account is successful..";
}
?>