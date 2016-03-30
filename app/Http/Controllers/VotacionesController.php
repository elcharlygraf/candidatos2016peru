<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class VotacionesController extends Controller
{
    public function index(){
        $candidates     = DB::table('candidatos')->get();
        $departamentos  = DB::table('departamentos')->get();
    	return view('candidates', compact('candidates','departamentos'));
    }

    public function store(Request $request){
        dd($request->all());

		$user = DB::table('votaciones')->where('dni', $request['dni'])->get();
    	
    	if(empty($user)){
    		//REGISTRAR EL VOTO
    		DB::table('votaciones')->insert(
			    [
			    	'dni' 			=> $request['dni'], 
			    	'candidato_id'  => $request['candidato'],
			    	'distrito_id'	=> isset($request['distrito']) ? $request['distrito'] : '0',
			    	'created_at'	=> date('Y-m-d h:i:s'),
			    ]
			);
			$this->status = 0;	
    	} else { $this->status = 1;	}

    	return response()->json(['voto' => $request['candidato'], 'status' => $this->status])->setCallback($request->input('callback'));
    }

    public function result(Request $request){
    	
    	$votaciones   = DB::table('votaciones')->select( DB::raw('count(*) candidato'), 'candidato_id' )->groupBy('candidato_id')->get();
    	$departamento = DB::table('votaciones')->select( DB::raw('count(*) distrito'), 'departamento_id' )->groupBy('departamento_id')->get();

    	return response()->json(['voto' => $votaciones, 'departamento' => $departamento])->setCallback($request->input('callback'));
    }
}
