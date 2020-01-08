<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trainer;

class TrainerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trainers = Trainer::all();
        return view('trainers.index',compact('trainers'));
        //return "hola desde el controllador resource";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('trainers.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData=$request->validate([
            'name'=>'required| max:10',
            'avatar'=>'required|image',
            'descripcion'=>'required'
        ]);
        if($request->hasFile('avatar')){
           $file =$request->file('avatar');
          $name =time().$request->file('avatar')->getClientOriginalName();
          $file ->move(public_path().'/images/',$name);
        }
        $name="gato";
        $trainer = new trainer();
        $trainer->name=$request->input('name');
        $trainer->avatar=$name;
        $trainer->descripcion=$request->input('descripcion');
        $trainer->slug=$request->input('name');
        $trainer->save();
        //return "saved";
        //return $request->all();
        return $request;
        //return $request->input('name');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Trainer $trainer)
    {
        //$trainer = Trainer::where('slug','=',$slug)->firstOrFail();
        //$trainer=trainer::find($id);
        return view('trainers.show',compact('trainer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Trainer $trainer)
    {
     return view('trainers.edit',compact('trainer'));
     //return $trainer;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trainer $trainer)
    {
        $trainer ->fill($request->except('avatar'));
        if($request->hasFile('avatar')){
           $file =$request->file('avatar');
          $name =time().$request->file('avatar')->getClientOriginalName();
          $traine->avatar=name;
          $file ->move(public_path().'/images/',$name);
        }
        $trainer->save();
        return "actualizado";
        //return $request;
        //return $trainer;
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
