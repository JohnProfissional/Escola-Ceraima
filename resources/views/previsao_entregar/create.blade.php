
@section('conteudo')
@extends('layouts.app')
@extends('layouts.main')

    @section('titulo','cadastro de previsão de entregar de equipamentos')

    @if($errors->any())
        
        <div class="alert alert-danger">
            
            <ul>
                @foreach($errors->all() as $error)

                    <li>{{$error}}</li>

                @endforeach    
            </ul>
                
        </div>        

    @endif

    <form action="{{route('previsaoentregar.store')}}" method="post">
        
        @csrf
        <div class="row g-3">
            <h4>cadastro de previsao de entregar</h4><br>
                <div class="col">
                   
                    <label for="data da previsao de entrega">data da previsao de entrega</label>
                    <input type="date" class="form-control" name="data_previsao_entrega" id="nome">

                         <label>manutenção</label>
                       
                        <select class="form-control"  name="manutencao_id  ">
                            <option>selecione</option>
                             @foreach($Manutencao as $manutencao)  
                            <option value="{{ $manutencao->manutencao_id}}"><br>
                                {{ $manutencao->data_manutencao}}<br>
                            </option>
                        @endforeach                     
                        </select><br>

                        
                         <input type="submit" class="btn btn-primary" value="cadastrar">
                        
                </div>
    
                    
               
                
                </div>
                    
                    
        </div>



    </form>
        

                
@endsection('conteudo')
