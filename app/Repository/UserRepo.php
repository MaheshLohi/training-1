<?php

namespace App\Repository;

use App\Model\Npciuser;


class UserRepo
{

    public $userObject;
    public function __construct(Npciuser $userObject)
    {
        $this->userObject = $userObject;
    }


    public function saveData($name, $email, $phone, $organisation, $password)
    {

        $this->userObject->username = $name;
        $this->userObject->email = $email;
        $this->userObject->phone = $phone;
        $this->userObject->organisation = $organisation;
        $this->userObject->password = $password;
        $this->userObject->save();
    }
}

