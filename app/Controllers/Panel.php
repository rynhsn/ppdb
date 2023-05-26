<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Panel extends BaseController
{
    protected $lembagaModel;
    public function __construct()
    {
        $this->lembagaModel = new \App\Models\ProfileLembagaModel();
    }
    public function index()
    {
        $data = [
            'title' =>  'Panel',
            'lembaga' => $this->lembagaModel->find(1),
        ];
        return view('index',$data);
    }
}
