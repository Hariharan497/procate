<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
<?php 
  session::loadTemplate("_header");
  ?>
</head>

<body class="d-flex align-items-center py-4 bg-body-tertiary">
<?php 
  session::loadTemplate("_".basename($_SERVER['PHP_SELF'],'.php'));
  ?>
  

</body>

</html>