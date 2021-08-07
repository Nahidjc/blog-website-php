<?php
include("config.php");
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/735bf95db2.js" crossorigin="anonymous"></script>
    <title>Document</title>
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
</head>

<body>
    <header class="container">
        <nav class="mb-5 navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <div class="container">
                <a class="navbar-brand text-warning" href="index.php">দৈনিক পত্রিকা</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="#home">সর্বশেষ </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#catagories">করোনাভাইরাস</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " href="#">খেলা</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#">বাংলাদেশ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#">বিশ্ব</a>
                        </li>
                    </ul>

                    <ul class="navbar-nav ms-auto">

                        <?php if (!empty($_SESSION['username'])) : ?>

                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a href="addBlog.php" class="nav-link">Create Blog</a>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="fas fa-user"></i>
                                    <span class="ms-1 font-weight-bold"> <?php echo $_SESSION['username']; ?></span>
                                </a>
                            </li>
                            <li class="m-auto nav-item">
                                <a href="myblogs.php">
                                    <span class="ms-1 font-weight-bold text-dark">My Blogs</span>
                                </a>
                            </li>
                            <li class="m-auto nav-item">
                                <a href="logout.php" class="loginBtn">
                                    <i class="fas fa-sign-out-alt"></i>
                                    <span class="ms-1 font-weight-bold">Logout</span>
                                </a>
                            </li>


                        </ul>
                        <?php else : ?>
                        <a href="login.php"> <button class="loginBtn">Login</button></a>

                        <?php endif ?>

                    </ul>





                </div>
            </div>
        </nav>
    </header>
    <br>
    <br>
</body>

</html>