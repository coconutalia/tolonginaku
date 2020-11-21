<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class barang extends Controller
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
        $barang = DB::table('barang')->get();
        return view('admin.tabel_barang', ['data_barang' => $barang]);
   }
   public function edit($id)
    {
        // mengambil data barang berdasarkan id yang dipilih
        $barang = DB::table('barang')->where('id',$id)->get();
        // passing data barang yang didapat ke view eadmin.edit_barang
        return view('admin.edit_barang',['data_barang' => $barang]);
    
    }

    // update data barang
    public function update(Request $request)
    {

        // update data barang
        DB::table('barang')->where('id',$request->id)->update([
            'nama_barang' => $request->nama_barang,
            'total_barang' => $request->total_barang,
            'barang_tersedia' => $request->barang_tersedia,
            'jumlah_pinjam' => $request->jumlah_pinjam,
            'jumlah_request' => $request->jumlah_request,
            'jenis' => $request->jenis
        ]);
        // alihkan halaman ke halaman tabel barang
    return redirect('/barang')->with('status', 'Berhasil disimpan!');
    }

    public function hapus($id)
    {
            // menghapus data barang berdasarkan id yang dipilih
            DB::table('barang')->where('id',$id)->delete();
                
            // alihkan halaman ke halaman tabel barang
            return redirect('/barang')->with('status', 'Berhasil dihapus!');
    }

    public function tambah()
    {
    
        // memanggil view tambah
        return view('admin.tambah_barang');
    
    }
    // method untuk insert data ke table barang
    public function store(Request $request)
    {
        // insert data ke table barang
        DB::table('barang')->insert([
            'id' => $request->id,
            'nama_barang' => $request->nama_barang,
            'total_barang' => $request->total_barang,
            'barang_tersedia' => $request->barang_tersedia,
            'jumlah_pinjam' => $request->jumlah_pinjam,
            'jumlah_request' => $request->jumlah_request,
            'jenis' => $request->jenis
        ]);
        // alihkan halaman ke halaman tabel barang
        return redirect('/barang')->with('status', 'Berhasil ditambahkan!');
    
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
