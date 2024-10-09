<?php
include "traits/MongoDBGetterSetter.trait.php";

// include "includes/oauth.class.php";
// include "includes/user.class.php";
// include "includes/database.class.php";
// include "includes/API.class.php";
// include "includes/session.class.php";
// include "includes/product.class.php";
// include "includes/Auth.class.php";

spl_autoload_register(function ($class_name) {
    // echo ($class_name);
    include "includes/".$class_name . '.class.php';
});

// session::start_session();

$Api = new WebApi;
$Api->initiateSession();

