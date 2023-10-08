<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class SigninController extends BaseController
{
    public function __construct()
    {
        $this->users = new \App\Models\UserModel();
    }
    public function login()
    {
        $session = session();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $data = $this->users->where('username', $username)->first();
        if($data)
        {
            $pass = $data['password'];
            $authenticatePassword = password_verify($password, $pass);
            if($authenticatePassword)
            {
                $ses_data = 
                [
                    'id' => $data['id'],
                    'username' => $data['username'],
                    'isLoggedin' => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('signUp');
            }
            else
            {   
                $session->setFlashdata('msg', 'password is incorrect.');
                return redirect()->to('signin');
            }
           
        }
        else
        {
            $session->setFlashdata('msg', 'Email does not exist.');
            return redirect()->to('signIn');
        }
    }
    public function signIn()
    {
    
        $data['users'] = $this->users->findAll();
        return view('login', $data);
    }

}
