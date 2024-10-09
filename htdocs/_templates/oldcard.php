<div class="col ">
    <div class="card rounded mx-auto d-block" style="width: 18rem; ">
        <div class="position-relative w-100 img-overly ">
            <img loading="lazy" src="<?php echo $key['img_uri'] ?>" class=" " width="100%" height="350px" id="card-img" alt="...">
            <?php
            if ((int) $key['offer'] > 0) {
                $overlyTextClass = "bg-danger off";
                $overlyText = "Offer  " . (int) $key['offer'] . '%';
            } elseif ($key['date'] == date('Y-m-d', time())) {
                $overlyTextClass = "bg-success";
                $overlyText = "New Sale";
            }

            ?>
            <!-- <p class="boreder rounded-circle bg-danger text-light p-2 m-2 position-absolute top-0 end-0">25%</p> -->
            <!-- <p class="text-light d-flex align-items-center p-1 mt-5 position-absolute top-0 start-0 overly-text">NEW SALE</p> -->
            <p class="text-light mt-5 w-50  position-absolute top-0 start-0 ">
                <span class="overly-text p-2 <?php echo $overlyTextClass ?>"><?php echo $overlyText ?></span>

            </p>
            <div class="position-absolute bottom-0 d-flex w-100">
                <a role="button" href="/signup.php" class="btn d-none btn-dark w-50 rounded-0 w-50 hover-btn-container">Add<i class="bi bi-cart-plus"></i></a>
                <a role="button" class="btn d-none btn-primary rounded-0 w-50 hover-btn-container" onclick="btnQuickView(this)">View</a>
            </div>
        </div>
    </div>
    <div class="card-body text-center ">
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
            <!-- <p class="text-center  ps-2 mb-1 text-danger fw-bolder "></p> -->
        </div>
    </div>
</div>

<?php
