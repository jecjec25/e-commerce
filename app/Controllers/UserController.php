<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class UserController extends BaseController
{
    public function __construct()
    {
        $this->users = new \App\Models\UserModel();
    }
    public function index()
    {
        //
    }
    public function register()
    {
        

        $rules = [
            'username' => 'required|min_length[4]|max_length[100]|valid_email|is_unique[userlogin.username]',
            'password' => 'required|min_length[4]|max_length[50]',
            'confirmpassword' => 'matches[password]'
        ];
        if($this->validate($rules))
        {
            $data = [
                'name' => $this->request->getVar('name'),
                'username' => $this->request->getVar('username'),
                'password' => $this->request->getVar('password'),
                'confirmpassword' => $this->request->getVar('confirmpassword'),
            ];
            $this->users->save($data);
            return redirect()->to('/signin');
        }
        else 
        {
            $data['violation'] = $this->validator;
            echo view('register', $data);
        }
    }
        public function signUp()
        {
            $data['users'] = $this->users->findAll();
            return view('register', $data);
        }


}
