<?php

    session_start();
    if (!isset($_SESSION['email'])){
        header("Location: loginPage.html");
    }


    if($_POST['upload']){
        $id_post = $_POST['id_post'];
        $title = $_POST['title'];
        $content = $_POST['editor1'];
        $image = $_FILES['image']['name'];

        $target_dir = "img_news/";
        $target_file = $target_dir.basename($_FILES['image']['name']);

        $db = mysqli_connect("localhost", "root" , "", "web_social");
        $sql = "UPDATE post_tb SET title='$title', content='$content', image='$image' WHERE id_post='$id_post'";
        mysqli_query($db, $sql);

        if(move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
            header('Location: beranda.php');
            $msg = "Image Upload Successsfully";
        }else{
            $msg = "There Was A Problem uploading file";
        }


    }

?>