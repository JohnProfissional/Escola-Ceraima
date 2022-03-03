
    
@section('conteudo')
@extends('layouts.main')
@extends('layouts.app')

@section('titulo','cadastro de reserva')

    @if($errors->any())
        
        <div class="alert alert-danger">
            
            <ul>
                @foreach($errors->all() as $error)

                    <li>{{$error}}</li>

                @endforeach    
            </ul>
                
        </div>        

    @endif

   
    <form action="{{route('reservas.store')}}" method="post">
        @csrf
       
               

                <div class="col">  
                <label>data final da reserva</label>
                <input type="date" name="fim_reserva"><br>
                        <label>Usuario</label>
                         <select class="form-control"  name="usuario_id">
                            @foreach($Usuario as $usuario) 
                                <option>selecione</option>
                                <option value="{{ $usuario->usuario_id}}"><br>
                                    {{ $usuario->nome }}
                                </option>
                            @endforeach                     
                        </select>    
                
                        <label>sala</label>
                        <select class="form-control"  name="sala_id">
                            @foreach($Sala as $sala)
                                <option>selecione</option>  
                                    <option value="{{ $sala->sala_id}}"><br>
                                        {{ $sala->nome }}<br>
                                    </option>
                            @endforeach                     
                        </select>

                         <label>patrimonio</label>
                         <select class="form-control"  name="usuario_id">
                            @foreach($Patrimonio as $patrimonio) 
                                <option>selecione</option>
                                <option value="{{ $patrimonio->patrimonio_id}}"><br>
                                    {{ $patrimonio->nome }}
                                </option>
                            @endforeach                     
                        </select>
                        
                         <label>eventos</label>
                            <select class="form-control"  name="eventos_id">
                                @foreach($Evento as $evento) 
                                    <option >selecione</option>
                                    <option value="{{$evento->eventos_id}}"><br>
                                        {{ $evento->nome }}
                                    </option>
                                @endforeach                
                            </select>                
         
        <input type="submit" class="btn btn-primary" value="cadastrar"><br>  
    </form>              
@endsection('conteudo')
