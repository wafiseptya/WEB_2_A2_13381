<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\wafi_13381_model;

class wafi_13381_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $data = wafi_13381_model::all();
        return view('read',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		$data = new wafi_13381_model();
		$data->name = $request->nama;
		$data->email = $request->email;
		$data->password = bcrypt($request->password);
		$data->macAddress = $request->macAddress;
		$data->save();
		return redirect()->route('member.index')->with('alert-success','Berhasil Menambahkan Data!');
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
        $data = wafi_13381_model::where('id_member',$id)->get();
        return view('edit',compact('data'));
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
        $data = wafi_13381_model::where('id_member',$id)->first();
		$data->name = $request->nama;
		$data->email = $request->email;
		$data->password = bcrypt($request->password);
		$data->macAddress = $request->macAddress;
        $data->save();
        return redirect()->route('member.index')->with('alert-success','Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = wafi_13381_model::where('id_member',$id)->first();
        $data->delete();
        return redirect()->route('member.index')->with('alert-success','Data berhasi dihapus!');
    }
}
