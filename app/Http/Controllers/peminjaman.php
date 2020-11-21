<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class peminjaman extends Controller
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
       $peminjaman = DB::table('peminjaman')->get();
       return view('admin.tabel_peminjaman', ['data_peminjaman' => $peminjaman]);
   }

   // method untuk edit data pegawai
    public function edit($id)
    {
        // mengambil data peminjaman berdasarkan id yang dipilih
        $peminjaman = DB::table('peminjaman')->where('id',$id)->get();
        // passing data peminjaman yang didapat ke view admin.edit_peminjaman
        return view('admin.edit_peminjaman',['data_peminjaman' => $peminjaman]);
    
    }

    // update data peminjaman
    public function update(Request $request)
    {
        // update data peminjaman
        DB::table('peminjaman')->where('id',$request->id)->update([
            // 'acara' => $request->acara,
            // 'ruang' => $request->ruang,
            // 'barang' => $request->barang,
            // 'jumlah_pinjam' => $request->jumlah_pinjam,
            // 'tanggal' => $request->tanggal,
            // 'waktu_mulai' => $request->waktu_mulai,
            // 'waktu_selesai' => $request->waktu_selesai,
            'aksi' => $request->aksi
        ]);
        // alihkan halaman ke halaman tabel peminjaman
        return redirect('/p')->with('status', 'Berhasil disimpan!');
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
    public function store(Request $request)
    {
        //
    }

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
