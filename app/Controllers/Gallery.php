<?php

namespace App\Controllers;
use CodeIgniter\Controller;


class Gallery extends BaseController
{
    public function index(): string
    {
        return view('components/gallery');
    }
}
