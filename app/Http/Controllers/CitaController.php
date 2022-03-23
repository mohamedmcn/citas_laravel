<?php

namespace App\Http\Controllers;

use App\Models\cita;
use http\Url;
use Illuminate\Http\Request;


class CitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $citas_all= cita::all();

        return view('citas',compact('citas_all'));
    }

    public function usr_citas(){
        $citas_all= cita::all();

        return view('mis_citas',compact('citas_all'));
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
        cita::create($request->all());

        return $this->index();
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
    public function update(Request $request)
    {

        $cita=cita::find($request->get('id'));
        //$cita->autor=$request->autor;
        //$cita->cita=$request->cita;
        $cita->update($request->all());
        $citas_all= cita::all();

        //return view('mis_citas',compact('citas_all'));
       return redirect()->route('mis_citas',compact('citas_all'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {

        $cita=cita::find($request->get('id'));

        $cita->delete();
        $citas_all= cita::all();

        return redirect()->route('mis_citas',compact('citas_all'));
    }
}
