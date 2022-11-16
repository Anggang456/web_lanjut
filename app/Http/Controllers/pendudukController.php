<?php

namespace App\Http\Controllers;
use App\Models\penduduk;
use Illuminate\Http\Request;

class pendudukController extends Controller
{
    public function index() {
        $penduduk=penduduk::all();
        return view('penduduk', compact('penduduk'));
    }
    public function create() {
        return view('create');
    }
    public function store(Request $request) {
        penduduk::create([
        'nik' => $request->nik,
        'nama' => $request->nama,
        'pekerjaan' => $request->pekerjaan,
        'saudara' => $request->saudara,
        'alamat' => $request->alamat,
        ]);
        return redirect()->route('penduduk.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }
    public function edit(penduduk $penduduk) {
        return view('edit', compact('penduduk'));
    }
    public function update(Request $request, penduduk $penduduk) {
        $penduduk->update([
        'nik' => $request->nik,
        'nama' => $request->nama,
        'pekerjaan' => $request->pekerjaan,
        'saudara' => $request->saudara,
        'alamat' => $request->alamat,
        ]);
        return redirect()->route('penduduk.index')->with(['success' => 'Data Berhasil Diubah!']);
    }
    public function destroy(Penduduk $penduduk) {
        $penduduk->delete();
        return redirect()->route('penduduk.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }

    
}
