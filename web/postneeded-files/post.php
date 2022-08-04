
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,600;0,700;1,100&display=swap" rel="stylesheet">
    <title>Admin Post</title>
</head>
<body>
    <?php if(isset($_GET['error'])): ?>
        <p><?php echo $_GET['error']; ?></p>
    <?php endif ?>

    <form action="image.php" method="post" enctype="multipart/form-data"><!-- 一定要加enctype="multipart/form-data" -->
        <input type="file" name="my_image">
        <input type="text" name="content" placeholder="註解">
        <input type="submit" name="img-submit" value="照片上傳">
    </form>
    <form action="video.php" method="post" enctype="multipart/form-data"><!-- 一定要加enctype="multipart/form-data" -->
        <input type="file" name="my_video">
        <input type="text" name="content" placeholder="註解">
        <input type="submit" name="video-submit" value="影片上傳">
    </form>
</body>
</html>