<?php
/**
 * Created by PhpStorm.
 * User: dan
 * Date: 7/17/15
 * Time: 10:26 PM
 */
class User extends CI_Model{
    private $id,$user_name,$user_password,$email;
    private $tableName = 'users';

    public function getRole($username){
        $this -> db -> select('role');
        $this -> db -> from('users');
        $this -> db -> where('user_name', $username);

        $query = $this -> db -> get();
        return $query->result();
    }
    function login($username, $password)
    {
        $this -> db -> select('id, user_name, user_password');
        $this -> db -> from('users');
        $this -> db -> where('user_name', $username);
        $this -> db -> where('user_password', sha1($password));
        $this -> db -> limit(1);

        $query = $this -> db -> get();

        if($query -> num_rows() == 1)
        {
            return $query->result();
        }
        else
        {
            return false;
        }
    }

    public function getPassByName($user){

        $q = "SELECT user_password FROM users WHERE user_name = ".$user;
        $data = $this->db->get($q);

        return $data->result();
    }

    public function getUsers(){
        $data = $this->db->get($this->table);

        return $data->result;
    }

    public function getUser($id){
        $this->db->where('id', $id);
        $data = $this->db->get($this->table);
        return $data->result();
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