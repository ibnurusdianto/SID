<?php

namespace App\Controllers;
use CodeIgniter\Controller;


class Kades extends BaseController
{
    public function index(): string
    {
        return view('components/profile_kades');
    }
}
