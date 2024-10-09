<div class="container ">
    <nav class="nav card-nav">
        <div class="container p-0">
            <ul class="nav nav-underline text-dark nav-fill card-item">
                <li class="nav-item">
                    <a class="nav-link active text-dark" aria-current="page" href="#">All</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="#">New</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="#">Offers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark">UpComing</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- <div class="container container-offer-zone mt-4 position-relative ">
        <span class="fs-4 m-5 fw-medium ms-0  mb-3 text-dark opacity-50">Offer Zone</span>
        <div class="mycarousel p-3 ">
            <div class="mycarousel-inner overflow-x-auto ">
                <div class=" d-flex justify-content-start ">

                    <div class="m-2">


                    </div>

                </div>
            </div>
        </div>
        <button role="button" class="p-0 m-0 border-0 bg-secondary opacity-25 position-absolute top-50 start-0" id="carousel-control-prev">
            <i class="bi bi-chevron-left text-white fs-4"></i>
        </button>
        <button role="button" class="p-0 m-0 border-0 bg-secondary opacity-25 position-absolute top-50 end-0" id="carousel-control-next">
            <i class="bi bi-chevron-right text-white fs-4"></i>
        </button>
    </div> -->

    

        <?php
            session::loadTemplate("home/_carditem");
        ?>
   

    <div class="row subscribe m-4 row-cols-1 row-cols-md-2">
        <div class="col p-5 font-monospace ">
            <p class=" fs-1 text-white">Get Our <br>Latest Offer News </p>
            <span class="fs-4  text-secondary">Subscribe news latter</span>
        </div>
        <div class="col p-5 align-self-end">
            <form>
                <span class="fs-2 text-success">Subscribe Now<i class="bi bi-bell-fill ms-3 text-warning "></i></span>
                <div class="w-100">
                    <input type="email" class="w-75 p-1 border-0" name="subscribe-email" id="subscribe-email">
                    <button type="submit" class=" bg-primary btn m-2 text-white">Submit</button>
                </div>
            </form>
        </div>
    </div>

</div>