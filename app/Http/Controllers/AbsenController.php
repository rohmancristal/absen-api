<?php

namespace App\Http\Controllers;

use App\Models\Absen;
use Illuminate\Http\Request;

class AbsenController extends Controller
{
    public function store(Request $request)
    {
        $absen = Absen::create($request->all());
        return response()->json(['message' => 'Absen recorded successfully', 'data' => $absen], 201);
    }
}

