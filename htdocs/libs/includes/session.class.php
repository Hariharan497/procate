<?php 
 
class session{
    
    public static $isError = false;

    public static $user = null;

    public static $userSession = null;

    public static function start_session(){
        session_start();
    }

    public static function unset_session(){
        session_unset();
    }

    public static function die_session(){
        session_destroy();    
    }

    public static function set($key,$value){
        $_SESSION[$key] = $value;
    }

    public static function get($key){
       return isset($_SESSION[$key]) ? $_SESSION[$key] : session::$isError;
    }

    public static function unset($key){
        session_unset($key);
    }

    public static function isset($key)
    {
        return isset($_SESSION[$key]);
    }

    public static function loadTemplate($template,$data=[]){
        extract($data);
        include $_SERVER['DOCUMENT_ROOT']."/_templates/$template.php";
    }
    
    public static function renderPage(){
        session::loadTemplate("_master");
    }

    public static function isAuthenticated(){
       
        return session::$userSession;
    }
}