<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class diarioController extends Controller {

    public function metodoInicio(){
        return view('welcome');

    }

    public function metodoRecuerdos(){
        return view('Recuerdos');

    }

    public function guardarRecuerdo(Request $req){
        //return $req->all();

        echo "<p>";
        echo $req->ip();
        echo " - ";
        echo $req->path();
        echo " - ";
        echo $req->method();
        echo " - ";
        echo $req->input("txtTitulo");
        echo " - ";
        echo $req->url();
        echo "</p>";
    }
}