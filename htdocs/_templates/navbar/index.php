<header>
    <nav class="navbar navbar-expand-md p-3 border-bottom shadow-sm ">
        <div class="container-fluid flex-nowrap m-0 p-0">
            <div class="order-2 order-lg-0 order-md-0 ms-4" id="logo">
                <a class="navbar-brand d-flex me-4 justify-content-center" href="/">
                    <img src="logo/supermarket.svg" class="" alt="procart" width="30" height="auto">
                    <span class="align-self-center">PROCART</span>
                </a>
            </div>

            <div class="container-fluid bg-body-tertiary d-none order-3" id="input-search">
                <form class="d-flex " style="box-sizing: border-box;" id="input-form" role="search">
                    <input class="form-control bg-body-tertiary border-0 rounded-0 me-2 border-bottom border-secondary p-2" style="outline-style: none;" type="search" placeholder="Search" aria-label="Search">
                    <a role="button" class="nav-link text-end"><i class="bi bi-search fs-4 p-3"></i></a>
                    <a role="button" class="nav-link text-end" id="link-search-close" ><i class="bi bi-x-lg fs-4"></i></a>
                </form>
            </div>

            <!-- <div class="d-inline-block d-none order-3 w-25 " id="search-sm">
                    <form class="d-flex justify-content-around">
                        <a role="button" class="nav-link text-end" onclick="search_toggel(this)"><i class="bi bi-search fs-4 p-3"></i></a>
                        <a role="button" class="text-dark p-0 " href="#"><i class="bi bi-cart3 fs-4"></i></a>
                    </form>
                </div> -->

            <!-- <div class="d-none order-4" id="nav-item">
                    <ul class="navbar-nav ">
                        <li class="nav-item ">
                            <?php
                            $acces_token = session::get("access_token");
                            if (isset($acces_token) && !empty($acces_token)) {
                            ?>
                                <a class="text-dark p-0 " href="#"><i class="bi bi-person fs-4 "></i></a>
                            <?php
                            } else {
                            ?>
                                <a class="btn bg-dark text-light " href="/signup.php">SIGNUP</i></a>
                            <?php
                            } ?>
                        </li>
                    </ul>
                </div> -->

            <button class="navbar-toggler order-1 p-1 " type="button" data-bs-toggle="offcanvas"
                data-bs-target="#navbaroffcanvas" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-start w-50" tabindex="-1" id="navbaroffcanvas" aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">WelCome</h5>
                    <button type="button" class="btn-close btn-close-dark" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body z-3 ">
                    <ul class="offcanvas z-2 nav-underline navbar-nav me-auto nav-justified" id="navbar"> <!-- TODO : remove offcanvase in javascript for small screen -->
                        <li class="nav-item z-2">
                            <a class="nav-link <?php if(basename($_SERVER['PHP_SELF']) == "index.php") echo "active"; ?>   fw-normal" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if(basename($_SERVER['PHP_SELF']) == "shop.php") echo "active"; ?>  " href="/shop">Shop</a>
                        </li>
                        <li class="nav-item position-relative collection">
                            <a class="nav-link link-Collection " id="link-Collection" role="button" data-bs-toggle="dropdown" aria-expanded="false">Catagories</a>
                            <div class="submenu dropdowm"> 
                                <ul class=" navbar-nav flex-column bg-white  z-1 p-3 border-0 " id="colletionItem">
                                    <li class="nav-item">
                                        <a class="nav-link" aria-current="page" href="/catagories?type=mens">Mens</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/catagories?type=womens">Women</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/catagories?type=kids">Kids</a>
                                    </li>
                                </ul>
                            </div>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if(basename($_SERVER['PHP_SELF']) == "blog.php") echo "active"; ?>  " href="#">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if(basename($_SERVER['PHP_SELF']) == "contect.php") echo "active"; ?>  " href="#">Contect</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="d-flex order-3">
                <a role="button" id="link-Search" class="text-dark ms-2 me-2 " ><i class="bi bi-search fs-4"></i></a>
                <a class="text-dark ms-2 me-2 " href="#"><i class="bi bi-cart3 fs-4"></i></a>
                <?php
                $acces_token = session::get("access_token");
                if (isset($acces_token) && !empty($acces_token)) {
                ?>
                    <a class="text-dark p-0 " href="#"><i class="bi bi-person fs-4 "></i></a>
                <?php
                } else {
                ?>
                    <a class="btn bg-dark text-light " href="/signup.php">SIGNUP</i></a>
                <?php
                } ?>
            </div>


        </div>
    </nav>
</header>