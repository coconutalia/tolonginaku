<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class ruang extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
   {
        if(!Auth::user()){
            return redirect('/login');
        }
        $ruang = DB::table('ruang')->get();
        return view('admin.tabel_ruang', ['data_ruang' => $ruang]);
   }

   public function edit($id)
    {
        // mengambil data ruang berdasarkan id yang dipilih
        $ruang = DB::table('ruang')->where('id',$id)->get();
        // passing data ruang yang didapat ke view admin.edit_ruang
        return view('admin.edit_ruang',['data_ruang' => $ruang]);
    
    }

    // update data ruang
    public function update(Request $request)
    {

        // update data ruang
        DB::table('ruang')->where('id',$request->id)->update([
            'nama_ruang' => $request->nama_ruang,
            'alamat_ruang' => $request->alamat_ruang,
            'deskripsi' => $request->deskripsi,
            'kuota' => $request->kuota
        ]);
        // alihkan halaman ke halaman ruang
        return redirect('/ruang')->with('status', 'Berhasil disimpan!');
    }

    public function hapus($id)
    {
        // menghapus data ruang berdasarkan id yang dipilih
        DB::table('ruang')->where('id',$id)->delete();
        // \Session::flash('notifikasi', 'berhasil dihapus.');
        // alihkan halaman ke halaman ruang
        return redirect('/ruang')->with('status', 'Berhasil dihapus!');
    }

    // method untuk menampilkan view form tambah ruang
    public function tambah()
    {
    
        // memanggil view tambah
        return view('admin.tambah_ruang');
    
    }
    // method untuk insert data ke table ruang
    public function store(Request $request)
    {
        // insert data ke table ruang
        DB::table('ruang')->insert([
            'id' => $request->id,
            'nama_ruang' => $request->nama_ruang,
            'alamat_ruang' => $request->alamat_ruang,
            'deskripsi' => $request->deskripsi,
            'kuota' => $request->kuota
        ]);
        // alihkan halaman ke halaman tabel ruang
        return redirect('/ruang')->with('status', 'Berhasil ditambahkan!');
    
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
