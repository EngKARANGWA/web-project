<?php
include("server.php");
// if(isset($_POST['save'])){
    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql="SELECT * FROM users WHERE email='$email' and passwords='$password'";
    $result= mysqli_query($con,$sql);
    $row=mysqli_fetch_array($result);
    if($result){

    if($row=mysqli_num_rows($result) > 0){
        echo '<script>
        alert("Login succesful!!");
        </script>';
        header("location:../full Dashboard - final/index(2).php");
        
    }
    else {
        // header("location:../js/log.php");
        echo '<script>
        alert("login fail.invard email or password");
        </script>';
    }
}
?>