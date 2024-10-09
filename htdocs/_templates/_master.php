<!DOCTYPE html>
<html lang="en">

<head>
    <?php session::loadTemplate("_header") ?>
</head>

<body onresize="mymedia() "class="m-0 p-0 ">
    <?php session::loadTemplate("navbar/index") ?>
    <main class="mb-0">

        <?php
        session::loadTemplate("home/_cover");

        session::loadTemplate("home/_catagory");

        session::loadTemplate("home/_main");

        session::loadTemplate("_popView");

        ?>

    </main>

    <?php
    session::loadTemplate("footer/index");
    ?>

    <script src="<?php ($_SERVER['DOCUMENT_ROOT']) ?>/assets/dist/js/bootstrap.bundle.min.js"></script>
    <script type="module" src="js/main.js"></script>
    <script  src="js/events.js"></script>
    <script type="module" src="js/httpController.js" ></script>
    <!-- <script src="js/makeGetRequest.js"></script> -->
    <script src="<?php ($_SERVER['DOCUMENT_ROOT']) ?>/js/<?php echo (basename($_SERVER['PHP_SELF'], '.php')) ?>.js"></script>
</body>

</html>