<?php

// include "database.class.php";

class OAuth
{
    // use MongoDBGetterSetter;
    private $conn = null;
    private $collection = null;
    private $username;
    private $id;
    private $accesstoken = null;
    private $refreshtoken = null;
    private $fingerprint = null;
    private $ip;
    private $user_agent;
    private $valid_for = 7200;

    public function __construct($token = null)
    {
        $this->conn = Database::getconnection();

        if ($token != null) {
           
            if($this->startsWith($token,'a.')){
                $this->accesstoken = $token;
                
            }elseif($this->startsWith($token,'r.')){
                $this->refreshtoken = $token;
            }else{
                $this->setusername($token);
            }

        }

    }

    public function setusername($username){
        $this->username = $username;
        $user = new user($username);
        $this->id = $user->getuid();
        return $this->id;
    }
    
    public function athuntication(){
        try{
            // echo "$this->accesstoken\n";
            if($this->accesstoken != null){
                $collection = $this->conn->procate->session;
                $data = $collection->findOne(
                    [ 'token' => $this->accesstoken]

                );
                if($data){
                    if(isset($_SERVER['REMOTE_ADDR']) && isset($_SERVER['HTTP_USER_AGENT'])){
                        if(isset($_COOKIE['fingerprint'])){
                            if(time() <= $data['expired_at'] && $data['active']){
                                if($_SERVER['REMOTE_ADDR']  == $data['ip']){
                                    if($_SERVER['HTTP_USER_AGENT'] == $data['user_agent']){
                                        return $data['uid'];
                                    }else{
                                        throw new Exception('user agent not match');
                                    }
                                }else{
                                    throw new Exception('ip is not match');
                                }
                            }else{
                                throw new Exception('Session Expired');
                            }
                        }else{
                            throw new Exception('Can`t find FingerPrint');
                        }
                    }else{
                        throw new Exception('ip and user agant is can`t found' );
                    }
                    // if(time() <= $data['expired_at']){
                    //     return true;
                    // }else{
                    //     return false;
                    // }
                }else{
                    throw new Exception('Invalid Token');
                }

            }
        }catch(Exception $e){
            return $e;
        }
    } 


    public function newSession($valid_for = 7200, $referance_token = "auth_Grant",$fingerprint = null)
    {
        try {
            // $conn = Database::getconnection();
            if (!($this->conn instanceof Exception)) {  // for check exception error or returun client
                // $fingerprint = $_COOKIE['fingerprint'] ;
                $ip = $_SERVER['REMOTE_ADDR'];
                $user_agent = $_SERVER['HTTP_USER_AGENT'];
                $token = "a." . md5(random_int(0, 9999999) . $ip . $user_agent . time());
                if ($referance_token === "auth_Grant") {
                    $refreshtoken = "r." . md5(random_int(0, 9999999) . $ip . $user_agent . time());
                } else {
                    $refreshtoken = "d." . md5(random_int(0, 9999999) . $ip . $user_agent . time());
                }
                $db = $this->conn->procate_user;
                $collection = $db->session;
                $collection->insertone([
                    "sid" => oAuth::counter('collectionCounter', 'session_id'),
                    "uid" => $this->id,
                    "access_token" => $token,
                    "refresh_token" => $refreshtoken,
                    "login_time" => time(),
                    "ip" => $ip,
                    "user_agent" => $user_agent,
                    "fingerprint" => $fingerprint,
                    'referance_token' => $referance_token,
                    'valid_for' =>  $valid_for,
                    'expired_at' => time() + $valid_for,
                    "active" => 1,
                ]);
                session::set('access_token', $token);
                session::set('refresh', $refreshtoken);
                session::set('refrence_token',$referance_token);
                session::set('id', $this->id);
                session::set('username', $this->username);
                return [
                    'token' => $token,
                    'refresh' => $refreshtoken,
                    'refrence_token' =>$referance_token,
                    'valid_for' => $valid_for,
                ];
            } else {
                throw new Exception("unable to connect database");
            }
        } catch (Exception $e) {
            return $e;
        }
    }


    public function refresh($refreshtoken = null){
        try{
            if($refreshtoken != null && !($this->startsWith($refreshtoken,'.d'))){

            }
        }catch(Exception $e){
            return $e;
        }
    }

    public static function counter($collectionName, $sequenceName)
    {
        try {
            $conn =  Database::getconnection();
            if ($conn) {
                $collection = $conn->procate_user->$collectionName;
                $result =  $collection->findOneAndUpdate(
                    ['_id' => $sequenceName],
                    ['$inc' => ['seq' => 1]],
                    [
                        'upsert' => true,
                        'projection' => ['seq' => 1],
                        'returnDocument' => MongoDB\Operation\FindOneAndUpdate::RETURN_DOCUMENT_AFTER
                    ]
                );

                return $result['seq'];
            } else {
                throw new Exception('No Connection ');
            }
        } catch (Exception  $e) {
            return $e;
        }
    }


    private function startsWith($string,$startString){
        $len = strlen($startString);
        return (substr($string,0,$len) === $startString); 
    }
}
