<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Mokaz News</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">

            <li class="nav-item active">
              <a class="nav-link" href="loginPage.html">Add Content</a>
            </li>
          </ul>
        </div>
      </nav>
      <!-- End Of Navbar -->
    <!-- Content -->

    <br>
    <div class="container">
    <?php 

    $db = mysqli_connect("localhost", "root" , "", "web_social");
    $sql = "SELECT user_tb.name, photo, title, content, image FROM user_tb LEFT JOIN post_tb ON user_tb.id_user = post_tb.id_user";
    $result = mysqli_query($db, $sql);
    while($row = mysqli_fetch_array($result)){
    ?>

        <div class="row">
            <div class="col">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="card card-body">
                                        <?php echo "<img id='img_div' src='img_profile/".$row['photo']."'>"; ?>
                                        <br>
                                        <p style="text-align: center"><?php echo $row['name']; ?></p>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="card card-body">
                                        <div class="row">
                                            <div class="col">
                                                <div class="card card-body">
                                                    <h3 style="text-align:center;"><?php echo $row['title']; ?></h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="card card-body">
                                                <?php echo "<img id='img_post' src='img_news/".$row['image']."'>"; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="card card-body">
                                                    <p><?php echo $row['content']; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        }
        ?>
    </div>
    <!-- End Content -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>