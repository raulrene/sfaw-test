<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 7/17/15
 * Time: 11:31 AM
 */
class Users{
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