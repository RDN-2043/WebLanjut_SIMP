<?php

namespace App\Controllers;

use App\Models\modelPerpustakaan;

class ControllerPerpustakaan extends BaseController
{
    public function index()
    {
        $modelPerpustakaan = new modelPerpustakaan();
        $perpustakaan = $modelPerpustakaan->findAll();

        $data = [
                'title' => "Perpustakaan",
                'perpustakaan' => $perpustakaan
            ];

        return view('content/viewPerpustakaan', $data);
    }
}
