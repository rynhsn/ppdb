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

    public function tables(){
        $data=['title' => 'Tables'];
        return view('tables', $data);
    }

    public function helpers(){
        $data=['title' => 'Helpers'];
        return view('helpers/index', $data);
    }
}
