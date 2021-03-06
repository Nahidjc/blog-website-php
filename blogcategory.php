<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/index.css">
  <link href="https://fonts.maateen.me/adorsho-lipi/font.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/735bf95db2.js" crossorigin="anonymous"></script>
  <!-- bootstrap css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <style>
    .first-collection-name:before {
      content: "";
      width: 25px;
      height: 25px;
      background: #0099FF;
      display: inline-block;
      border-radius: 50%;
      margin: auto 4px;
    }

    @import url('https://fonts.maateen.me/adorsho-lipi/font.css');

    body {
      font-family: 'AdorshoLipi', Arial, sans-serif !important;
    }

    a {
      text-decoration: none;
    }
    .parent-news{
      height:400px;
      position:relative;
    }
    .news-header{
      position:absolute;
      bottom:0;
    }
    .news-img{
      height:200px;
      width:100%;
    }
  </style>

</head>

<body>
  <!-- navbar inheritance -->
  <?php include("navbar.php"); ?>
  <!-- if user not logged in they can not access this page -->
  <?php
          include("config.php");
          mysqli_query($mysqli,'SET CHARACTER SET utf8');
           mysqli_query($mysqli,"SET SESSION collation_connection ='utf8_general_ci'");
           $category_id = $_GET['id'];
          $sql = "SELECT post.post_id,post.title,post.description,post.post_date,post.post_img,users.username FROM post INNER JOIN users ON post.author = users.id WHERE post.category_id =  $category_id  ORDER BY post.post_id DESC LIMIT 1 ";
          $result = mysqli_query($mysqli, $sql) or die("Query Failed");
          if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {

          ?>

<header class="container my-5">
    <!-- slider -->
    <div class="row">
      <div class="m-auto col-md-8">
        <div class="text-white border-0 card">
          <img src="upload/<?php echo $row['post_img']; ?>" class="card-img" height="450px" alt="...">
          <div class="mb-auto card-img-overlay" style="margin-top: 250px;">
            <h3 class="card-title d-flex justify-content-center align-items-center"><?php echo $row['title'] ?></h3>
            <p class="card-text d-flex justify-content-center align-items-center"><?php echo substr($row['description'], 0, 1000) ; ?>
            </p>
            <p class="card-text d-flex justify-content-center align-items-center">3 mins ago</p>
          </div>
        </div>
      </div>
    </div>

  </header>


<?php
            }
          }
          ?>


  <!-- main section -->
  <main>

    <section class="container">
      <h1 class="my-5 d-flex justify-content-start text-info first-collection-name">
        ????????????????????? ???????????????
      </h1>

      <div class="container my-5">
        <div class="g-2 row">
          <?php
          include("config.php");
          mysqli_query($mysqli,'SET CHARACTER SET utf8');
           mysqli_query($mysqli,"SET SESSION collation_connection ='utf8_general_ci'");
           $category_id = $_GET['id'];

          $sql = "SELECT post.post_id,post.title,post.description,post.post_date,post.post_img,users.username FROM post INNER JOIN users ON post.author = users.id WHERE post.category_id =  $category_id  ORDER BY post.post_id DESC";
          $result = mysqli_query($mysqli, $sql) or die("Query Failed");
          if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {

          ?>
          <div class="col-md-6 col-lg-4 col-xl-3 col-sm-6  col-8 m-auto mb-2">

          <div class="border bg-light p-2 parent-news">
                <img src="upload/<?php echo $row['post_img']; ?>" class="my-2 img-fluid news-img" style="height:200px;" alt="">


                <a style="text-decoration: none;" href="single.php?id=<?php echo $row['post_id']; ?>">

                  <h5 style="color:black;font-weight:bolder"><?php echo substr($row['title'], 0, 130) . "..."; ?></h5>
                  <p class="text-gray" style="font-size:14px;color:black;"><?php echo substr($row['description'], 0, 250) . "..."; ?></p>
                </a>


                <div class="pb-2 news-header">

                  <small class="me-2"><i class="fas fa-user me-1">
                  </i><?php echo $row['username']; ?></small>
                  <small class="ms-auto"><img src="images/calendar.svg" height="20" width="20"></i><?php echo $row['post_date']; ?></small>

                </div>
              </div>
          </div>



 
          <?php
            }
          } else {
            echo "<h1>No Record Found</h1>";
          }
          ?>
        </div>
    </section>

    <section class="mb-5">
      <h1 class="my-5 d-flex justify-content-center text-info">News Catagories</h1>

      <div class="container">

        <div class="row align-items-center">
          <div class="shadow col-6 col-sm-3">
            <img src="images/business.jpg" class="img-fluid" alt="">
          </div>
          <div class="shadow col-6 col-sm-3">
            <img src="images/politics.jpg" class="img-fluid" alt="">
          </div>
          <div class="shadow col-6 col-sm-3">
            <img src="images/sports.jpg" class="img-fluid" alt="">
          </div>
          <div class="shadow col-6 col-sm-3">
            <img src="images/covid.jfif" class="img-fluid" alt="">
          </div>
        </div>

      </div>
    </section>

  </main>

  <?php include("footer.php") ?>


  <!-- bootstrap ja -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>