<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LeedRequest;
use App\Http\Requests\CadastroRequest;
use App\Lead;

class HotSiteController extends Controller
{
    //Pagina inicial
    public function index(){
        try {
            return view('page-home');
        } catch (\Exception $e) {
            return 'erro';
        }
    }

    //Pagina sobre
    public function sobre(){
        try {
            return view('page-sobre');
        } catch (\Exception $e) {
            return 'erro';
        }
    }

    //pagina de erro
    public function erro(){
        return 'erro';
    }

    //cadastro de leed
    public function leed(LeedRequest $request){
        try {
            //
            //Cadastra leed
            $leed = Lead::create([
                'email' => request('email'),
                'name' =>  request('name'),
                'empresa' => request('empresa'),
                'celular' => request('celular')
            ]);
            //dd($leed);
            if(isset($leed->id) and !empty($leed->id)){
                return ['status'=>'true'];
            }else{
                return ['status'=>'false'];
            }

        } catch (\Exception $th) {
            return ['status'=>'false'];
        }
    }

    //post de cadastro
    public function cadastro(Request $request){
        $dados = $request->all();
        dd($dados['name']);
    }
}
