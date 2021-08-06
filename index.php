<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/index.css">
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

    a {
      text-decoration: none;
    }
  </style>

</head>

<body>
  <!-- navbar inheritance -->
  <?php include("navbar.php"); ?>
  <!-- if user not logged in they can not access this page -->
  <header class="container my-5">
    <!-- slider -->
    <div class="row">
      <div class="m-auto col-md-8">
        <div class="text-white border-0 card">
          <img src="upload/325340.4.jpg" class="card-img" height="450px" alt="...">
          <div class="mb-auto card-img-overlay" style="margin-top: 250px;">
            <h3 class="card-title d-flex justify-content-center align-items-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam,</h3>
            <p class="card-text d-flex justify-content-center align-items-center">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aperiam, explicabo?
            </p>
            <p class="card-text d-flex justify-content-center align-items-center">3 mins ago</p>
          </div>
        </div>
      </div>
    </div>

  </header>

  <!-- main section -->
  <main>

    <section class="container">
      <h1 class="my-5 d-flex justify-content-start text-info first-collection-name">
        সর্বশেষ সংবাদ
      </h1>

      <div class="container my-5">
        <div class="my-3 gy-2 row">
          <?php
          include("config.php");

          $sql = "SELECT post.post_id,post.title,post.description,post.post_date,post.post_img,users.username FROM post INNER JOIN users ON post.author = users.id ORDER BY post.post_id DESC";
          $result = mysqli_query($mysqli, $sql) or die("Query Failed");
          if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {

          ?>
              <div class="border-end col-md-4 col-lg-3 col-sm-6 ">
                <img src="upload/<?php echo $row['post_img']; ?>" class="my-2 img-fluid" alt="">


                <a href="single.php?id=<?php echo $row['post_id']; ?>">

                  <h5 style="color:black;font-weight:bolder"><?php echo substr($row['title'], 0, 130) . "..."; ?></h5>
                  <p class="text-gray" style="font-size:14px;color:black;"><?php echo substr($row['description'], 0, 250) . "..."; ?></p>
                </a>


                <div class="pb-2 publish-info d-flex align-items-center">

                  <small><i class="fas fa-user me-1"></i><?php echo $row['username']; ?></small>
                  <small class="ms-auto"><img src="images/calendar.svg" height="20" width="20"></i><?php echo $row['post_date']; ?></small>

                </div>
              </div>


              <!-- <div class="col">
                <div class="card author h-100">
                  <img src="upload/<?php echo $row['post_img']; ?>" class="card-img-top" alt="...">
                  <div class="card-body">

                    <h5 class="card-text"> <?php echo $row['title']; ?></h5>
                  </div>
                  <div class="card-footer">
                    <div class=" d-flex align-items-center justify-content-between text-primary">
                      <div>
                        <i class="fas fa-user"></i>
                        <span class="ms-1 font-weight-bold"> <?php echo $row['username']; ?></span>
                      </div>
                      <a href=""><small class="text-muted">read more</small></a>

                      <small> <img src="images/calendar.svg" height="20" width="20"></i> <?php echo $row['post_date']; ?></small>
                    </div>
                  </div>
                </div>
              </div> -->
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

  <footer class="bg-dark">
    <div class="container px-4">
      <div class="row align-items-center">

        <div class="m-auto col-md-6 col-sm-9">
          <div class="border-0 footer-li ">
            <li><a href="#">Home-1</a></li>
            <li><a href="#">Home-2</a></li>
            <li><a href="#">Home-3</a></li>
            <li><a href="#">Home-4</a></li>
            <li><a href="#">Home-5</a></li>
          </div>
        </div>


        <div class="col-md-6 col-sm-9">
          <div class="p-3 border-0">
            <h1>subscribe for latest news</h1>
            <form>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-light">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label text-light">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
              </div>
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label text-light" for="exampleCheck1">Check me out</label>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>

        </div>
      </div>
      <div class="p-3 text-center text-white">
        <p>©All Rights Reserved 2021 by DIU Code_Brigrade tech ltd.</p>
      </div>

    </div>
  </footer>


  <!-- bootstrap ja -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>