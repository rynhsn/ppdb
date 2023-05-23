<?php

namespace App\Controllers;

use Config\Services;

class Home extends BaseController
{
    protected $request;
    public function __construct()
    {
        $this->request = Services::request();
    }
    public function index()
    {
        return view('welcome_message');
    }

    public function login(){
        $data = [
            'title' => 'Sign In',
            'uri'  => $this->request->uri,
        ];
        return view('auth/login', $data);
    }

    public function register(){
        $data = [
            'title' => 'Sign In',
            'uri'  => $this->request->uri,
        ];
        return view('auth/register', $data);
    }

    public function tables(){
        return view('tables');
    }
    public function helpers(){
        return view('helpers/index');
    }
}
