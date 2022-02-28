
@section('conteudo')
@extends('layouts.main')
@extends('layouts.app')

    @section('titulo','cadastro de manutenção')
    @if($errors->any())
        
        <div class="alert alert-danger">
            
            <ul>
                @foreach($errors->all() as $error)

                    <li>{{$error}}</li>

                @endforeach    
            </ul>
                
        </div>        

    @endif

    <form action="{{route('manutencao.store')}}" method="post">
        
        @csrf
        <div class="row g-3">
            @section('titulo','cadastro de manutenção')
                <div class="col">  
                    <label for="data_manutencao">data da manutencao</label>
                    <input type="date" class="form-control" name="data_manutencao" id="data_manutencao">

                    <label>patrimonio</label>
                    <select name="cliente_id" id="cliente_id" class="form-control">
                        @foreach($Patrimonio as $patrimonio)
                            <option value="{{old('$patrimonio->patrimonio_id)}}"> 

                                {{$patrimonio->nome}} 

                            </option>
                        @endforeach
                    </select>
                        
                    <input type="submit" class="btn btn-primary" value="cadastrar">       
                </div>         
        </div>
    </form>
        

   @endsection('titulo')             
@endsection('conteudo')


