<?php include "conn.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view</title>
</head>
<body>
    <a href="post.php">ok</a>
    <?php
        $sql = 'SELECT * FROM image ORDER BY id DESC';
        $res = mysqli_query($conn,$sql);

        if(mysqli_num_rows($res)>0){
            while($image = mysqli_fetch_assoc($res)){ ?>
                <div class="image">
                    <img src = "../upload-files/<?php echo $image['image_url'];?>">
                    <p><?php echo $image['content'];?></p>
                </div>

            
    <?php } }?>                
    <?php
        $sql = 'SELECT * FROM video ORDER BY id DESC';
        $res = mysqli_query($conn,$sql);

        if(mysqli_num_rows($res)>0){
            while($video = mysqli_fetch_assoc($res)){ ?>
                <div class="video">
                    <video src="../upload-files/<?php echo $video['video_url']?>"controls>
                    </video>
                    <p><?php echo $video['content'];?></p>
                </div>
    <?php } }?> 
</body>
</html>