<!DOCTYPE html>
<html lang="en">

<!-- Comment adding -->

<?php
include_once("config.php");
$comment = '';
// session_start();
$errors = array();

if (isset($_POST['addComment'])) {

  //  check login user
  include_once("function.php");
  check_login_user();

  $post_id = $_GET['id'];
  $comment = $_POST['comment'];
  $author_username = $_SESSION['username'];
  date_default_timezone_set("Asia/Dhaka");
  $date = date("F j, Y, g:i a");



  //  find author id
  // $check = "SELECT * FROM users where username = '$author_username'";
  // $findAuthor = mysqli_query($mysqli, $check) or die("Failed to query");
  // $row = mysqli_fetch_assoc($findAuthor);
  // $author = "{$row['id']}";



  if (empty($comment)) {
    echo "Please write comment";
    array_push($errors, "Please type any word");
  }



  if (count($errors) == 0) {
    mysqli_query($mysqli, 'SET CHARACTER SET utf8');
    mysqli_query($mysqli, "SET SESSION collation_connection ='utf8_general_ci'");
    $sql = "INSERT INTO `comments` ( `post_id`, `author_name`, `comment`, `date`) VALUES ( $post_id, '$author_username', '$comment', '$date');";
    // $sql = "INSERT INTO comments ( post_id,author_name,comment,date) VALUES  ($post_id,'$author_username',$comment','$date');";
    $result = mysqli_query($mysqli, $sql);
    if ($result == true) {
      echo "result paichi";
    } else {

      echo "result Painai";
    }
  }
}


?>




<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Single Blog</title>
  <link rel="stylesheet" href="css/style.css">
  <script src="https://kit.fontawesome.com/4a254fc562.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


  <style>
    button {
      float: right;
    }

    @import url('https://fonts.maateen.me/adorsho-lipi/font.css');

    body {
      font-family: 'AdorshoLipi', Arial, sans-serif !important;
    }

    a {
      text-decoration: none;
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
        mysqli_query($mysqli, 'SET CHARACTER SET utf8');
        mysqli_query($mysqli, "SET SESSION collation_connection ='utf8_general_ci'");
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

              <p class="px-5 text-justify lh-base"><?php echo $row['description']; ?></p>
            </div>

        <?php
          }
        } else {
          echo "<h1>No Record Found</h1>";
        }
        ?>
      </div>
      <hr>




      <div class="container ">
        <div class="row m-auto">
          <div class="col-md-10 m-auto d-flex justify-content-between border bg-light" style="font-weight:bold;font-size:larger">
            <div class="p-4">
              <strong>মন্তব্য করুন </strong>


              <?php
              include("config.php");
              $post_id = $_GET['id'];

              $sql = "SELECT COUNT(*) FROM comments  WHERE post_id = {$post_id}";
              $result = mysqli_query($mysqli, $sql) or die("Query Failed");
              $num_rows = mysqli_fetch_row($result)[0];
              ?>
              <strong class="ms-5"><?php echo $num_rows; ?> comments</strong>
            </div>

            <div class="p-4">
              <div class="icon  d-flex justify-content-center align-items-center">
                <i class="fab fa-facebook-f"></i>
                <i class="mx-3 fab fa-twitter"></i>
                <i class="fas fa-bookmark"></i>
                <i class="fas fa-share ms-3"></i>
              </div>
            </div>
          </div>
        </div>
<!-- Comment print dynamic -->
        <div class="my-5">
          <?php
          include("config.php");
          $post_id = $_GET['id'];
          mysqli_query($mysqli, 'SET CHARACTER SET utf8');
          mysqli_query($mysqli, "SET SESSION collation_connection ='utf8_general_ci'");
          $sql = "SELECT * FROM comments  WHERE post_id = {$post_id}";
          $result = mysqli_query($mysqli, $sql) or die("Query Failed");
          if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
          ?>

              <div class="row ps-2">
                <div class="col-md-10 m-auto">
                  <div class="">
                    <strong><i class="fas fa-user me-1"></i><?php echo $row['author_name']; ?> </strong>
                    <small class="ms-5"><img src="images/calendar.svg" class="me-2" height="20" width="20"><?php echo $row['date']; ?></small>
                  </div>
                  <p class="my-2"><?php echo $row['comment']; ?> </p>
                  <hr>
                </div>
              </div>
          <?php }
          }

          ?>

        </div>


      </div>



      <!-- //comment form -->
      <div class="row my-5">
        <div class="col-md-10 m-auto">
          <form method="post" action="">
          <?php include('errors.php'); ?>
          <br>
            <div class="form-group">

              <textarea type="textarea" class="form-control" placeholder="Enter Your comment" name="comment"></textarea>

            </div>
            <br>
            <button type="submit" name="addComment" class="btn btn-secondary">POST</button>
          </form>
        </div>
      </div>




    </div>


  </main>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>

</html>