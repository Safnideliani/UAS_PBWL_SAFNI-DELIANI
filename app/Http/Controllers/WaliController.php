<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Wali;
use Illuminate\Http\Request;

class WaliController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Wali::all();
        return view('wali.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
     public function create()
    {
        return view('wali.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Wali::create(
            [
                'id_wali' => $request->id_wali,
                'id_kelas' => $request->id_kelas,
                'nama_wali' => $request->nama_wali,
                'tanggal_lahir' => $request->tanggal_lahir
            ]
        );

        return redirect('wali')->with('success','Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $row = Wali::findOrFail($id);
        return view('wali.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = Wali::findOrFail($id);
        $row->update(
            [
                'id_wali' => $request->id_wali,
                'id_kelas' => $request->id_kelas,
                'nama_wali' => $request->nama_wali,
                'tanggal_lahir' => $request->tanggal_lahir
            ]
        );
        return redirect('wali')->with('success','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Wali::findOrFail($id);
        $row->delete();

        return redirect('wali')->with('success', 'Data berhasil dihapus');
    }
}
