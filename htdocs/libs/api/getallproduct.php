<?php
${basename(__FILE__, '.php')} = function () {

    if ($_SERVER['REQUEST_METHOD'] == "GET") {
        $data = Product::getallproduct();
        if ($data) {
            // session::set("data",$data); 
            $this->response($this->json([
                'result' => $data
            ]), 200);
            // return $data;
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
