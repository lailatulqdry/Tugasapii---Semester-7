<?php

namespace App\Http\Controllers;

use App\Models\mataPelajaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class MataPelajaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mataPelajaran = mataPelajaran::all();
        return response()->json(
            [
                'success' => true,
                'data' => $mataPelajaran,
                'message' => 'Data Mata Pelajaran Berhasil di Tambahkan',
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
            'nama_matapelajaran' => 'required',
        ], [
            'validated' => 'array',
            'validated.*' => 'required',
        ]);

        try {
            $mataPelajaran = MataPelajaran::create($validated);
            return response()->json(
                [
                    'success' => true,
                    'data' => $mataPelajaran,
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
    public function show(mataPelajaran $mataPelajaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(mataPelajaran $mataPelajaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, mataPelajaran $mataPelajaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(mataPelajaran $mataPelajaran)
    {
        //
    }
}
