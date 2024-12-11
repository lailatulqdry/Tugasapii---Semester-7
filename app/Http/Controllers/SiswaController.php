<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siswa = Siswa::all();
        return response()->json(
            [
                'success' => true,
                'data' => $siswa,
                'message' => 'Data Siswa Berhasil di Tambahkan',
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
            'nama' => 'required',
            'nis' => 'required',
            'jurusan' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'jenis_kelamin' => 'required',
        ], [
            'validated' => 'array',
            'validated.*' => 'required',
        ]);

        try {
            $siswa = Siswa::create($validated);
            return response()->json(
                [
                    'success' => true,
                    'data' => $siswa,
                    'message' => 'Data Recap Kehadiran Berhasil di Tambahkan',
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
    public function show(Siswa $siswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Siswa $siswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Siswa $siswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Siswa $siswa)
    {
        //
    }
}
