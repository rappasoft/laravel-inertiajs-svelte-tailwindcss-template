<?php

namespace App\Http\Controllers;

use Inertia\Response;

class AppController {
    public function index(): Response
    {
        return inertia('Index', [
            'title' => 'Laravel 10, Inertia.js, Svelte, Tailwind CSS',
        ]);
    }
}
