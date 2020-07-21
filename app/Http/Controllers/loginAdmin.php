<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Auth\SessionGuard;
use Validator;
use Auth;
use App\Admin;

class loginAdmin extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
   {
       return view('admin/login');
   }

   function checklogin(Request $request)
   {
        $this->validate($request, [
            'NAK'       =>  'required|nak',
            'password'  =>  'required|alphaNum|min:3'
        ]);

        $admin_data = array(
            'NAK'       =>  $request->get('nak'),
            'password'  =>  $request->get('password')
        );

        if(Auth::attempt($admin_data))
        {
            return redirect('/dashboard');
        }
        else
        {
            return back()->with('error', 'NAK atau Password Salah');
        }
        
   }

//    function berhasillogin()
//    {
//        return view('admin/dashboardadmin');
//    }

   function logout()
   {
       Auth::logout();
       return redirect('login');
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
    public function edit($id)
    {
        //
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
        //
    }

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
