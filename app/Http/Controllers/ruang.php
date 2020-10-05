<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ruang extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
   {
        $ruang = DB::table('ruang')->get();
        return view('admin.tabel_ruang', ['data_ruang' => $ruang]);
   }

   public function edit($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $ruang = DB::table('ruang')->where('id',$id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('admin.edit_ruang',['data_ruang' => $ruang]);
    
    }

    // update data pegawai
    public function update(Request $request)
    {

        // update data pegawai
        DB::table('ruang')->where('id',$request->id)->update([
            'nama_ruang' => $request->nama_ruang,
            'alamat_ruang' => $request->alamat_ruang,
            'deskripsi' => $request->deskripsi,
            'kuota' => $request->kuota
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/ruang');
    }

    public function hapus($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('ruang')->where('id',$id)->delete();
            
        // alihkan halaman ke halaman pegawai
        return redirect('/ruang');
    }

    // method untuk menampilkan view form tambah pegawai
    public function tambah()
    {
    
        // memanggil view tambah
        return view('admin.tambah_ruang');
    
    }
    // method untuk insert data ke table pegawai
    public function store(Request $request)
    {
        // insert data ke table pegawai
        DB::table('ruang')->insert([
            'id' => $request->id,
            'nama_ruang' => $request->nama_ruang,
            'alamat_ruang' => $request->alamat_ruang,
            'deskripsi' => $request->deskripsi,
            'kuota' => $request->kuota
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/ruang');
    
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}