<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Col_Model;

class ControllerWarna extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cols = Col_Model::paginate(20);

        return view('col.data_col',compact('cols'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('col.create_col');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'cd_col' => 'required|max:255',
            'nama_col' => 'required|max:255',
            'rgb' => 'required|unique:colors|max:7',
        ]);
    
        $color = new Col_Model;
        $color->cd_col = $request->cd_col;
        $color->nama_col = $request->nama_col;
        $color->rgb = $request->rgb;
        $color->save();
    
        return redirect()->route('cols_dt')
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
