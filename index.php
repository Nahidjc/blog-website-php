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
</head>

<body>
  <!-- navbar inheritance -->
  <?php include("navbar.php"); ?>
  <!-- if user not logged in they can not access this page -->
  <header class="container">
    <!-- slider -->
    <section class="my-5 mt-5 shadow-lg" id="home">

      <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="p-5 row d-flex align-items-center">
              <div class="col-lg-7">

                <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, id!</h5>


                <button class="btn bg-primary">Read More</button>
              </div>
              <div class="col-lg-5"><img src="images/tramp.jpg" class="d-block w-100" height="350px" width="600px" alt="..."></div>
            </div>

          </div>
          <div class="carousel-item">
            <div class="p-5 row d-flex align-items-center">
              <div class="col-lg-7">
                <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, temporibus?</h5>


                <button class="btn bg-danger">Read More</button>
              </div>
              <div class="col-lg-5 "> <img src="images/mithun.jpg" class="d-block w-100" height="350px" width="600px" alt="...">
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="p-5 row d-flex align-items-center">
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
      <h1 class="my-5 d-flex justify-content-center text-info">Latest News</h1>
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="card author h-100">
            <img src="images/tramp.jpg" class="card-img-top" alt="...">
            <div class="card-body">

              <h5 class="card-text">donal tramp want to be footballar </h5>
            </div>
            <div class="card-footer">
              <div class=" d-flex align-items-center justify-content-between">
                <div>
                  <i class="fas fa-user"></i>
                  <span class="ms-2 font-weight-bold">tramp</span>
                </div>
                <a href=""><small class="text-muted">read more</small></a>
                <small>20/2/21</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card author h-100">
            <img src="images/mithun.jpg" class="card-img-top" alt="...">
            <div class="card-body">

              <h5 class="card-text">loard mithun selectet for coach of bangladesh cricket team</h5>
            </div>
            <div class="card-footer">
              <div class=" d-flex align-items-center justify-content-between">
                <div>
                  <i class="fas fa-user"></i>
                  <span class="ms-2 font-weight-bold">tramp</span>
                </div>
                <a href=""><small class="text-muted">read more</small></a>
                <small>20/2/21</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card author h-100">
            <img src="images/mahfuz.jpg" class="card-img-top" alt="...">
            <div class="card-body">

              <h5 class="card-text">sir mahfuz select as a singer of hollywood indesrty</h5>
            </div>
            <div class="card-footer">
              <div class=" d-flex align-items-center justify-content-between">
                <div>
                  <i class="fas fa-user"></i>
                  <span class="ms-2 font-weight-bold">tramp</span>
                </div>
                <a href=""><small class="text-muted">read more</small></a>
                <small>20/2/21</small>
              </div>
            </div>
          </div>
        </div>

      </div>
      <div class="mt-3 row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="card author h-100">
            <img src="images/covid.jfif" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-text">Bangladesh covid seatuations</h5>
            </div>
            <div class="card-footer">
              <div class=" d-flex align-items-center justify-content-between">
                <div>
                  <i class="fas fa-user"></i>
                  <span class="ms-2 font-weight-bold">tramp</span>
                </div>
                <a href=""><small class="text-muted">read more</small></a>
                <small>20/2/21</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card author h-100">
            <img src="images/goat.jpg" class="card-img-top" alt="...">
            <div class="card-body">

              <h5 class="card-text">black bangol goat</h5>
            </div>
            <div class="card-footer">
              <div class=" d-flex align-items-center justify-content-between">
                <div>
                  <i class="fas fa-user"></i>
                  <span class="ms-2 font-weight-bold">tramp</span>
                </div>
                <a href=""><small class="text-muted">read more</small></a>
                <small>20/2/21</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card author h-100">
            <img src="images/aus vs van.jfif" class="card-img-top" alt="...">
            <div class="card-body">

              <h5 class="card-text">bangladesh won By 23 runs</h5>
            </div>
            <div class="card-footer">
              <div class=" d-flex align-items-center justify-content-between">
                <div>
                  <i class="fas fa-user"></i>
                  <span class="ms-2 font-weight-bold">tramp</span>
                </div>
                <a href=""><small class="text-muted">read more</small></a>
                <small>20/2/21</small>
              </div>
            </div>
          </div>
        </div>

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