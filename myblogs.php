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
    </style>

</head>

<body>
    <!-- navbar inheritance -->
    <?php include("navbar.php"); ?>


    <!-- if user not logged in they can not access this page -->


    <!-- main section -->
    <main>

        <section class="container">
            <!-- <h1 class="my-5 d-flex justify-content-start text-info first-collection-name">
        সর্বশেষ সংবাদ
      </h1> -->
            <?php
            include_once("function.php");
            check_login_user();
            $author_username = $_SESSION['username'];
            $check = "SELECT * FROM users where username = '$author_username'";
            $findAuthor = mysqli_query($mysqli, $check) or die("Failed to query");
            $row = mysqli_fetch_assoc($findAuthor);
            $author_id = "{$row['id']}";

            ?>
            <div class="container my-5">
                <div class="my-3 gy-2 row">
                    <?php
                    include("config.php");
                    mysqli_query($mysqli, 'SET CHARACTER SET utf8');
                    mysqli_query($mysqli, "SET SESSION collation_connection ='utf8_general_ci'");
                    //   $username= $_SESSION['username'];
                    //   $user_id = "SELECT users.id from users WHERE users.username = $username";
                    $sql = "SELECT post.post_id,post.title,post.description,post.post_date,post.post_img,users.username,users.id FROM post INNER JOIN users ON post.author = users.id WHERE post.author={$author_id} ORDER BY post.post_id DESC";
                    $result = mysqli_query($mysqli, $sql) or die("Query Failed");
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {

                    ?>
                            <div class="border-end col-md-4 col-lg-3 col-sm-6 ">
                                <img src="upload/<?php echo $row['post_img']; ?>" class="my-2 img-fluid" alt="">


                                <a style="text-decoration: none;" href="single.php?id=<?php echo $row['post_id']; ?>">

                                    <h5 style="color:black;font-weight:bolder"><?php echo substr($row['title'], 0, 130) . "..."; ?></h5>
                                    <p class="text-gray" style="font-size:14px;color:black;"><?php echo substr($row['description'], 0, 250) . "..."; ?></p>
                                </a>


                                <div class="pb-2 publish-info d-flex align-items-center">

                                    <small><i class="fas fa-user me-1"></i><?php echo $row['username']; ?></small>
                                    <small class="ms-auto"><img src="images/calendar.svg" height="20" width="20"></i><?php echo $row['post_date']; ?></small>

                                </div>
                                <div class="d-flex justify-content-between mt-2 mb-5">



                                    <a href="editblog.php?id=<?php echo $row['post_id']; ?>"> <button class="btn btn-success btn-sm">Edit Blog</button> </a>
                                    <a href="deleteblog.php?id=<?php echo $row['post_id']; ?>"> <button class="btn btn-danger btn-sm">Delete Blog</button> </a>

                                </div>
                            </div>

                    <?php
                        }
                    } else {
                        echo "<h1 class='text-center text-warning'>No Record Found</h1>";
                    }
                    ?>
                </div>
        </section>



    </main>




    <!-- bootstrap ja -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>