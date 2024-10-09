<?php

// include "database.class.php";

use MongoDB\Operation\Explain;

error_reporting(E_ALL ^ E_DEPRECATED);
class user
{
    use MongoDBGetterSetter;
    private $conn;
    private $collection;
    private $userD;
    private $id;

    public function __construct($username = null) {
        try {
            $this->conn =  Database::getconnection();
            $this->collection = $this->conn->procate_user->users;
            if (!($this->conn instanceof Exception) & $username != null) { // check connectin  
                
                $data = $this->collection->findOne([
                    '$or' => [
                        ['username' => "$username"],
                        ['email' => "$username"]
                    ]
                ]);
                if ($data) {
                    $this->id = $data['uid'];
                } else {
                    throw new Exception("No Record Found");
                }
            }
        } catch (Exception $e) {
            return $e;
        }
    }

    public static function signup($username, $email, $password)
    {
        try {
            $options = [
                'cost' => 12,
            ];
            $password = password_hash($password, PASSWORD_BCRYPT, $options);
            $conn =  Database::getconnection();

            if (!($conn instanceof Exception)) {
                // $db = $conn->procate_user; // create database
                $Collection = $conn->procate_user->users;
                $result = $Collection->insertOne([
                    "uid" => user::counter("collectionCounter", "user_id"),
                    "username" => "$username",
                    "email" => "$email",
                    "password" => "$password"
                ]);
                return $result->getInsertedId();
            } else {
                return "Connection Error!";
            }
        } catch (Exception $e) {
            return $e;
        }
    }

    /**
     * @param username 
     * @param password
     * @return int
     */

    // public static function login($username, $password)
    // {
    //     // echo $password;
    //     try {
    //         $conn =  Database::getconnection();

    //         if (!($conn instanceof Exception)) { // check connectin  
    //             $Collection = $conn->procate_user->users;
    //             $data = $Collection->findOne([
    //                 '$or' => [
    //                     ['username' => "$username"],
    //                     ['email' => "$username"]
    //                 ]
    //             ]);
    //             if ($data) {
    //                 if (password_verify($password, $data['password'])) {
    //                     return $data['uid'];
    //                 } else {
    //                     throw new Exception("Invalid Credantials");
    //                 };
    //             } else {
    //                 throw new Exception("No Record Found");
    //             }
    //         }
    //     } catch (Exception $e) {
    //         return $e;
    //     }
    // }

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

    // public function getpassword(){
    //     return $this->userD['password'];
    // }
}
