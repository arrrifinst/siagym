<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Armory Gym'
        ];
        return view('web/home', $data);
    }
}
