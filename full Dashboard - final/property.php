<?php
require("assets/myserver.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>password</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="logo-"></ion-icon>
                        </span>
                        <span class="title"><h3>Carshare Rambagira</h3></span>
                    </a>
                </li>

                <li>
                    <a href="index(2).php">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="Bookers.html">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Customers</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="chatbubble-outline"></ion-icon>
                        </span>
                        <span class="title">Messages</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="help-outline"></ion-icon>
                        </span>
                        <span class="title">Help</span>
                    </a>
                </li>

                <li>
                    <a href="assets/css/setting.html">
                        <span class="icon">
                            <ion-icon name="person"></ion-icon>
                        </span>
                        <span class="title">Profile</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="lock-closed-outline"></ion-icon>
                        </span>
                        <span class="title">Password</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>
             
                <div class="user">
                    <img src="assets/imgs/profile.jpg" alt="">
                </div>
            </div>
            <div class="name"><h3>KALISA Jules</h3></div>
            <!-- ======================= Cards ================== -->
 
            <!-- ================ Order Details List ================= -->
            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>My cars</h2>
                        <a href="form.html" class="btn">ADD_CAR</a>
                    </div>

                    <table>
                        <thead>
                            <tr>
                                <td>plate_number</td>
                                <td>name</td>
                                <td>price_per_day</td>
                                <td>Licences</td>
                                <td>car_photo</td>
                                <td>Delete</td>
                            </tr>
                            
                            <?php
                        $result = mysqli_query($con,"SELECT * FROM cars");
                       while($row = mysqli_fetch_assoc($result)){
                           

 
?> <tr>
                                <td><?php echo $row['plateNo'];?></td>
                                <td><?php echo $row['marker'];?></td>
                                <td><?php echo $row['rent'];?></td>
                                <td><?php echo $row['licence'];?></td>
                                <td><?php echo '<div><img src="'. $row['car_photo'].'"width="300px";height="300px">';?></td>
                                <td><ion-icon name="trash"></ion-icon></td>
                            </tr>
                            <?php } ?>
                                <table id="btn1" class="table">
                            </tr>
                        </thead>
                    </table>
                </div>

                <!-- ================= New car ================ -->
                <form action="./assets/regcar.php" method="post">
                    <h3>Add your car here</h3>
                    Plate_No:<input type="text" id="plateno" name="plateNo"><br><br>
                    Marker:<input type="text" name="marker"><br><br>
                    Price:<input type="text" name="rent"><br><br>
                    yello card:<input type="file" accept="image/pdf" name="licence"><br><br>
                    Car photo:<input type="file" accept="image/jpg" name="car_photo">
                    <br><br>
                    <input type="submit" name="add" value="submit">
                    <hr>
                  </form>
            </div>
        </div>
    </div>

    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>