<?php
include "./web/postneeded-files/conn.php";
?>

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
            <h1>文章</h1>
    </section>
    

<!-- -------------------------article---------------------------------- -->
    <div class="video-anchor"><a href="https://www.youtube.com/watch?v=pNWvQ6bzMFs" 
    target="_blank">賀順定師傅的訪談影片</a></div>
    <?php
        $sql = 'SELECT * FROM image ORDER BY id DESC';
        $res = mysqli_query($conn,$sql);

        if(mysqli_num_rows($res)>0){
            while($image = mysqli_fetch_assoc($res)){ ?>

                <div class="image-div">
                    <img class="photo" src = "./web/upload-files/<?php echo $image['image_url'];?>">
                    <div class="comment"><p><?php echo $image['content'];?></p></div>
                </div>
            
    <?php } }?>

    <?php
        $sql = 'SELECT * FROM video ORDER BY id DESC';
        $res = mysqli_query($conn,$sql);

        if(mysqli_num_rows($res)>0){
            while($video = mysqli_fetch_assoc($res)){ ?>
                <div class="video-div">
                    <video src="./web/upload-files/<?php echo $video['video_url']?>"controls>
                    </video>
                    <div class="comment"><p><?php echo $video['content'];?></p></div>
                </div>
    <?php } }?> 
















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




