<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return redirect()->to('/inventario-equipamentos');
        //return view('welcome_message');
    }
}
