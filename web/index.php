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
        <section class="header">  
            <nav>
                <a href="index.php"><img src="../image/六清太極拳-LOGO_.jpg" alt="martial-arts"></a>
                <div class="nav-links" id="navLinks">
                    <i class="fa fa-times" onclick="hideMenu()"></i>
                    <ul>
                        <li><a href="index.php">HOME</a></li>
                        <li><a href="aboutus.php">ABOUT US</a></li>
                        <li><a href="course.php">COURSE</a></li>   
                        <li><a href="article.php">ARTICLE</a></li>
                        <li><a href="location.php">LOCATION</a></li>                    
                        <li><a href="contactus.php">CONTACT US</a></li>
                        <li><a href="login.php">LOGIN</a></li>
                    </ul>          
                </div>    
                <i class="fa fa-bars" onclick="showMenu()"></i> <!-- onclick指點擊後要做的事情 -->
            </nav>
        <div class="text-box">
            <h1>地表最強武術QQ</h1>
            <p>　　中国武术是中国传统文化的很重要一环，
            是中国民族体育的主要内容之一，是几千年来
            中国人民用以锻炼身体和自卫的一种方法。故称
            之为功夫，民国初期简称为国术（后为中央国术馆
            正式采用之名称）；被视为中国汉文化之精粹，故又
            称国粹。由于历史发展和地域分布关系，衍生出不同武
            术门派。中国武术主要内容包括搏击技巧、格斗手法、
            攻防策略和武器使用等技术。当中又分为理论和实践两个
            范畴。从实践中带来了有关体育、健身、和汉族武术独有之气
            功、及养生等重要功能。理论中带来了不少前人的经验和拳
            谱记录。运动形式有套路和对抗等。</p>
        </div>
    </section>
    <!-- course -->
    <section class="course">
        <h1>Courses We Offer</h1>
        <p>得罪了方丈還想走，點進我的網站還不來上課，我看妳很消剛阿</p>
        <div class="row">
            <div class="course-col">
                <h3>麥寮六清班</h3>
                <p>以武會友，以德服人。在公司被上司欺負嗎?
                    跟著陳師父的腳步推翻資本主義的淫威。</p>
            </div>
            <div class="course-col">
                <h3>虎尾內功班</h3>
                <p>站如松，坐如鐘，不動不搖，氣吞山河。來體驗過後，保證身體痠痛，四肢無力，
                    讓你晚上睡好好。</p>
            </div>
        </div>
    </section>

    <!-- ----------學習環境------------ -->
    <section class="enviroment">
        <h1>學習場地</h1>
        <div class="col">
            <div class="enviroment-col">
                <img src="../image/六輕太極拳場地.png" alt="還需更換圖片">
                <div class="layer">
                    <h3>六清麥寮</h3>
                </div>
            </div>
            <div class="enviroment-col">
                <img src="../image/虎尾內功場地.png" alt="#">
                <div class="layer">
                    <h3>虎尾興南活動中心</h3>
                </div>
            </div>
        </div>
    </section>

    <!-------------content----------------->
    <section class="contents">
        <h1>課程內容</h1>
        <p>太極八卦形意..........(內容)</p>
        <div class="row">
            <div class="contents-col">
                <img src="../image/推手.jpeg">
                <h3>推手</h3>
                <p>(內容)</p>
            </div>
            <div class="contents-col">
                <img src="../image/站樁矯正.jpg">
                <h3>站樁</h3>
                <p>(內容)</p>
            </div>
        </div>
    </section>

<!-- ---------location---------- -->

    <section class="location">
        <h1>活動地點</h1>
        <div class="row">
            <div class="huwei-location">
                <img src="../image/地點1.jpeg">                      
            </div>
            <div class="huwei-location">           
                <img src="../image/地點2.jpeg">           
            </div>
        </div>
        <h3>虎尾內功班練習地點:興南里活動中心</h3>
        <p>過興南橋後，過全家繼續行駛至看到左側廟宇，前方小路進去即為興南里活動中心</p>
    </section>

<!-- ---------ctu--------------- -->
    <section class="ctu">
        <h1>聯絡我們</h1>
        <h3>師父資料</h3>
        <div class="ctu-information">
            <img src="../image/師父資料.jpeg">
        </div>
    </section>


<!-- ---------footer------------ -->

    <section class="footer">
        <h4>關於我們</h4>
        <p>介紹</p>
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
        var navLinks = document.getElementById("navLinks")/*這裡指var navLinks 是改變div裡的東西所需要的變數，
                                                         至於指令在div外面或在裡面的按鍵控制影響的都是div區塊*/
       function hideMenu(){
            navLinks.style.right="-200px";/* style.right從右邊過來為正，向右為負 */
        }
        function showMenu(){
            navLinks.style.right="0"
        }
    </script>

    </body>
<html>