<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lead;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('web');
    }

    public function index(){
        if(auth()->user() == null){
            return redirect()->route('login');
        }

        $dados = Lead::all();

        $leeds = [];
        foreach ($dados as $leed) {
            $leeds[] = [
                $leed->name,
                $leed->empresa,
                $leed->email,
                $leed->celular
            ];
        }
        return view('home', ['leeds'=> $leeds]);
    }
}
