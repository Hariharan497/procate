<?php

class Auth
{

    private $username = null;
    private $logintoken = null;
    private $authunticate = null;

    public function __construct($username, $password = null)
    {
        try {
            if ($password == null) {
                $this->logintoken = $username;
                //  echo $this->logintoken .'\n';
            }else{
                $this->username = $username;
                
            }
            if ($this->username && $password) {
                $pass = new user($username);
                $hash = $pass->getpassword();
                // print_r($hash);
                if ($hash) {
                    if (password_verify($password, $hash)) {
                        $this->logintoken = $this->addSession();
                    }
                }
            }else{
                // echo "construct \n";
                $this->isAuthunticated();
            }
        } catch (Exception $e) {
            return $e;
        }
    }

    public function getlogintoken(){
        return $this->logintoken;
    }

    public function getusersession(){
        return $this->authunticate;
    }

    private function addSession()
    {
        $oauth = new oAuth();
        $oauth->setusername($this->username);
        $session = $oauth->newSession();
        // print_r($session);
        return $session;
    }

    private function isAuthunticated(){
        // echo $this->logintoken;
        $oauth = new OAuth($this->logintoken);
        $this->authunticate = $oauth->athuntication();
        // print_r($oauth->athuntication());
        
    }
}
