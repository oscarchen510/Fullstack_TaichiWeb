<?php

/* video session */

if (isset($_POST['video-submit']) && isset($_FILES['my_video'])) {

    include "conn.php";

    echo "<pre>";
    print_r($_FILES['my_video']);

    $video_name = $_FILES['my_video']['name'];
    $video_type = $_FILES['my_video']['type'];
    $tmp_name = $_FILES['my_video']['tmp_name'];
    $error = $_FILES['my_video']['error'];
    $video_size = $_FILES['my_video']['size'];
    $content = htmlspecialchars($_POST['content']);

    if($error === 0){
        if($video_size > 1000000000){
            $em = "Sorry, your file is too large!";
            header("Location: post.php?error=$em");
        }else{
            $video_ex = pathinfo($video_name, PATHINFO_EXTENSION);
            $video_ex_lc = strtolower($video_ex);
             echo "$video_ex_lc"; 
            header("Location:post.php");

            $allowed_exs = array('mp4', 'webm','avi','flv');
            
            if(in_array($video_ex_lc, $allowed_exs)){
                $new_video_name = uniqid('VIDEO-',true).'.'.$video_ex_lc;
                $video_upload_path = '../upload-files/'.$new_video_name;
                move_uploaded_file($tmp_name, $video_upload_path);

                //Insert into Database
                $sql = "INSERT INTO video(video_url, content) VALUES ('$video_upload_path','$content')";
                mysqli_query($conn, $sql);
                /*header("Location:view.php"); */

            }else{
                $em = "You can't upload files of this type";
                header("Location: post.php?error=$em");
            }
        }
    }else{
        $em = "unknown error occured!";
        header("Location: post.php?error=$em");
    }



}else{
    header("Location: post.php");
}


?>