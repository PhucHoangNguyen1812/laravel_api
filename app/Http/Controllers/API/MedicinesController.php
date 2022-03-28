<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Medicines;

class MedicinesController extends Controller
{
    public function index()
    {
        // $medicines = new Medicines();
        // $medicines->id = '1';
        // $medicines->name = '1';
        // $medicines->category_id = '1';
        // $medicines->title = '1';
        // $medicines->description = '1';
        // $medicines->price = 1;
        // $medicines->count = 1;
        // $medicines->image = '1';
        // $medicines->save();
        $medicines = Medicines::all();
        echo $medicines;
        // echo response()->json([
        //     'status' => 200,
        //     'medicine' => $medicines,
        // ]);
    }

    public function store(Request $request)
    {
        $medicines = new Medicines();
        $medicines->name = $request->input('name');
        $medicines->category_id = $request->input('category_id');
        $medicines->title = $request->input('title');
        $medicines->description = $request->input('description');
        $medicines->price = $request->input('price');
        $medicines->count = $request->input('count');
        $medicines->image = $request->input('image');
        $medicines->save();

        return response()->json([
            'status' => 200,
            'message' => 'Add Success',
        ]);
    }
}
