<?php
namespace App\Http\Controllers;

    public function metodoRecuerdos(){
        return view('Recuerdos');

    }

    public function guardarRecuerdo(Request $req){
        return 'Se esta procesando tu recuerdo...'
    }