<?php

namespace App\Controllers;

class ControllerHeader extends BaseController
{
    public function index()
    {
        return view('content/viewPerpustakaan');
    }
}
