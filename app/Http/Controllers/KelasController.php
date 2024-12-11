<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kelas = Kelas::all();
        return response()->json(
            [
                'success' => true,
                'data' => $kelas,
                'message' => 'Data Kelas Berhasil di Tambahkan',
            ], 200
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'kelas' => 'required',
        ], [
            'validated' => 'array',
            'validated.*' => 'required',
        ]);

        try {
            $kelas = Kelas::create($validated);
            return response()->json(
                [
                    'success' => true,
                    'data' => $kelas,
                    'message' => 'Data Kelas Berhasil di Tambahkan',
                ], 200
            );
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return response()->json(
                [
                    'success' => false,
                    'message' => 'Data Gagal Ditambahkan',
                ], 500
            );
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Kelas $kelas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kelas $kelas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kelas $kelas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kelas $kelas)
    {
        //
    }
}
