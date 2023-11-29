<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;

class MainController extends Controller
{
    public function index(): Response
    {
        return Inertia::render('Main', [
            'data' => [
                'header' => 'Main'
            ]
        ]);
    }
}
