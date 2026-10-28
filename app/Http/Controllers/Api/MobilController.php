<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Mobil;
use App\Http\Resources\MobilResource;
use Illuminate\Http\Request;

class MobilController extends Controller
{
    // 1. Menampilkan semua data mobil
    public function index()
    {
        $mobil = Mobil::all();

        return response()->json([
            'message' => 'Daftar mobil berhasil diambil',
            'data' => MobilResource::collection($mobil)
        ], 200);
    }

    // 2. Menambahkan data mobil
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'brand' => 'required|string|max:100',
            'harga' => 'required|integer|min:0',
            'tahun' => 'required|integer|min:1900|max:2100',
            'transmisi' => 'required|in:Manual,Matic,CVT',
            'bahan_bakar' => 'required|in:Bensin,Diesel,Hybrid,Listrik',
            'status' => 'sometimes|in:tersedia,sold',
            'foto' => 'nullable|url|max:255',
        ]);

        $mobil = Mobil::create($validated);

        return response()->json([
            'message' => 'Data mobil berhasil ditambahkan',
            'data' => new MobilResource($mobil)
        ], 201);
    }

    // 3. Menampilkan detail satu mobil
    public function show($id)
    {
        $mobil = Mobil::find($id);

        if (!$mobil) {
            return response()->json([
                'message' => 'Data mobil tidak ditemukan'
            ], 404);
        }

        return response()->json([
            'message' => 'Detail mobil berhasil diambil',
            'data' => new MobilResource($mobil)
        ], 200);
    }

    // 4. Memperbarui data mobil
    public function update(Request $request, $id)
    {
        $mobil = Mobil::find($id);

        if (!$mobil) {
            return response()->json([
                'message' => 'Data mobil tidak ditemukan'
            ], 404);
        }

        $validated = $request->validate([
            'nama' => 'sometimes|required|string|max:255',
            'brand' => 'sometimes|required|string|max:100',
            'harga' => 'sometimes|required|integer|min:0',
            'tahun' => 'sometimes|required|integer|min:1900|max:2100',
            'transmisi' => 'sometimes|required|in:Manual,Matic,CVT',
            'bahan_bakar' => 'sometimes|required|in:Bensin,Diesel,Hybrid,Listrik',
            'status' => 'sometimes|required|in:tersedia,sold',
            'foto' => 'sometimes|nullable|url|max:255',
        ]);

        $mobil->update($validated);

        return response()->json([
            'message' => 'Data mobil berhasil diperbarui',
            'data' => new MobilResource($mobil)
        ], 200);
    }

    // 5. Menghapus data mobil
    public function destroy($id)
    {
        $mobil = Mobil::find($id);

        if (!$mobil) {
            return response()->json([
                'message' => 'Data mobil tidak ditemukan'
            ], 404);
        }

        $mobil->delete();

        return response()->json([
            'message' => 'Data mobil berhasil dihapus',
            'data' => null
        ], 200);
    }
}
