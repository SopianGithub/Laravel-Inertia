<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class PortofolioController extends Controller
{
    public function index()
    {
        return Inertia::render('Portofolio/Index');
    }
}
