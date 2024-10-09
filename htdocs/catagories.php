<?php
include $_SERVER['DOCUMENT_ROOT'] . "/libs/load.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php session::loadTemplate("_header") ?>
</head>

<body>
    <main>
        <?php $category = isset($_GET['type']) ? $_GET['type'] : 'mens'; ?>
        <div class="container-fluid w-100 p-0">
            <div class="container-fluid pt-3 ps-5 breadcrumb-container bg-white border-bottom shadow-sm w-100">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/shop">Shop</a></li>
                        <li class="breadcrumb-item " >Catagories</li>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo $category ?></li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="container-fluid w-100 p-0 d-flex">
            <?php session::loadTemplate("shop/_filters") ?>
            <?php session::loadTemplate("shop/_shopcard") ?>

            <?php session::loadTemplate("_popView") ?>
        </div>
    </main>
    <script src="<?php ($_SERVER['DOCUMENT_ROOT']) ?>/assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/shop.js"></script>
</body>

</html>