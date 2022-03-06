

@section('conteudo')
@extends('layouts.app')
@extends('layouts.main')
    @if($errors->any())
        <div class="alert alert-danger"> 
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach    
            </ul>   
        </div>        
    @endif
         @csrf
             <form action="{{route('evento.store')}}" method="post">
                <div class="row g-3">
                    <div class="row"><h4>cadastro de eventos</h4></div>
                    <div class="col">
                        <label for="nome">nome</label>
                        <input type="text" class="form-control" name="nome" >
                         <label>data de inicio</label>
                         <input type="date" class="form-control" name="data_inicio">
                        <label>data de fim</label>
                         <input type="date" class="form-control" name="data_fim">
                          
                 
                        <label>hora de inicio</label>
                         <input type="time" class="form-control" name="hora_inicio">
                          <label>hora de fim</label>
                         <input type="time" class="form-control" name="hora_terminio"><br> 
                         <input type="submit" class="btn btn-primary" value="cadastrar">      
                </div>            
            </form>               
        </div>            
@endsection('conteudo')

