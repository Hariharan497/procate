<?php

use function PHPSTORM_META\type;

require __DIR__ . '/../../vendor/autoload.php';


error_reporting(E_ALL ^ E_DEPRECATED);

class Product
{
    private $conn;

    public function __construct() {}

    public static function getallproduct()
    {

        $currentPage = 3;

        // $limit_page  = isset($_GET['page']) ? (int) $_GET['page'] : $currentPage;

        

        $product = new Product;
        $conn = $product->newConnection();
        $collection = $conn->procate->cloths;
        $data = $collection->find([], ['limit' => $currentPage]);

        if ($data) {
            return $data;
        } else {
            return "no data found";
        }
    }

    public static function getproduct($pid)
    {

        $product = new Product;
        $conn = $product->newConnection();
        $collection = $conn->procate->cloths;
        $data = $collection->findOne(['pid' =>$pid], ['limit' => 1]);

        if ($data) {
            return $data;
        } else {
            return "no data found";
        }
    }

    public static function getlazy($nextPage)
    {
        $currentPage = 3;

        // $manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");

        $page_limite = isset($_GET['page']) ? (int) $_GET['page'] : 1;
        $Page_skip = isset($_GET['page']) ? 3 : 0;
        $sort = isset($_GET['sort'] )? $_GET['page'] : '';

        $product = new Product;
        $conn = $product->newConnection();

        // $offset = 10;  // skip the first 10 documents
        $limit = 3 * $page_limite - $currentPage;
        $skip = 3 * $page_limite;
       
        // if($sort == 'n'){
        //     $sort = []
        // }

        $option = [
            'sort' => ['date' => -1],
            'skip' => $skip ,
            'limit' => 3,
        ];

        // $conn = $product->newConnection();
        $collection = $conn->procate->cloths;
        $data = $collection->find([], $option);

        if ($data) {
            // foreach($data as $document){
            //     // print_r($document);

            // }
            //    echo (is_array($data) ? "yes" : "no");
            return $data->toarray();
        } else {
            return "no data found";
        }

        

    }

    public static function product($limit,$sort)
    {

        // $limit_page  = isset($_GET['page']) ? (int) $_GET['page'] : $currentPage;

        if($sort =='n'){
            $sort = ['date' => -1];
        }elseif($sort == 'h'){
            $sort = ['newprice' => -1];
        }elseif($sort == 'l'){
            $sort = ['newprice' => 1];
        }else {
            $sort = ['date' => -1];
        }
        

        $product = new Product;
        $conn = $product->newConnection();
        $collection = $conn->procate->cloths;
        $data = $collection->find([], ['sort' => $sort ,'limit' => $limit * 3]);

        if ($data) {
            return $data->toarray();
        } else {
            return "no data found";
        }
    }

    public function newConnection()
    {
        $this->conn = Database::getconnection();
        return $this->conn;
    }
}
