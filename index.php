<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Olus Kitchen</title>
    <?php include 'cdn.php'; ?>
    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./css/index.css">

</head>

<body>
    <div class="login-all">
        <div class="login-image">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="./images/banku.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="./images/banku.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="login-forms">
            <div class="w3-bar w3-black">
                <button class="w3-bar-item w3-button tablink w3-red" onclick="openCity(event,'London')">Login</button>
                <button class="w3-bar-item w3-button tablink" onclick="openCity(event,'Paris')">Sign up</button>
            </div>

            <div id="London" class="w3-container w3-border city">
                <div class="forms-all">
                    <div class="logo"></div>
                    <h1>Login - Olu's Kitchen</h1>
                    <form action="login.php" method="post">
                        <div class="forms">
                            <label>Username:</label>
                            <input type="text" name="username" placeholder="Enter your username">
                        </div>
                        <div class="forms">
                            <label>Password:</label>
                            <input type="password" name="password" placeholder="Enter your password">
                        </div>
                        <div class="forms">
                            <button type="submit">Login</button>
                        </div>
                    </form>
                </div>
            </div>

            <div id="Paris" class="w3-container w3-border city" style="display:none">
                <div class="forms-all">
                    <br>
                    <br>
                    <br>
                    <h1>Sign Up - Olu's Kitchen</h1>
                    <form action="signup.php" method="post">
                        <div class="forms">
                            <label>Username:</label>
                            <input type="text" name="username" placeholder="Enter your username">
                        </div>
                        <div class="forms">
                            <label>Password:</label>
                            <input type="password" name="password" placeholder="Enter your password">
                        </div>
                        <div class="forms">
                            <label>Confirm Password:</label>
                            <input type="password" name="confirm_password" placeholder="Enter your confirm password">
                        </div>
                        <div class="forms">
                            <button type="submit">Sign Up</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function openCity(evt, cityName) {
            var i, x, tablinks;
            x = document.getElementsByClassName("city");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablink");
            for (i = 0; i < x.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " w3-red";
        }
    </script>
    <script src="./js/index.js"></script>
</body>

</html>