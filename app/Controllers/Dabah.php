<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Dabah extends BaseController
{
    public function index()
    {
        return view('dabah/get');
    }
}
