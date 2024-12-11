<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $guru = Guru::all();
        return response()->json(
            [
                'success' => true,
                'data' => $guru,
                'message' => 'Data Guru Berhasil',
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
        $validate = $request->validate([
            'nama' => 'required',
            'nip' => 'required',
            'email' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'jenis_kelamin' => 'required',
        ], [
            'validated' => 'array',
            'validated.*' => 'required',
        ]);

        try {
            $guru = Guru::create($validate);
            return response()->json(
                [
                    'success' => true,
                    'data' => $guru,
                    'message' => 'Data Guru Berhasil',
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
    public function show(Guru $guru)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Guru $guru)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Guru $guru)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Guru $guru)
    {
        //
    }
}
