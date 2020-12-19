<?php
    session_start();
    if (!isset($_SESSION['email'])){
        header("Location: loginPage.html");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
    <!-- NavBar Content -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="addPost.php">Add Post</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="logoutPage.php">Logout <span class="sr-only">(current)</span></a>
            </li>
          </ul>
        </div>
    </nav>   
      <!-- End Of Nafbar -->
    <br>
    <div class="container">    
        <div class="row">
            <div class="col">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                        <h3 style="text-align: center;"><strong>Daftar Postingan</strong></h3>
                        <hr>
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th>id_post</th>
                                    <th>Title</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                $db = mysqli_connect("localhost", "root" , "", "web_social");
                                $sql = "SELECT * FROM post_tb WHERE id_user={$_SESSION['id_user']}";
                                $result = mysqli_query($db, $sql);
                                while($row = mysqli_fetch_array($result)){
                                ?>
                                <tr>
                                    <td><?php echo $row['id_post'] ?></td>
                                    <td><?php echo $row['title'] ?></td>
                                    <td><a class="btn btn-warning" href="editNews.php?id_post=<?php echo $row['id_post'] ?>">Edit</a> | <a class="btn btn-danger" href="deleteNews.php?id_post=<?php echo $row['id_post'] ?>">Delete</a></td>
                                </tr>
                                <?php                                  
                                }
                                ?>
   
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>