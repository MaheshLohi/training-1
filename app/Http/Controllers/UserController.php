<?php

namespace App\Http\Controllers;

use App\Repository\UserRepo;
use Exception;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public $userObj;
    public function __construct(UserRepo $userObj)
    {
        $this->userObj = $userObj;
    }


    public function signup()
    {
        return view('signup');
    }
    public function login()
    {
        return view('login');
    }



    public function saveUser(Request $req)
    {

        $this->validate($req, [
            'name' => 'required',
            'email_id' => 'required|email',
            'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:6',
            'phone' => 'required|min:10|max:10',
            'organization' => 'required'
        ]);

        $name = request('name');
        $emailId = request('email_id');
        $password = request('password');
        $phone = request('phone');
        $organization = request('organization');
        try {
            $this->userObj->saveData($name, $emailId, $phone, $organization, $password);
            return redirect('/')->with('message', 'User Registration successful');
        } catch (Exception $e) {
            return view('error', ['error' => "Database connection failed"]);
        }
    }

    public function details()
    {
        return view('details');
    }
}
