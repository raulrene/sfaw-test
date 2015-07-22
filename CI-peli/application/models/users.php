<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Model{
    
    private $name, $pasword, $email, $phone;
    private $table = 'users';

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $pasword
     */
    public function setPasword($pasword)
    {
        $this->pasword = $pasword;
    }

    /**
     * @return mixed
     */
    public function getPasword()
    {
        return $this->pasword;
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
     * @param mixed $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }


}