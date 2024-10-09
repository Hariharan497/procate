<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>

  <?php
  session::loadTemplate("_header");
  ?>
</head>

<body class="d-flex align-items-center py-4 bg-body-tertiary">

  <?php
  $signin = false;
  if (isset($_COOKIE['signin'])) {
  ?>
    <h3 class="d-flex align-items-start">Sign-in sucess go to<a class="" href="log-in.php">
        login here!
      </a></h3>
  <?php
  } else {
  ?>
    <?php

    session::loadTemplate("_signup");
    ?>
  <?php
  }
  ?>

</body>

</html>