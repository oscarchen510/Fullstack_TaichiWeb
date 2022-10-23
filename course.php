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
                <a href="index.php"><img src="image/六清太極拳-LOGO_.jpg" alt="martial-arts"></a>
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
            <h1>我們的課程</h1>
        </section>

<!-- ------------------course------------------ -->

    <section class="course">
        <h1>課程相關資訊</h1>
        <p>招生對象:不限，有興趣即可</p>
        <p>費用:3500元/人月，一次收三個月</p>
        <div class="row">
            <div class="course-col">
                <h3>麥寮班</h3>
                <p>練習時間與地點:週三，晚上7:00~8:30<br> 
                    麥寮六輕工業區活動中心1F韻律教室</p>
            </div>
            <div class="course-col">
                <h3>虎尾班</h3>
                <p>練習時間與地點:周四，晚上8:00~9:30<br>
                    雲林縣虎尾鎮興南里活動中心2F</p>
            </div>
        </div>
    </section>




<!-- ----------學習環境------------ -->
        <section class="enviroment">
            <h1>學習場地</h1>
            <div class="col">
                <div class="enviroment-col">
                    <img src="image/六輕太極拳場地.png" alt="還需更換圖片">
                    <div class="layer">
                        <h3>六清麥寮</h3>
                    </div>
                </div>
                <div class="enviroment-col">
                    <img src="image/虎尾內功場地.png" alt="#">
                    <div class="layer">
                        <h3>六清虎尾</h3>
                    </div>
                </div>
            </div>
        </section>
    
<!-------------content----------------->
        <section class="contents">
            <h1>課程內容</h1>
            <div class="row">
                <div class="contents-col">
                    <img src="image/推手.jpeg">
                    <h3>推手</h3>
                    <p>推手的練習<br>
                    1.了解對手力的大小、方向，
                    訓練接觸力的感知靈敏度。<br>
                    2.鍛練各關節點的轉動化力。<br>
                    3.讓對手的力轉成推動你自身的球體能量，
                    形成滾動或流動，而且結構仍維持完整</p>
                </div>
                <div class="contents-col">
                    <img src="image/站樁矯正.jpg">
                    <h3>站樁</h3>
                    <p>圖為英國Simon學員學習內家拳前後姿勢對照
                    ，2015/9初學姿勢雖已調過，但因為脊椎變形
                    仍無法端正，經過11個月的練習，脊椎端正延展
                    ，整個人神采奕奕變得更年輕。此外姿勢端正了
                    ，還可避免肩、頸、腰、背疲勞與疼痛。</p>
                </div>
            </div>
        </section>
    


<!-- ---------------------footer---------------- -->

            
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