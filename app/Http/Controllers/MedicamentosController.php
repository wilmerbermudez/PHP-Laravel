<?php

namespace MediCasa\Http\Controllers;

use MediCasa\Medicamento;
use Illuminate\Http\Request;

class MedicamentosController extends Controller
{
    public function __construct()
    {
      $this->middleware('admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('medicamentos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('avatar')) {
          $file=$request->file('avatar');
          $name=time().$file->getClientOriginalName();
          $file->move(public_path().'/images/', $name);
        }
        $medicamentos=new Medicamento();
        $medicamentos->medicamento=$request->input('medicamento');
        $medicamentos->descripcion=$request->input('descripcion');
        $medicamentos->laboratorio=$request->input('laboratorio');
        $medicamentos->precio=$request->input('precio');
        $medicamentos->unidades=$request->input('unidades');
        $medicamentos->formula=$request->input('formula');
        $medicamentos->avatar=$name;
        $medicamentos->save();
        return redirect('/farmacia');
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
