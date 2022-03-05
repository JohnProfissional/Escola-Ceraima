
@section('conteudo')
@extends('layouts.main')
@extends('layouts.app')
@section('titulo','lista de teste')


  <table class="table table-sm">
    <div>
        <caption>Tabela de teste</caption>
    </div>
   
      @foreach ($Teste as $teste)
      <thead>
        <tr>
          <th scope="col">id</th>
          <th>data_teste</th><br>
          <th>status</th><br>
          <th>patrimonio</th>
          <th></th>
          <th></th>
          <th></th>

        </tr>
      </thead>
       
            <td scope="row">{{$teste->id}}</td>

          <td>{{$teste->data_teste}}</td>
          <td>{{$teste->status}}</td>
          <td>{{$teste->patrimonio->nome}}</td>
          
             <td>
                   <form action="{{route('teste.delete', ['id' => $teste->id])}}" method="post">
                    @csrf
                    @method('DELETE')   
                    <input type="submit" class="btn btn-primary" value="deletar">
                    </form> 
                </td>
                <td>
                   
                </td>
                <td>
                    <form action="{{route('testes.edit', ['id' => $teste->id])}}" method="post">
                        @csrf
                        <input type="submit" class="btn btn-primary" name="formulario" value="alterar">
                    </form>
                </td>
          
          @endforeach
     
     
    </table><br>
    
     <form action="{{route('testes.create')}}" method="post">
                        @csrf
                        <input type="submit" class="btn btn-primary" name="formulario" value="novo">
                    </form>


    


@endsection('conteudo')

@section('footer')

@endsection('footer')




