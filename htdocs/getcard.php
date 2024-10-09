<?php

include_once "libs/load.php";

// echo "this is getcard";
?>
<script>console.log(<?php echo($_GET['pid']) ?>)</script>

<?php

$data = Product::getproduct($_GET['pid']);
// print_r($p);






session::loadTemplate("_card",['key' => $data]);