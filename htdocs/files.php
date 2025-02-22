<?php
session_cache_limiter('none');

include 'libs/load.php';
// session_cache_limiter('none');
$upload_path ='/var/www/htdocs/TechShop/uploads/';
$fname = $_GET['name'];
$image_path = $upload_path . $fname;
// echo $image_path;
// echo (is_file($image_path) ? "yes" : "no");
//To prevent directory traversal vulnerablity
$image_path = str_replace('..', '', $image_path);

if (is_file($image_path)) {
    //TODO: Lot of security things to think about here
    //TODO: Check why caching is not working on client side.
    header("Content-Type:".mime_content_type($image_path));
    header("Content-Length:".filesize($image_path));
    header('Cache-control: max-age='.(60*60*24*365));
    header('Expires: '.gmdate(DATE_RFC1123, time()+60*60*24*365));
    header('Last-Modified: '.gmdate(DATE_RFC1123, filemtime($image_path)));
    header_remove('Pragma');
    echo file_get_contents($image_path);
}