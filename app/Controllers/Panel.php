<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Panel extends BaseController
{
    public function index()
    {
        $data = ['title' =>  'Panel'];
        return view('helpers/index',$data);
    }
}
