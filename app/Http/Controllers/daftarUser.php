<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class daftarUser extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
   {
        $users = DB::table('users')->get();
        return view('admin.tabel_daftar_user', ['data_user' => $users]);
   }

   public function edit($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $users = DB::table('users')->where('id',$id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('admin.edit_user',['data_user' => $users]);
    
    }

    // update data pegawai
    public function update(Request $request)
    {

        // update data pegawai
        DB::table('users')->where('id',$request->id)->update([
            'foto' => $request->foto,
            'name' => $request->name,
            'fakultas' => $request->fakultas,
            'prodi' => $request->prodi,
            'kode' => $request->kode,
            'status' => $request->status,
            'jabatan' => $request->jabatan,
            'alamat' => $request->alamat,
            'telepon' => $request->telepon,
            'email' => $request->email
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/user');
    }

    public function hapus($id)
    {
            // menghapus data pegawai berdasarkan id yang dipilih
            DB::table('users')->where('id',$id)->delete();
                
            // alihkan halaman ke halaman pegawai
            return redirect('/user');
    }

    public function tambah()
    {
    
        // memanggil view tambah
        return view('admin.tambah_user');
    
    }
    // method untuk insert data ke table pegawai
    public function store(Request $request)
    {
        // insert data ke table pegawai
        DB::table('users')->insert([
            'id' => $request->id,
            'ktm' => $request->ktm,
            'name' => $request->name,
            'fakultas' => $request->fakultas,
            'prodi' => $request->prodi,
            'kode' => $request->kode,
            'status' => $request->status,
            'jabatan' => $request->jabatan,
            'alamat' => $request->alamat,
            'telepon' => $request->telepon,
            'email' => $request->email,
            'password' => $request->password
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/user');
    
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
