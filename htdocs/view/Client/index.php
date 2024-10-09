<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/libs/load.php"

?>

<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <?php template("_header") ?>
</head>

<body>
    <header data-bs-theme="dark">
        <!-- <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark ">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Tech Shop<img src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/logo/supermarket.svg" width="40px"
                        height="40px"></a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav nav-fill offcanvas me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ">Login</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav> -->

        <!-- Catagory start -->
        <!-- ============================================================================================================== -->

        <!-- <div class="Catagory-inner pt-4">
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <img class="rounded-circle mx-auto d-block" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSzTjz8st8lbhpH16eIq8M4YTjSu3vZSUjS4g0N_YiOW8PgT3ypJpFgMNMAGkaQznFOC44&usqp=CAU" alt="img" width="40px" height="40px">
                  <a class="nav-link active" aria-current="page" href="#">Mobiles</a>
                </li>
                <li class="nav-item">
                    <img class="rounded-circle mx-auto d-block" src="https://5.imimg.com/data5/KS/NH/MY-37931095/tablet-laptop-500x500.jpg" alt="img" width="40px" height="40px">
                  <a class="nav-link" href="#">Tab/Lap</a>
                </li>
                <li class="nav-item">
                    <img class="rounded-circle mx-auto d-block" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRgw9BGg1lQVwnCyi9ToLEXgTzI8cA0P0Rv-w&s" alt="img" width="40px" height="40px">
                  <a class="nav-link" href="#">Accessories</a>
                </li>
              </ul>
        </div> -->
        <div class="container">
        <ul class="nav  nav-pills nav-fill">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Active</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Much longer nav link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
            </li>
        </ul>
        </div>
        
    </header>

    <main>

        <div id="myCarousel" class="carousel slide mb-2" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item  active">
                    <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg> -->
                    <img class="d-block w-100 opacity-50"
                        src="https://xiaomiplanet.sk/wp-content/uploads/2022/02/xiaomi-120w-nabijanie-cover.jpg">
                    <div class="container">
                        <div class="carousel-caption text-start ">
                            <h1 class="text-white">Upcoming</h1>
                            <p class="opacity-75 text-warning">Stay Connect with us and Keep in touch.</p>
                            <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg> -->
                    <img class="d-block w-100 opacity-75"
                        src="https://bsmedia.business-standard.com/_media/bs/img/article/2023-12/26/full/1703581854-7002.jpg">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1 class="text-primary">All are new prodect with exciting offers.</h1>
                            <p class="text-white-50">Some representative placeholder content for the second slide of the
                                carousel.</p>
                            <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg> -->
                    <img class="d-block w-100 opacity-50"
                        src="https://s3.ap-southeast-1.amazonaws.com/images.asianage.com/images/aa-Cover-tb6kspf4gfd5bg8l1ai8kaesq7-20190823152652.Medi.jpeg">
                    <div class="container">
                        <div class="carousel-caption text-end">
                            <h1>We are leading in Mobile Phone sell.</h1>
                            <p class="text-warning">We are Provid best Customer Support.</p>
                            <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <!-- FOOTER -->
        <footer class="container">
            <p class="float-end"><a href="#">Back to top</a></p>
            <p>&copy; 2017–2023 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
        </footer>
    </main>
    <script src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/assets/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>