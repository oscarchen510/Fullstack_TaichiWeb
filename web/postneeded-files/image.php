<?php
/* image session */
if (isset($_POST['img-submit']) && isset($_FILES['my_image'])) {

    include "conn.php";

    /* echo "<pre>";
    print_r($_FILES['my_image']);
    echo "</pre>"; */

    $img_name = $_FILES['my_image']['name'];
    $img_type = $_FILES['my_image']['type'];
    $tmp_name = $_FILES['my_image']['tmp_name'];
    $error = $_FILES['my_image']['error'];
    $img_size = $_FILES['my_image']['size'];
    $content = $_POST['content'];

    if($error === 0){
        if($img_size > 2500000){
            $em = "Sorry, your file is too large!";
            header("Location: post.php?error=$em");
        }else{
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_ex);
            /* echo "$img_ex_lc"; */
            header("Location:post.php");

            $allowed_exs = array('jpg', 'png','jpeg');
            
            if(in_array($img_ex_lc, $allowed_exs)){
                $new_img_name = uniqid('IMG-',true).'.'.$img_ex_lc;
                $img_upload_path = '../upload-files/'.$new_img_name;
                move_uploaded_file($tmp_name, $img_upload_path);

                //Insert into Database
                $sql = "INSERT INTO image(image_url, content) VALUES ('$img_upload_path','$content')";
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