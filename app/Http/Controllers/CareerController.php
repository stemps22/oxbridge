<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Career;
use App\Http\Resources\CareerResource;

class CareerController extends Controller
{
    /*public function store(Request $request)
    {
        $career = new Career;
        $career->title=$request->title;
        $career->save();
        return response()->json([
            "message"=>"Career added"
        ], 201);
        //Career::create($attributes);
    }*/
    public function index()
    {
        //return "hello";
        $careers = Career::paginate();
        return CareerResource::collection($careers);
    }
    public function show(Career $career)
    {
	    return new CareerResource($career);
    }

    public function store(Request $request)
{
    $validated = $request->validate([
        'title' => 'bail|required|unique:careers|string|max:255',
        'salary_low' => 'required|integer',
        'salary_medium' => 'required|integer',
        'salary_high' => 'required|integer'
    ]);

    $career = Career::create($validated);
    //return new CareerResource($career);
    return response()->json(201);
}

}
