<?php

namespace App\Http\Controllers;

use App\mahasiswa;
use Illuminate\Http\Request;

class mahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswa = mahasiswa::all();
        return view('pages/halamanMahasiswa', ['mahasiswa' => $mahasiswa]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages/halamanCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'jurusan' => 'required'
        ]);

        mahasiswa::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'jurusan' => $request->jurusan
        ]);

        return redirect('/mahasiswa')->with('status', 'Data Mahasiswa Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show(mahasiswa $mahasiswa)
    {
        $mhs = $mahasiswa;
        return view('pages/halamanDetail', ['mhs' => $mhs]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit(mahasiswa $mahasiswa)
    {
        $mhs = $mahasiswa;
        return view('pages/halamanEdit', ['mhs' => $mhs]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, mahasiswa $mahasiswa)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'jurusan' => 'required'
        ]);

        mahasiswa::where('id', $mahasiswa->id)
                ->update([
                    'nama' => $request->nama,
                    'email' => $request->email,
                    'jurusan' => $request->jurusan
                ]);
        return redirect('/mahasiswa')->with('status', 'Data Mahasiswa Berhasil Diubah');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(mahasiswa $mahasiswa)
    {
        mahasiswa::destroy($mahasiswa->id);
        return redirect('/mahasiswa')->with('status', 'Data Mahasiswa Berhasil Dihapus');
    }
}
