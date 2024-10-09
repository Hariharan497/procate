<div class="container-fluid  container-quick-view " id="container-quick-view">
    <div class="container-fluid m-0 p-0">
        <div class="row row-cols-1">
            <div class="col d-flex justify-content-center">
                <img src="<?php echo $key['img_uri'] ?>" id="quick-view-img" class="img-fluid quick-view-img p-2 justify-content-center" width="150vh" height="auto" alt="">
            </div>
            <div class="col ">
                <div class="product-details">
                    <div class=" text-center m-2">
                        <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto ullam, recusandae eum ad repudiandae iure commodi, exercitationem </p> -->
                        <p class="card-title text-body-tertiary"><?php echo $key['name'] ?></p>
                        <p class="card-name text-dark m-2"><?php echo $key['desc'] ?></p>
                        <div class="d-flex justify-content-center">
                            <p class="text-danger  fw-bolder fs-4 align-items-baseline m-0">$<?php echo $key['newprice'] ?></p>
                            <?php
                            if ((int) $key['offer'] > 0) {
                            ?>
                                <p class="text-decoration-line-through fw-bolder fs-5 align-items-baseline ms-3">$<?php echo $key['price'] ?></p>

                            <?php
                            }
                            ?>
                        </div>
                        <div class=" w-100">
                            <a role="button" href="/signup.php" class=" p-2  m-2 btn btn-dark w-50 rounded-0 w-50 hover-btn-container">Add<i class="bi bi-cart-plus fs-5 m-1"></i></a>
                            <a role="button" class=" p-2 m-2 btn btn-primary rounded-0 w-50 hover-btn-container">Buy <i class="bi bi-bag-heart fs-5"></i> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div>

    </div>
    <button role="button" class="p-0 m-0 border-0  position-absolute top-0 end-0 " id="pop-close">
        <i class="bi bi-x-lg text-white fs-4"></i>
    </button>
</div>

<div class="pop-overly" id="pop-overly"></div>