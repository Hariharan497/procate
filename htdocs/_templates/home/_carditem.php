<div class="row " id="card-item">
    <div class="row">
        <span class="fs-4 fw-medium ms-0 mt-5 mb-3 text-dark opacity-50 col ">Trends & Fashion</span>
        <a href="/shop" class="mt-5 mb-3 col text-end text-decoration-none <?php echo ($_SERVER['PHP_SELF']== "/shop.php" ? "d-none" : "") ?>">More <i class="bi bi-chevron-double-right"></i></a>
    </div>

    <?php

    $data = Product::getallproduct();
    
    if ($data) {
        foreach ($data as $key) {
            $d = Product::getproduct($key['pid']);
            session::loadTemplate("_card", ['key' => $d]);
        }
    } else {
        echo "no data";
    }

    ?>
</div>