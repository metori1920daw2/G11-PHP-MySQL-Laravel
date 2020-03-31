<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\canal;

class CanalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $canals = canal::all();
        
        if (session()->has('user')) {
		  return view('mostraCanal')->with('canals',$canals);
        }else{
            return redirect()->route('login.index');
        }
        
    }
    
  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'NomCanal'    =>  'required',
            'logo'    =>  'required'
        ]);
        $NewChannel = new canal([
            'NomCanal'    =>  $request->get('NomCanal'),
            'logo'    =>  $request->get('logo'),
        ]);
        $NewChannel->save();
        return redirect('tv')->with('success', 'correctament afegit');

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
        $canals = canal::find($id);
       // $canals =  DB::table('canals')->where(['IdCanal'=>$id])->get();
        return view('editcanal', compact('canals','id'));
        
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
        $this->validate($request, [
            'NomCanal'    =>  'required',
            'logo'    =>  'required'
        ]);
        $canals = canal::find($id);
        $canals->NomCanal = $request->get('NomCanal');
        $canals->logo = $request->get('logo');
        $canals->save();
        return redirect()->route('canals.index')->with('success', 'Editat correctament');
        //return    $request->get('logo');
        //return redirect('canals')->with('success', 'correctament afegit');
        ///return redirect('canals')->with('success', 'correctament afegit');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
        $canals = canal::find($id);
        $canals->delete();
        return redirect()->route('canals')->with('success', 'Borrat correctament');
    }
}
