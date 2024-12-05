<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        return Siswa::all();
    }

    public function store(Request $request)
    {
        $siswa = Siswa::create($request->all());
        return response()->json(['message' => 'Siswa added successfully', 'data' => $siswa], 201);
    }
}

