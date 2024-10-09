<?php
${basename(__FILE__, '.php')} = function () {

    if ($_SERVER['REQUEST_METHOD'] == "GET") {
        $page = isset($_GET['page']) ?(int) $_GET['page']: 1;
        $sort = isset($_GET['sort']) ? $_GET['sort']:  '';

        $data = Product::product($page,$sort);
        // foreach($data as $key){
        //     session::loadTemplate("_card",['key' => $key]);
        //    }
        // print_r($data);
        if ($data) {
            
            // session::set("data",$data); 
            $this->response($this->json([
                'result' => $data
            ]), 200);
           
        } else {
            $this->response($this->json([
                'result' => $data
            ]), 404);
        }
    }else{
        $this->response($this->json([
            'result' => "Something Wrong"
        ]), 404);
    }
};
