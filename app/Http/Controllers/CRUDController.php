<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Crud;

class CRUDController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cruds = Crud::all()->toArray();
        
        return view('crud.index', compact('cruds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crud.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $crud = new Crud([
          'nama' => $request->get('nama'),
          'asal' => $request->get('asal'),
          'tujuan' => $request->get('tujuan'),
          'waktu' => $request->get('waktu'),
          'jumlahpenumpang' => $request->get('jumlahpenumpang'),
        ]);

        $crud->save();
        return redirect('/crud');
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
        $crud = Crud::find($id);
        
        return view('crud.edit', compact('crud','id'));
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
         $crud = Crud::find($id);
        $crud->nama = $request->get('nama');
        $crud->asal = $request->get('asal');
        $crud->tujuan = $request->get('tujuan');
        $crud->waktu = $request->get('waktu');
        $crud->jumlahpenumpang = $request->get('jumlahpenumpang');
        $crud->save();
        return redirect('/crud');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $crud = Crud::find($id);
      $crud->delete();

      return redirect('/crud');
    }
}