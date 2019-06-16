<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LeedRequest;
use App\Http\Requests\CadastroRequest;

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
            dd($request->all());
        } catch (\Exception $th) {
            return 'erro';
        }
    }

    //post de cadastro
    public function cadastro(Request $request){
        $dados = $request->all();
        dd($dados['name']);
    }
}
