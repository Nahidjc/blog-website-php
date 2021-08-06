<?php
include_once("function.php");
check_login_user();
?>

<!DOCTYPE html>
<html lang="en">

<?php
include_once("config.php");
$title = '';
$description =  '';
// session_start();
$errors = array();

if (isset($_POST['addblog'])) {
    $title = $_POST['title'];
    $description =  $_POST['description'];
    $author_username = $_SESSION['username'];
    date_default_timezone_set("Asia/Dhaka");
    $date = date("F j, Y, g:i a");
    echo $date;


    //  find author id
    $check = "SELECT * FROM users where username = '$author_username'";
    $findAuthor = mysqli_query($mysqli, $check) or die("Failed to query");
    $row = mysqli_fetch_assoc($findAuthor);
    $author = "{$row['id']}";



    if (empty($title)) {
        array_push($errors, "title is required");
    }


    if (empty($description)) {
        array_push($errors, "description is required");
    }
    if (isset($_FILES['fileToUpload'])) {
        $file_name = $_FILES['fileToUpload']['name'];
        $file_size = $_FILES['fileToUpload']['size'];
        $file_tmp = $_FILES['fileToUpload']['tmp_name'];
        $file_type = $_FILES['fileToUpload']['type'];
        $file_ext = strtolower(@end(explode(".", $file_name)));
        $extensions = array("jpeg", "jpg", "png");

        if (in_array($file_ext, $extensions) === false) {
            $errors[] = "This extension file not allowed , Please choose Jpeg and png format";
        }

        if ($file_size > 2097152) {
            $errors[] = "File size must be 3mb or lower";
        }

        if (empty($errors) == true) {
            move_uploaded_file($file_tmp, "upload/" . $file_name);
        } else {
            print_r($errors);
            die();
        }
    }

    if (count($errors) == 0) {
        $sql = "INSERT INTO post ( title, description,	post_date , author , post_img) VALUES  ('$title','$description','$date',$author,'$file_name');";
        $result = mysqli_query($mysqli, $sql);
        if ($result == true) {
            echo "result paichi";
        } else {
            echo "result Painai";
        }
        // if (mysqli_num_rows($result) == 1) {
        //     //login user
        //     $_SESSION['username'] = $username;
        //     $_SESSION['password'] = $password;
        //     header("Location: index.php");
        // } else {
        //     array_push($errors, "wrong username or password");
        // }
    }
}


?>



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <style>
        .loginBtn {
            color: #09f;
            background-color: white;
            border: 1px solid #e2e2e2;
            line-height: 1.38;
            font-weight: bold;
            border-radius: 5px;
            width: auto;
            height: auto;
            padding: 7px 20px;
            margin: 5px 0 0 5px;
        }
    </style>
    <title>Upload Blog</title>
    <style>

    </style>
</head>

<body>
    <?php
    include("navbar.php");
    ?>
    <section class="container">

        <div class="row vh-100">
            <div class="m-auto col-md-10 col-lg-8 col-sm-10 ">
                <div class="text-white header">
                    <h2>Add blog </h2>
                </div>

                <div>

                    <form class="bg-white rounded shadow" method="post" action="" enctype="multipart/form-data">
                        <!-- errors print -->
                        <?php include('errors.php'); ?>
                        <div class="input-group">
                            <label>Blog Title</label>
                            <input type="text" name="title" placeholder="Blog Title" value="<?php echo $title; ?>">
                        </div>
                        <div class="input-group"><label>Blog Description</label>
                            <textarea type="textarea" name="description" placeholder="Blog Content" value="<?php echo $description; ?>"></textarea>


                        </div>


                        <div class="input-group">
                            <label>Blog image</label>
                            <br>
                            <input type="file" name="fileToUpload" required>

                        </div>


                        <div class="input-group">

                            <button type="submit" class="loginBtn" name="addblog">Add Blog</button>

                        </div>

                    </form>
                </div>
            </div>

        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>