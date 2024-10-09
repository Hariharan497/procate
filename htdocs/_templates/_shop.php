<!DOCTYPE html>
<html lang="en">

<head>
    <?php session::loadTemplate("_header") ?>
</head>

<body onresize="mymedia()">
    <?php session::loadTemplate("navbar/index") ?>
    <main class="container-fluid d-flex w-100 p-0">
        <?php
        session::loadTemplate("shop/_filters");
        session::loadTemplate("shop/_shopcard");

        session::loadTemplate("_popView");
        ?>

    </main>

    <script src="<?php ($_SERVER['DOCUMENT_ROOT']) ?>/assets/dist/js/bootstrap.bundle.min.js"></script> 
    <script  src="js/index.js"></script>
    <script  src="js/utils.js"></script>
    <script  src="js/events.js"></script>
    <!-- <script  src="<?php ($_SERVER['DOCUMENT_ROOT']) ?>/js/<?php echo (basename($_SERVER['PHP_SELF'], '.php')) ?>.js"></script> -->
</body>

</html>