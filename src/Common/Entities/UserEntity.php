<?php
/**
 * Created by PhpStorm.
 * User: Dux-044
 * Date: 23/11/2017
 * Time: 02:35 PM
 */

namespace App\src\Common\Entities;


class UserEntity
{
    public $user;
    public $password;
    public $created_date;

    /**
     * UserEntity constructor.
     * @param $user
     * @param $password
     * @param $created_date
     */
    public function __construct($user, $password, $created_date)
    {
        $this->user = $user;
        $this->password = $password;
        $this->created_date = $created_date;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return mixed
     */
    public function getCreatedDate()
    {
        return $this->created_date;
    }




}