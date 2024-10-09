<?php
${basename(__FILE__, '.php')} = function () {
    if (isset($_POST['Pname']) and isset($_POST['Pcolor']) and isset($_POST['Category']) and isset($_POST['Pprice'])){
        $password = $this->_request['password'];
        $username = $this->_request['username'];
        // echo $username;
        $result = Oauth::authentication($username,  $password);
        echo $result;
        if (!($result instanceof Exception)) {
            $this->response($this->json([
                'message' => 'Successfully Signed Up',
                'result' => $result
            ]), 200);
            return $result;
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
