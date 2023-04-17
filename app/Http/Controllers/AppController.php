<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;

class AppController {
    public function index(): Response
    {
        return Inertia::render('Index', [
            'title' => 'Laravel 10, Inertia.js, Svelte, Tailwind CSS',
        ]);
    }
}
