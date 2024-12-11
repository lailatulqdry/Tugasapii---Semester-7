<?php

namespace App\Http\Controllers;

use App\Models\recapKehadiran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class RecapKehadiranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $recapKehadiran = RecapKehadiran::all();
        return response()->json(
            [
                'success' => true,
                'data' => $recapKehadiran,
                'message' => 'Data Recap Kehadiran Berhasil di Tambahkan',
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
            'total_hadir' => 'required',
            'total_izin' => 'required',
            'total_sakit' => 'required',
            'total_alpha' => 'required',
        ], [
            'validated' => 'array',
            'validated.*' => 'required',
        ]);

        try {
            $recapKehadiran = RecapKehadiran::create($validated);
            return response()->json(
                [
                    'success' => true,
                    'data' => $recapKehadiran,
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
    public function show(recapKehadiran $recapKehadiran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(recapKehadiran $recapKehadiran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, recapKehadiran $recapKehadiran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(recapKehadiran $recapKehadiran)
    {
        //
    }
}
