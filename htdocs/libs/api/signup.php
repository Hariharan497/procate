<?php
${basename(__FILE__, '.php')} = function () {
    if ($this->paramsExists(['username', 'email', 'password'])) {
        $email = $this->_request['email'];
        $password = $this->_request['password'];
        $username = $this->_request['username'];

        $result = user::signup($username, $email, $password);
        if($result) {
            
            $this->response($this->json([
                'message'=>'Successfully Signed Up',
                'result' => $result
            ]), 200);
            
        } else {
            $this->response($this->json([
                'message'=>'Something went wrong',
                'result' => $result
            ]), 400);
        }

    } else {
        $this->response($this->json([
            'message'=>"bad request for post method"
        ]), 400);
    }
};