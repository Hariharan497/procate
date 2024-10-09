<?php

class WebApi{

    public function initiateSession(){
        session::start_session();

        if(session::isset('access_token')){
            // echo session::get('access_token'). "\n";
            $auth = new Auth(session::get('access_token'));
            session::$userSession = $auth->getusersession();
        }
    }
}