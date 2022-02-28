


@section('conteudo')
@extends('layouts.main')
@extends('layouts.app')

@section('titulo','cadastro de patrimonio')


    @if($errors->any())
        
        <div class="alert alert-danger">
            
            <ul>
                @foreach($errors->all() as $error)

                    <li>{{$error}}</li>

                @endforeach    
            </ul>
                
        </div>        

    @endif

    <form action="{{route('patrimonio.store')}}" method="post">
        
        @csrf
        <div class="row g-3">
                <div class="col">
                   
                    <label for="nome">nome</label>
                    <input type="text" class="form-control" name="nome" id="nome">

                    <label>tipo_patrimonio</label>
                    <input type="text" class="form-control" name="tipo_patrimonio" id="nome">

                    <label>quantidade de patrimonio</label>
                    <input type="text" class="form-control" name="quantidade_patrimonio" id="nome"><br>
                    <label>localizacao</label> 
                     <input type="text" class="form-control" name="localizacao" id="nome"><br>
                        
                    <input type="submit" class="btn btn-primary" value="cadastrar">
                        
                </div>
    
    </form>
        

                
@endsection('conteudo')

@section('footer')

@endsection('footer')