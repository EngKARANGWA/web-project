<?php
require_once('../js/server.php');
// require_once('../js/connect.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard </title>
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
                            <!-- <ion-icon name="logo-apple"></ion-icon> -->
                        </span>
                        <span class="title">Carshare Rambagira</span>
                    </a>
                </li>

                <li>
                    <a href="#">
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
                    <a href="password.html">
                        <span class="icon">
                            <ion-icon name="lock-closed-outline"></ion-icon>
                        </span>
                        <span class="title">Password</span>
                    </a>
                </li>

                <li>
                    <a href="../homepage.html">
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
                        <input type="text" id="input-box" placeholder="Search here" autocomplete="off">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>

                <div class="user">
                    <img src="assets/imgs/profile.jpg" alt="">
                </div>
            </div>
            <div class="name">
            <?php
$result=mysqli_query($con,"SELECT * FROM users");
$row= mysqli_fetch_assoc($result);

echo $row["names"];
?>
            </div>
            <!-- ======================= Cards ================== -->
            <div class="cardBox">
                <div class="card">
                    <div>
                        <div class="numbers">500</div>
                        <div class="cardName">Daily Views</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="eye-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">5</div>
                        <div class="cardName">Sales</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="cart-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">50</div>
                        <div class="cardName">Comments</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="chatbubbles-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">500,000 Rwf</div>
                        <div class="cardName">Earning</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="cash-outline"></ion-icon>
                    </div>
                </div>
            </div>

            <!-- ================ Order Details List ================= -->
            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Recent Orders</h2>
                        <a href="property.php" class="btn">MY_CARS</a>
                    </div>

                    <table>
                        <thead>
                            <tr>
                                <td>Name</td>
                                <td>plateNo</td>
                                <td>Price</td>
                                <td>Payment</td>
                                <td>Status</td>
                                <td>timein</td>
                                <td>timeout</td>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>JAC trunk</td>
                                <td>RAF 522 H</td>
                                <td>350000 RWF</td>
                                <td>Paid</td>
                                <td><span class="status delivered">Delivered</span></td>
                                <td>15_05_2023</td>
                                <td>15_09_2023</td>
                            </tr>

                            <tr>
                                <td>RAV4</td>
                                <td>RAD 132 G</td>
                                <td>90000 Rwf</td>
                                <td>Due</td>
                                <td><span class="status pending">Pending</span></td>
                                <td>30_08_2023</td>
                                <td>1_10_2023</td>
                            </tr>

                            <tr>
                                <td>Hiace</td>
                                <td>RAD 255 G</td>
                                <td>120000 RWF</td>
                                <td>Paid</td>
                                <td><span class="status return">Returned</span></td>
                                <td>05_07_2023</td>
                                <td>20_08_2023</td>
                            </tr>

                            <tr>
                                <td>Coaster bus</td>
                                <td>RAF 037 Z</td>
                                <td>150000 RWF</td>
                                <td>Due</td>
                                <td><span class="status inProgress">In Progress</span></td>
                                <td>31_08_2023</td>
                                <td>15_09_2023</td>
                            </tr>

                            <tr>
                                <td>Hiace</td>
                                <td>RAF 057 C</td>
                                <td>100000 RWF</td>
                                <td>Due</td>
                                <td><span class="status pending">Pending</span></td>
                                <td>31_08_2023</td>
                                <td>15_09_2023</td>
                            </tr>

                            <tr>
                                <td>Toyota</td>
                                <td>RAD 001 C</td>
                                <td>120000 RWF</td>
                                <td>Paid</td>
                                <td><span class="status return">Returned</span></td>
                                <td>31_08_2023</td>
                                <td>15_09_2023</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- ================= New Customers ================ -->
                <div class="recentCustomers">
                    <div class="cardHeader">
                        <h2>Bookers</h2>
                    </div>

                    <table>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets/imgs/customer02.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>David <br> <span>Nyagatare,Karangazi</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets/imgs/mich.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Amit <br> <span>Nyarugenge,Gitega</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets/imgs/customer02.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>David <br> <span>Nyanza,Nyagatovu</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets/imgs/inswa.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Amit <br> <span>Kicukiro,Busanza</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets/imgs/customer02.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>David <br> <span>Bugesera,Kabare</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets/imgs/customer02.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Amit <br> <span>Musanze,Kinigi</span></h4>
                            </td>
                        </tr>
                    </table>
                </div>
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