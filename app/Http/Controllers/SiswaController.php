<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datasiswa = Siswa::get();
        return view('index', compact('datasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form_tambah'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Siswa::create([
            'nama' => $request -> nama,
            'nis' => $request -> nis,
            'tgl_lahir' => $request -> tgl_lahir,
        ]);

        return redirect() ->route('siswa.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Menampil data siswa tertentu, sesuai yg kita pilik/klik show
        $siswa = Siswa::where('id', $id) -> first();
        return view('profil_siswa', ['siswa' => $siswa] );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Mengedit siswa tertentu yang kita pilih/klik edit
        $datasiswa = Siswa::find($id);
        return view('form_ubah', ['siswa' => $datasiswa] );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Mengupdate data siswa tertentu yang kita pilih/klik
        $siswa = Siswa::find($id);
        $siswa -> nama = $request -> nama;
        $siswa -> nis = $request -> nis;
        $siswa -> tgl_lahir = $request -> tgl_lahir;
        $siswa -> save();

        return redirect() -> route('siswa.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Menghapus data siswa tertentu, sesuai yg kita pilik/klik show
        $siswa = Siswa::find($id);
        $siswa -> delete();

        return redirect() -> route('siswa.index');
    }
}
