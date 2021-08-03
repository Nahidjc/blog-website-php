<?php

include_once("config.php");
include_once("function.php");

check_login_user();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <h1>Home Page</h1>
    <!-- if user not logged in they can not access this page -->

      <?php  if (isset($_SESSION['username'])): ?>
      
      <h1>Home page</h1>
           <p>Welcome <strong> <?php echo $_SESSION['username']; ?>
             </strong> </p>
        <?php endif ?>
        <a href="logout.php" class="btn btn-info" role="button" style="float:right;">Log Out</a>


        <header class="container" id="home">
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top container">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">TOP NEWS</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0" >
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#home">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#catagories">catagories</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#shoes">shoes</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#bags">bags</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">subscribe</a>
                  </li>
                 
                </ul>
                
              </div>
            </div>
          </nav>

          <!-- slider -->
          <section class="container mb-5 shadow-lg" id="home">
            
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row p-5  d-flex align-items-center">
                            <div class="col-lg-7">

                                <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, id!</h5>
                                
                                
                                <button class="btn bg-primary">Read More</button>
                            </div>
                            <div class="col-lg-5"><img src="images/tramp.jpg" class="d-block w-100" height="350px" width="600px" alt="..."></div>
                        </div>

                    </div>
                    <div class="carousel-item">
                        <div class="row p-5 d-flex align-items-center">
                            <div class="col-lg-7">
                                 <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, temporibus?</h5>
                                   
                                   
                                    <button class="btn bg-danger">Read More</button>
                            </div>
                            <div class="col-lg-5 "> <img src="images/mithun.jpg" class="d-block w-100" height="350px" width="600px" alt="...">
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row p-5  d-flex align-items-center">
                            <div class="col-lg-7">

                                <h5>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sint, eius!</h5>
                               
                                <button class="btn bg-info">Read More</button>
                            </div>
                            <div class="col-lg-5"> <img src="images/mahfuz.jpg" class="d-block w-100" height="350px" width="600px" alt="..."></div>
                        </div>

                    </div>
                </div>
            </div>

        </section>
       
    </header>

    <!-- main section -->
    <main>
      
        <section class="container">
            <h1 class="d-flex justify-content-center text-info my-5">Latest News</h1>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                  <div class="card h-100">
                    <img src="images/tramp.jpg" class="card-img-top rounded-circle" width="300" height="300" alt="...">
                    <div class="card-body">
                        <div class="author d-flex align-items-center justify-content-center">
                            <img src="images/tramp.jpg" class="rounded-circle me-2" width="50" height="50" alt="">
                            <small class="me-2">tramp</small>
                            <small>20/2/21</small>
                        </div>
                        <h5 class="card-text">donal tramp want to be footballar </h5>
                    </div>
                    <div class="card-footer">
                        <a href=""><small class="text-muted">read more</small></a>
                       </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card h-100">
                    <img src="images/mithun.jpg" class="card-img-top rounded-circle" width="300" height="300" alt="...">
                    <div class="card-body">
                        <div class="author d-flex align-items-center justify-content-center">
                            <img src="images/mithun.jpg" class="rounded-circle me-2" width="50" height="50" alt="">
                            <small class="me-2">mithun</small>
                            <small>20/2/21</small>
                        </div>
                        <h5 class="card-text">loard mithun selectet for coach of bangladesh cricket team</h5>
                    </div>
                    <div class="card-footer">
                        <a href=""><small class="text-muted">read more</small></a>
                       </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card h-100">
                    <img src="images/mahfuz.jpg" class="card-img-top rounded-circle" width="300" height="300" alt="...">
                    <div class="card-body">
                        <div class="author d-flex align-items-center justify-content-center">
                            <img src="images/mahfuz.jpg" class="rounded-circle me-2" width="50" height="50" alt="">
                            <small class="me-2">mahfuz</small>
                            <small>20/2/21</small>
                        </div>
                        <h5 class="card-text">sir mahfuz select as a singer of hollywood indesrty</h5>
                    </div>
                    <div class="card-footer">
                        <a href=""><small class="text-muted">read more</small></a>
                       </div>
                  </div>
                </div>
               
              </div>
            <div class="row row-cols-1 row-cols-md-3 g-4 mt-3">
                <div class="col">
                  <div class="card h-100">
                    <img src="images/covid.jfif" class="card-img-top rounded-circle" width="300" height="300" alt="...">
                    <div class="card-body">
                        <div class="author d-flex align-items-center justify-content-center">
                            <img src="images/covid.jfif" class="rounded-circle me-2" width="50" height="50" alt="">
                            <small class="me-2">tramp</small>
                            <small>20/2/21</small>
                        </div>
                        <h5 class="card-text">Bangladesh covid seatuations</h5>
                    </div>
                    <div class="card-footer">
                        <a href=""><small class="text-muted">read more</small></a>
                       </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card h-100">
                    <img src="images/goat.jpg" class="card-img-top rounded-circle" width="300" height="300" alt="...">
                    <div class="card-body">
                        <div class="author d-flex align-items-center justify-content-center">
                            <img src="images/goat.jpg" class="rounded-circle me-2" width="50" height="50" alt="">
                            <small class="me-2">black</small>
                            <small>20/2/21</small>
                        </div>
                        <h5 class="card-text">black bangol goat</h5>
                    </div>
                    <div class="card-footer">
                        <a href=""><small class="text-muted">read more</small></a>
                       </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card h-100">
                    <img src="images/aus vs van.jfif" class="card-img-top rounded-circle" width="300" height="300" alt="...">
                    <div class="card-body">
                        <div class="author d-flex align-items-center justify-content-center">
                            <img src="images/aus vs van.jfif" class="rounded-circle me-2" width="50" height="50" alt="">
                            <small class="me-2">mahfuz</small>
                            <small>20/2/21</small>
                        </div>
                        <h5 class="card-text">bangladesh won By 23 runs</h5>
                    </div>
                    <div class="card-footer">
                        <a href=""><small class="text-muted">read more</small></a>
                       </div>
                  </div>
                </div>
               
              </div>
        </section>

        <section class="mb-5">
            <h1 class="d-flex justify-content-center text-info my-5">News Catagories</h1>

            <div class="container">
               
                <div class="row align-items-center">
                  <div class="col-6 col-sm-3 shadow">
                   <img src="images/business.jpg" class="img-fluid" alt="">
                  </div>
                  <div class="col-6 col-sm-3  shadow">
                   <img src="images/politics.jpg" class="img-fluid" alt="">
                  </div>
                  <div class="col-6 col-sm-3   shadow">
                   <img src="images/sports.jpg" class="img-fluid" alt="">
                  </div>
                  <div class="col-6 col-sm-3 shadow">
                   <img src="images/covid.jfif" class="img-fluid" alt="">
                  </div>
                </div>
                
              </div>
        </section>

    </main>

    <footer class="bg-dark">
      <div class="container px-4">
        <div class="row d-flex gx-5 align-items-center">
         
          <div class="col">
            <div class="p-3 border-0 ">
             <a href="#"> <h5 class="text-light">HOME</h5></a>
             <a href="#"> <h5 class="text-light">CONTACT</h5></a>
             <a href="#"> <h5 class="text-light">SUBSCRIBE</h5></a>
             <a href="#"> <h5 class="text-light">LATEST NEWS</h5></a>
             <a href="#"> <h5 class="text-light">ABOUT US</h5></a>
             <a href="#"> <h5 class="text-light">CATAGORY</h5></a>
            </div>
           </div>
         
          
            <div class="col">
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
      </div>
    </footer>


        <!-- bootstrap ja -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>