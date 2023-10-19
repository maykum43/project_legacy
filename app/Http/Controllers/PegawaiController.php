<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pgw_Model;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pgws = Pgw_Model::paginate(20);

        return view('pgw.dt_pgw',compact('pgws'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pgw.create_pgw');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Pgw_Model::create([
            'nama' => $request->nama_pgw,
            'tlp' => $request->no_tlp,
            'jabatan' => $request->jabatan,
        ]);

        return redirect()->route('pgw')
            ->with('success', 'Color added successfully.');
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
        $data = Pgw_Model::where('id_pgw',$id)->first();
        return view('pgw.edit_pgw', compact('data'));;
    }
    public function update(Request $request, $id)
    {
        dd($request->all());
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
