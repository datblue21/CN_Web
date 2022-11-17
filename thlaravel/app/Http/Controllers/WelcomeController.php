<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function Welcome($ten)
    {
        return view(view: 'welcome', data: [
            'ten' => $ten,
        ]);
    }
}
