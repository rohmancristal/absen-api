<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index()
    {
        return Laporan::all();
    }

    public function store(Request $request)
    {
        $laporan = Laporan::create($request->all());
        return response()->json(['message' => 'Laporan created successfully', 'data' => $laporan], 201);
    }
}
