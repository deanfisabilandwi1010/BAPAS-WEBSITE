<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Bapas II PEKANBARU'
        ];

        return view('pages/home', $data);
    }

    public function profile()
    {
        $data = [
            'title' => 'Profile | Bapas II PEKANBARU'
        ];
        return view('pages/profile', $data);
    }

    public function sejarah()
    {
        $data = [
            'title' => 'Sejarah | Bapas II PEKANBARU'
        ];
        return view('pages/sejarah', $data);
    }
    
}
