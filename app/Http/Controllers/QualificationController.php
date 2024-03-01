<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Qualification;
use App\Http\Resources\QualificationResource;

class QualificationController extends Controller
{
    public function index()
    {
        $qualifications = Qualification::paginate();
        return QualificationResource::collection($qualifications);
    }
    public function show(Qualification $qualification)
    {
	    return new QualificationResource($qualification);
    }

    public function store(Request $request)
    {
    $validated = $request->validate([
        'name' => 'bail|required|unique:qualifications|string|max:255',
        'career' => 'required|integer',
        'level' => 'required|integer|between:1,5',
        'date_available_from' => 'date_format:Y-m-d',
        'date_available_to' => 'date_format:Y-m-d'
    ]);

    $qualification = Qualification::create($validated);
    //return new QualificationResource($qualification);
    return response()->json(201);
    }
    public function search($name)
    {
        return  Qualification::where('name', 'like', '%' . $name . '%')->get();
    }
}
