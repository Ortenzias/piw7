<?php

namespace App\Http\Controllers;

use App\Models\Documento;
use Illuminate\Http\Request;

class UisController extends Controller
{
    public function index(){
        return view('uis.index');
        //return "Aqui es donde nos mande en la pagina principal, tal vez sin antes comprobar el inicio de sesion";
    }

    public function create(){
        return view('uis.create');
    }

    public function show($id){

        $usuario = Documento::find($id);

        //return $usuario;

        return view('uis.show', compact('usuario'));
    }

    public function showMore(){

        $documentos = Documento::paginate();

        return view('uis.showMore', compact('documentos'));
    }

    public function remove(){
        return view('uis.remove');
    }

    public function search(){
        return view('uis.search');
    }

    public function edit(){
        return view('uis.edit');
    }

    public function print(){
        return view('uis.print');
    }

    public function color(){
        return view('color.color');
    }

    
}
