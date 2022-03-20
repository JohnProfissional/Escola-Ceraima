<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\patrimonio;




class PatrimonioController extends Controller{
    

    public function create(){
        $Patrimonio = patrimonio::get();
        return view('patrimonio.create',compact('Patrimonio'));
    }

    public function edit($id){
        $Patrimonio = patrimonio::findorFail($id);
        return view('patrimonio.edit',['Patrimonio'=>$Patrimonio]);
    }

    public function update(Request $request){
        patrimonio::find($request->id)->update($request->except('_token'));
        return redirect('index/manutencao')->with('msg', 'alteração realdizado com sucesso');

    }


    public function index(){

        $Patrimonio = Patrimonio::all();
        return view('patrimonio.index',compact('Patrimonio'));
    }

    public function destroy($id){
        $Patrimonio=patrimonio::findOrFail($id);
        $Patrimonio->delete();
        return view('patrimonio.index');
    }

       

    public function store(Request $request){

            $patrimonio = new patrimonio();
            $patrimonio->nome=$request->nome;
            $patrimonio->tipo_patrimonio =$request->tipo_patrimonio;
            $patrimonio->quantidade_patrimonio=$request->quantidade_patrimonio;
            $patrimonio->localizacao=$request->localizacao;
            $patrimonio->save();
        
        
          return view('patrimonio.index')->withTitle('Laravel Magic method.');

    }
}
