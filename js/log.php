<?php
require_once('../js/server.php');
?>

<html>
    <meta name="viewport " content="width=device-width ,initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/382a8e0c65.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <body>
        <div class="toolbar">
            <h1 style="color: #ffffff;">Carshare <span style="color:#ffffff ;">Rambagira</span></h1>
            <a href="../homepage.html">HOME</a>
            <a href="../">ABOUT US</a>
            <a href="/p2p/ptop.html">PRODUCT</a>
            <a href="">SERVICES</a>
        </div>
        <div class="form_box" style="top:40%;">
            <h1 id="title">Login</h1>
            <form action="connect.php" method="post">
                <div class="input_group">
                    <div class="input_field">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="email" id="gmail" name="email" placeholder="king@gmail.com" required>
                        <span id="emailerror"></span>
                        <script>
                            function validateemail(){
                                var email=document.getElementById("gmail").value;
                                if(email.length==0){
                                    emailerror.innerHTML="email is required"
                                    return false
                                }
                                if(!email.match(/^[A-Za-z]\._\-[0-9]*[@][gmail]*[\.][com]{2,4}$/)){
                                    emailerror.innerHTML="email invalid"
                                    return false
                                }
                            }
                        </script>
                    </div>

                    <div class="input_field">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" name="password" placeholder="password">
                    </div>

                    <div class="input_field">
                        <input type="submit" name="save" placeholder="send">
                    </div>
                    <p>for get password <a href="#">click here</a></p>
                </div>
            </form>
        </div>
        <footer class="footer" style="margin-top: 500px;">
            <div class="container">
                <div class="row">
                    <div class="footer_col">
                        <h4></h4>
                        <ul>
                            <li><a href="#"></a></li>
                        </ul>
                    </div>
                    <div class="footer_col">
                        <h4>Project</h4>
                        <ul>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">services</a></li>
                            <li><a href="#">privacy policy</a></li>
                        </ul>
                    </div>
                    <div class="footer_col">
                        <h4>Address</h4>
                        <ul>
                            <li><a href="#">FQA</a></li>
                            <li><a href="#">Shipping</a></li>
                            <li><a href="#">Order status</a></li>
                            <li><a href="#">Payment order</a></li>
                        </ul>
                    </div>
                    <div class="footer_col">
                        <h4>Products</h4>
                        <ul>
                            <li><a href="#">Private cars</a></li>
                            <li><a href="#">Buses</a></li>
                            <li><a href="#">Tracks cars</a></li>
                            <li><a href="#"></a></li>
                        </ul>
                    </div>
                    <div class="footer_col">
                        <h4>Contuct us</h4>
                        <div class="social_link">
                            <a href="#"><i class="fa-brands fa-facebook"></i></a>
                            <a href="#"><i class="fa-brands fa-square-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                            <a href="#"><i class="fa-brands fa-square-whatsapp"></i></a>
                        </div>
                    </div>
                </div>
            </div>
           </footer>
    </body>
</html>