<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Siswa::all();
        return view('siswa.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Siswa::create(
            [
                'id_siswa' => $request->id_siswa,
                'id_kelas' => $request->id_kelas,
                'id_wali' => $request->id_wali,
                'nama_siswa' => $request->nama_siswa,
                'tanggal_lahir' => $request->tanggal_lahir
            ]
        );

        return redirect('siswa')->with('success','Data berhasil ditambahkan');
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
        $row = Siswa::findOrFail($id);
        return view('siswa.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = Siswa::findOrFail($id);
        $row->update(
            [
                'id_siswa' => $request->id_siswa,
                'id_kelas' => $request->id_kelas,
                'id_wali' => $request->id_wali,
                'nama_siswa' => $request->nama_siswa,
                'tanggal_lahir' => $request->tanggal_lahir
            ]
        );
        return redirect('siswa')->with('success','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row::findOrFail($id);
        $row->delete();

        return redirect('siswa')->with('siswa', 'Data berhasil dihapus');
    }
}
