<?php
    $koneksi = mysql_connect("localhost", "root", "") or die("Tidak bisa terhubung ke Database!");
    mysql_select_db("web_social", $koneksi) or die("Tidak ada Database yang dipilih!");

?>

<?php

    if($_POST['login']){
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        
        if($email && $pass){
            $cek_db = "SELECT * FROM user_tb WHERE email='$email'";
            $query = mysql_query($cek_db);
            if (mysql_num_rows($query) != 0){
                $row = mysql_fetch_assoc($query);
                $db_name = $row['name'];   
                $db_user_id = $row['id_user'];
                $db_email = $row['email'];
                $db_pass = $row['password'];

                if ($email == $db_email && $pass == $db_pass){
                    session_start();
                    $_SESSION['id_user'] = $db_user_id;
                    $_SESSION['email'] = $email;
                    $_SESSION['username'] = $db_name;
                    header('Location: beranda.php');
                }else{
                    echo '<p>Username dan Password tidak cocok!</p>';
                }

            }else{
                echo '<p>Username tidak ada dalam Database!</p>';
            }

        }else{

            echo '<p>Username dan Password masih kosong!</p>';
        }
    
    }

?>