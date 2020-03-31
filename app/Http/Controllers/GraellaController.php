<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\graella;
use App\canal;
use App\programa;
class GraellaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (session()->has('user')) {
            $canals = canal::all()->toArray();
        $programas = programa::all()->toArray();
        $graella = graella::all()->toArray();
	
        return view('tv', compact('canals','programas','graella'));    


        }else{
               return redirect()->route('login.index');
        }
        
        
    }
 
    public function mostrar(Request $request){
		$NomCanal =	$request->get('NomCanal');
        $Dia	=	$request->get('Dia');
        $canals = canal::all()->toArray();
        $programas = programa::all()->toArray();
        $graella = graella::all()->toArray();
		$consultes = DB::select('select * from graellas where NomCanal = ? and Dia = ?', [$NomCanal, $Dia]);
        return view('tv', compact('consultes','canals','programas','graella'));    
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
       
       // return $canals;
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
            'NomPrograma'    =>  'required',
            'Dia'    =>  'required',
            'Hora'    =>  'required'
        ]);
        $NewProgram = new graella([
            'NomCanal'    =>  $request->get('NomCanal'),
            'NomPrograma'    =>  $request->get('NomPrograma'),
            'Dia'    =>  $request->get('Dia'),
            'Hora'    =>  $request->get('Hora')
        ]);
        $NewProgram->save();
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
