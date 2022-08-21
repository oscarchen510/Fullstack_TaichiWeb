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
            <h1>關於我們</h1>
    </section>


<!-- ------------about us content------------- -->

    <section class="about-us">
        <div class="row">
            <div class="about-col">
            <h1>六清太極拳成立緣由</h1>
            <p>每個人接觸太極拳的機緣不同，練習太極拳的原因也不同。好比說我從大學接觸武術社團學習各種拳術，
                都是想如何練出驚人的力道，一揮手可將人甩的老遠，一拳可震碎幾塊磚，為了能變成武林高手養成每日練拳的習慣，
                也維持了20幾年。直到有天上班工作累了，假日看見有人打太極拳，想起以前最早學的就是太極拳，
                跟著比劃做了招”起勢”，剎時間身上累積的壓力與心理的緊繃，隨著兩手緩緩下按而逐漸沉入腳底，
                才突然覺醒太極拳不是光字面上的＂拳術＂，<b class="text-b">練習太極拳是可以療癒疲憊的身體、放空緊繃的思緒讓身心都輕鬆自在的
                一種法門</b>。於是我開始認真地去瞭解太極拳。在六輕上班的同仁多多少少因為工作壓力，
                導致肌肉緊繃、姿勢不良、精神緊張等，也因為這樣的因素在長官與同仁的鼓勵下創設了＂太輕太極拳社＂，藉由下班後的健康社團活動，教大家舒展筋骨、吐故納薪、放鬆心情以恢復活力。隨著教學相長，讓我對於太極拳有了更進一步的體認，於是將[輕]改為[清]，成立了
                <b class="text-b">” 六清太極拳社 ”。</b>
            </p>
            </div>
            <div class="about-col">
                <img src="../image/太極拳.jpg" alt="可放之後介紹相關圖片">
            </div>
        </div>
    </section>


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
