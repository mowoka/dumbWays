<?php

    $db = mysqli_connect("localhost", "root" , "", "web_social");
    // id_post=$row['id_post']
    $id_post= $_GET['id_post'];

    $sql = "DELETE from post_tb WHERE id_post = $id_post";
    mysqli_query($db, $sql);
    header("location:beranda.php");


?>