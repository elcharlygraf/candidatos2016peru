<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class VotacionesController extends Controller
{
    public function index(){
        $candidates = 
        DB::table('votaciones')
            ->select(DB::raw('count(candidato_id) as cantidad'), 'candidatos.id as idcandidato','candidato_id', 'nombres', 'partido', 'logo')
            ->leftJoin('candidatos', 'candidatos.id', '=', 'votaciones.candidato_id')
            ->groupBy('candidato_id')
            ->get(); 

        $departamentos  = DB::table('departamentos')->get();
    	return view('candidates', compact('candidates','departamentos'));
    }

    public function store(Request $request){

		$user = DB::table('votaciones')->where('dni', $request['dni'])->get();

        if($user){

            //Ya existe
            $this->status = 1;
            
        } else { 
            //Registrado
            $this->status = 0;
            DB::table('votaciones')->insert(
                [
                    'dni'              => $request['dni'], 
                    'candidato_id'     => $request['candidato'],
                    'departamento_id'  => isset($request['departamento']) ? $request['departamento'] : '14',
                    'created_at'       => date('Y-m-d h:i:s'),
                ]
            );
            
        }

    	return response()->json(['voto' => $request['candidato'], 'status' => $this->status])->setCallback($request->input('callback'));
    }

    public function result(Request $request){
    	
    	$votaciones   = DB::table('votaciones')->select( DB::raw('count(*) candidato'), 'candidato_id' )->groupBy('candidato_id')->get();
    	$departamento = DB::table('votaciones')->select( DB::raw('count(*) departamentos'), 'departamento_id' )->groupBy('departamento_id')->get();

    	return response()->json(['voto' => $votaciones, 'departamento' => $departamento])->setCallback($request->input('callback'));
    }
}
