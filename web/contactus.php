<!DOCTYPE html>
<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,600;0,700;1,100&display=swap" rel="stylesheet">
    <title>六清太極拳</title>
    </head>
    <body>
        <section class="sub-header">  
            <nav>
                <a href="index.php"><img src="../image/六清太極拳-LOGO_.jpg" alt="martial-arts"></a>
                <div class="nav-links" id="navLinks">
                    <i class="fa fa-times" onclick="hideMenu()"></i>
                    <ul>
                        <li><a href="index.php">主頁面</a></li>
                        <li><a href="aboutus.php">關於我們</a></li>
                        <li><a href="course.php">課程</a></li>   
                        <li><a href="article.php">文章</a></li>
                        <li><a href="location.php">地點</a></li>                    
                        <li><a href="contactus.php">聯絡我們</a></li>
                        <li><a href="login.php">登入</a></li>
                    </ul>
                </div>    
                <i class="fa fa-bars" onclick="showMenu()"></i> <!-- onclick指點擊後要做的事情 -->
            </nav>
            <h1>聯絡資訊</h1>
        </section>
<!-- ---------ctu--------------- -->
    <section class="ctu">
        <h1>聯絡我們</h1>
        <h3>師父介紹</h3>
        <p><b><u>陳盈村</u></b>師父  習武34年，師承 賀順定教授(孫祿堂師祖台灣傳人)<br>
            1995年取得教練執照<br>
            中華民國國術會教練講習班-內家拳講師&內家八卦掌教學影片試範<br>
            2009全球華人武術內家拳組金牌<br>
            2013虎尾內家拳武術班<br>
            2015太極拳班<br>
        </p>
        <div class="ctu-information">
            <img src="../image/師父資料.jpeg">
        </div>
    </section>


<!-- ---------footer------------ -->

        <section class="footer">
            <div class="icons">
                <i class="fa fa-facebook"></i>
                <i class="fa fa-twitter"></i>
                <i class="fa fa-instagram"></i>
                <i class="fa fa-linkedin"></i>
            </div>
            <p>Made with <i class="fa fa-heart-o"></i> by Oskarchen</p>
        </section>


<!-- Javascript for Toggle menu -->
        <script>
            var navLinks=document.getElementById("navLinks")/*這裡指var navLinks 是改變div裡的東西所需要的變數，
                                                            至於指令在div外面或在裡面的按鍵控制影響的都是div區塊*/
        function hideMenu(){
                navLinks.style.right="-200px";
            }
            function showMenu(){
                navLinks.style.right="0"
            }
        </script>
    </body>
<html>