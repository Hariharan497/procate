<?php
${basename(__FILE__, '.php')} = function () {
    if ($this->isAuthenticated()) {
        $password = $this->_request['password'];
        $username = $this->_request['username'];
        // echo $username;
        // $auth = new oAuth();
        $result = new Auth($username);
        // print_r($result);
        if (!($result instanceof Exception)) {
            $this->response($this->json([
                'message' => 'Successfully Signed Up',
                'result' => $result->getlogintoken()
            ]), 200);
            // return $result;
        } else {
            $this->response($this->json([
                'message' => 'Unauthorized',
                'result' => $result->getMessage()
            ]), 401);
        }
    } else {
        $this->response($this->json([
            'message' => "bad request for post method"
        ]), 400);
    }
};
