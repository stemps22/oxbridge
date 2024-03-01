<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Career;
use App\Http\Resources\CareerResource;

class CareerController extends Controller
{

    public function store(Request $request)
    {
    $validated = $request->validate([
        'title' => 'bail|required|unique:careers|string|max:255',
        'salary_low' => 'required|integer',
        'salary_medium' => 'required|integer',
        'salary_high' => 'required|integer'
    ]);

    $career = Career::create($validated);
    return response()->json(201);
    }
    public function search($title)
    {
        return  Career::where('title', 'like', '%' . $title . '%')->get();
    }
}
