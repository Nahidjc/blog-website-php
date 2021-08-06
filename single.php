<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://kit.fontawesome.com/4a254fc562.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


  <style>
    button {
      float: right;
    }
  </style>
</head>

<body>
  <?php include 'navbar.php' ?>
  <main>


    <div class="container p-5 my-5 border-1 card">




      <div class="row g-0">
        <?php
        include("config.php");
        $post_id = $_GET['id'];
        $sql = "SELECT post.post_id,post.title,post.description,post.post_date,post.post_img,users.username FROM post INNER JOIN users ON post.author = users.id WHERE post.post_id = {$post_id}";
        $result = mysqli_query($mysqli, $sql) or die("Query Failed");
        if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
        ?>
            <h3 class="mt-2"><?php echo $row['title']; ?></h3>
            <div class="py-3 text-primary publish-info d-flex">

              <small><i class="fas fa-user me-1"></i><?php echo $row['username']; ?></small>
              <small class="ms-5"><img src="images/calendar.svg" class="me-2" height="20" width="20"></i><?php echo $row['post_date']; ?></small>

            </div>
            <div class=" row">
              <div class="m-auto col-md-8">
                <img src="upload/<?php echo $row['post_img']; ?>" class="my-2 img-fluid" alt="">
              </div>
            </div>

            <div class="px-2 pt-5 m-auto col-sm-12 col-md-10">

              <p class="px-5"><?php echo $row['description']; ?></p>
            </div>

        <?php
          }
        } else {
          echo "<h1>No Record Found</h1>";
        }
        ?>
      </div>
    </div>
    <section class="coment">
      <div class="container px-4">
        <div class="row gx-5">
          <div class="col">
            <div class="p-3 border bg-light">COMMENT</div>
          </div>
          <div class="col">
            <div class="p-3 border bg-light">
              <div class="icon d-flex justify-content-center align-items-center">
                <i class="fab fa-facebook-f"></i>
                <i class="mx-3 fab fa-twitter"></i>
                <i class="fas fa-bookmark"></i>
                <i class="fas fa-share ms-3"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <hr>
      <div class="container px-4">
        <div class="row gx-5">
          <div class="col">
            <div class="p-3 border-0 bg-light">comments 2</div>
          </div>
          <div class="col">
            <div class="p-3 border-0 bg-light">
              <h3>sing in</h3>
            </div>
          </div>
        </div>
      </div>
      <hr>
      <div class="px-4 container-0">
        <div class="row gx-5">
          <div class="col">
            <div class="p-3 border-0 bg-light">
              <select class="form-select" aria-label="Default select example">
                <option selected>new comment</option>
                <option value="1">Old comment</option>

              </select>
            </div>
          </div>
          <div class="col">
            <div class="p-3 border-0 bg-light">
              <h3>
                <i class="fas fa-share-alt ms-5">sheare</i>
              </h3>
            </div>
          </div>
        </div>
      </div>

      <div>

      </div>

  </main>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>