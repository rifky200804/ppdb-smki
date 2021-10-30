<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Petugas;
use App\User;
use Illuminate\Support\Str;

class PetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $table = Petugas::orderBy('username')->get();
        return view('petugas.index',compact('table'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('petugas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $user = new \App\User();
        $user->name = $request->nama;
        $user->role = 'petugas';
        $user->username = $request->username;
        $user->password = bcrypt(123);
        $user->remember_token = Str::random(60);
        $user->save();
            
        $value = [
            'nama_petugas'=>$request->nama,
            'jenis_kelamin'=>$request->jenkel,
            'username'=>$request->username,
            'user_id'=>$user->id
        ];
        
        Petugas::create($value);
        
        return redirect()->route('petugas.index');
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
        Petugas::where('username',$id)->delete();
        User::where('username',$id)->delete();
        return redirect()->route('petugas.index');
    }
}
