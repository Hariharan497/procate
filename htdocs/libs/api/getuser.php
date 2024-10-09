<?php
${basename(__FILE__, '.php')} = function () {
    if ($this->paramsExists(['username'])) {
        $username = $this->_request['username'];

        $result = user::getUser($username);
        if (!($result instanceof Exception)) {
            $this->response($this->json([
                'result' => $result
            ]), 200);
            return $result;
        } else {
            $this->response($this->json([
                'result' => $result->getMessage()
            ]), 404);
        }
    } else {
        $this->response($this->json([
            'message' => "bad request for post method"
        ]), 400);
    }
};
