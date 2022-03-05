

@section('conteudo')
@extends('layouts.main')
@extends('layouts.app')
@section('titulo','lista de previsão de entregar')


  <table class="table table-sm">
    <div>
        <caption>Tabela de previsao de entregar</caption>
       
    </div>
   
      @foreach ($PrevisaoEntregar as $previsaoentregar)
      <thead>
        <tr>
          <th scope="col">id</th>
          <th>data de previsão de entregar</th><br>
           <th>data da manutenção</th><br>
      
        
          <th></th>
          <th></th>
          <th></th>

        </tr>
      </thead>
       
            <td scope="row">{{$previsaoentregar->id}}</td>

          <td>{{$previsaoentregar->data_previsao_entrega }}</td>

          <td>{{$previsaoentregar->manutencao->data_manutencao}}</td>

    

         
          
             <td>
                   <form action="{{route('previsaoentregar.delete', ['id' => $previsaoentregar->id])}}" method="post">
                    @csrf
                    @method('DELETE')   
                    <input type="submit" class="btn btn-primary" value="deletar">
                    </form> 
                </td>
                <td>
                   
                </td>
                <td>
                    <form action="{{route('previsaoentregar.edit', ['id' => $previsaoentregar->id])}}" method="post">
                        @csrf
                        <input type="submit" class="btn btn-primary" name="formulario" value="alterar">
                    </form>
                </td>
          
          @endforeach
     
     
    </table>
     <form action="{{route('previsaoentregar.create')}}" method="post">
                        @csrf
                        <input type="submit" class="btn btn-primary" name="formulario" value="novo">
                    </form>


    


@endsection('conteudo')

@section('footer')

@endsection('footer')




