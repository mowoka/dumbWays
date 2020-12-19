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
    <title>Add Post</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
</head>
<body>
    <!-- NavBar Content -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="beranda.php">Dahboard</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>      
    </nav>   
      <!-- End Of Nafbar -->
    <!-- Content -->
    <br>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            
                            <h3 style="text-align: center;"><strong>Form Adding POST</strong></h3>
                            <hr>
                            <br>
                            <?php

                                $db = mysqli_connect("localhost", "root" , "", "web_social");
                                $id_post= $_GET['id_post'];
                                $sql = "SELECT * FROM post_tb WHERE id_post = $id_post";
                                $result =  mysqli_query($db, $sql);
                                while($row = mysqli_fetch_array($result)){
                            ?>
                            <form action="updatePost.php" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="id_post" value="<?php echo $row['id_post'] ?>">
                                <div class="form-group">
                                    <label for="exampleInputTitle">Title</label>
                                    <input type="text"name="title" value="<?php echo$row['title'] ?>" class="form-control" id="exampleInputTitle"  placeholder="Enter Title">
                                    <small id="emailHelp" class="form-text text-muted">Title of yout News</small>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputTitle">Content</label>
                                    <textarea name="editor1"><?php echo$row['content'] ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputTitle">Image</label>
                                    <input type="file" name="image" class="form-control" id="exampleInputTitle"  placeholder="Enter Title">
                                </div>
                                <input type="submit" class="btn btn-primary btn-block" name="upload" value="Save">
                            </form>
                            <?php
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Content -->
    <script>
        CKEDITOR.replace( 'editor1' );
    </script>
</body>
</html>