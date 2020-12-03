<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;
use Auth;

class daftarUser extends Controller
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
        $users = DB::table('users')->get();
        return view('admin.tabel_daftar_user', ['data_user' => $users]);
   }

   public function edit($id)
    {
        // mengambil data user berdasarkan id yang dipilih
        $users = DB::table('users')->where('id',$id)->get();
        // passing data user yang didapat ke view edit.blade.php
        return view('admin.edit_user',['data_user' => $users]);
    
    }
    public function update(Request $request)
    {
        // update data user
        DB::table('users')->where('id',$request->id)->update([
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
        // alihkan halaman ke halaman tabel daftar user
        return redirect('/user')->with('status', 'Berhasil disimpan!');
    }

    public function hapus($id)
    {
            // menghapus data user berdasarkan id yang dipilih
            DB::table('users')->where('id',$id)->delete();
                
            // alihkan halaman ke halaman tabel daftar user
            return redirect('/user')->with('status', 'Berhasil dihapus!');
    }

    public function tambah()
    {
    
        // memanggil view tambah
        return view('admin.tambah_user');
    
    }

    // method untuk insert data ke table daftar user
    public function store(Request $request)
    {   
        $rules = array(
        'email'=>'required|max:100|email',
        'password' => 'required',
        'ulangipassword' => 'required|same:password',
        'ktm' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',            
        // required and has to match the password field
        );
        $messages = [
            'same' => 'Password tidak sesuai',
            'email' => 'Email tidak valid',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
             if ($validator->fails()) {
            // dd("error");
                    // get the error messages from the validator
                    $messages = $validator->messages();
            
                    // redirect our user back to the form with the errors from the validator
                    return redirect('/user/tambah')
                        ->withErrors($validator)
                        ->withInput();
            
            }
        
        $imageName = time().'.'.request()->ktm->getClientOriginalExtension();
        request()->ktm->move(public_path('image'), $imageName);

        // insert data ke table daftar user
        DB::table('users')->insert([
            'id' => $request->id,
            'ktm' => $imageName,
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
        // alihkan halaman ke halaman tabel daftar user
        return redirect('/user')->with('status', 'Berhasil ditambahkan!');
    
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
