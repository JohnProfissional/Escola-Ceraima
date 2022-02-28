@extends('layouts.main')
@extends('layouts.app')
@section('conteudo')

@section('titulo','Cadastro de Sala')

    @if($errors->any())
        
        <div class="alert alert-danger">
            
            <ul>
                @foreach($errors->all() as $error)

                    <li>{{$error}}</li>

                @endforeach    
            </ul>
                
        </div>        

    @endif

    <form action="{{route('sala.store')}}" method="post">
        
        @csrf
        <div class="row g-3">
                <div class="col">
                    <h4>cadastro de sala</h4>
                    <label for="nome">nome</label>
                    <input type="text" class="form-control" name="nome" id="nome"><br>  
                    <input type="submit" class="btn btn-primary" value="cadastrar">     
                </div>
        </div>
    </form>
        

                
@endsection('conteudo')

@section('footer')

@endsection('footer')