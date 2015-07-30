<?php
/**
 * Created by PhpStorm.
 * User: dan
 * Date: 7/17/15
 * Time: 10:26 PM
 */
include('config/config.php');
class User {
    private $id,$user_name,$user_password,$email;
    private $tableName = 'users';

    public function getPassByName($user){
        global $db;
        $q = "SELECT user_password FROM users WHERE user_name = ".$user;
        $data = $db->fetch_row($q);

        return $data;
    }

    public function getUsers(){
        global $db;
        $data = $db->fetch_rows("Select * from $this->table");

        return $data;
    }

    public function getUser($id){
        global $db;

        $data = $db->fetch_row("Select * from $this->table where id =" . $id);

        return $data;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $user_password
     */
    public function setUserPassword($user_password)
    {
        $this->user_password = $user_password;
    }

    /**
     * @return mixed
     */
    public function getUserPassword()
    {
        return $this->user_password;
    }

    /**
     * @param mixed $user_name
     */
    public function setUserName($user_name)
    {
        $this->user_name = $user_name;
    }

    /**
     * @return mixed
     */
    public function getUserName()
    {
        return $this->user_name;
    }


} 