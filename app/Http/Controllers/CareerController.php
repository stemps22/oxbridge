<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CareerController extends Controller
{
    public function store()
    {
        $attributes = request()->validate([
            'title' => 'required'
        ]);
        Career::create($attributes);
    }
}
