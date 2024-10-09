<?php
include_once "libs/load.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php session::loadTemplate("_header") ?>
</head>

<body onresize="mymedia()">
    <?php session::loadTemplate("_navHeader") ?>
    <main>

        <?php session::loadTemplate("_cover");

        session::loadTemplate("_catagory");

        session::loadTemplate("_carditem");

        session::loadTemplate("_popView") ?>




    </main>


    <script src="<?php ($_SERVER['DOCUMENT_ROOT']) ?>/assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php ($_SERVER['DOCUMENT_ROOT']) ?>/js/<?php echo (basename($_SERVER['PHP_SELF'], '.php')) ?>.js"></script>
</body>

</html>

