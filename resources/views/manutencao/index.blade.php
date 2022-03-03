@extends('layouts.main')
@extends('layouts.app')

@section('conteudo')

  <table class="table table-sm">
    <div>
        @section('titulo','Lista de manutenção')

       
    </div>
   
      @foreach ($Manutencao as $manutencao)
      <thead>
        <tr>
          <th scope="col">id</th>
          <th>data_manutencao</th><br>
           <th>patrimonio</th><br>
           <th>hora do evento</th><br>
          <th></th>
          <th></th>
          <th></th>

        </tr>
      </thead>
       
            <td scope="row">{{$manutencao->id}}</td>

          <td>{{$manutencao->data_manutencao }}</td>

          <td>{{$manutencao->patrimonio->nome }}</td>
          
             <td>
                   <form action="{{route('manutencao.delete', ['id' => $manutencao->id])}}" method="post">
                    @csrf
                    @method('DELETE')   
                    <input type="submit" class="btn btn-primary" value="deletar">
                    </form> 
                </td>
                <td>
                    <form action="{{route('manutencao.create')}}" method="post">
                        @csrf
                        <input type="submit" class="btn btn-primary" name="formulario" value="novo">
                    </form>
                </td>
                <td>
                    <form action="{{route('manutencao.edit', ['id' => $manutencao->id])}}" method="post">
                        @csrf
                        <input type="submit" class="btn btn-primary" name="formulario" value="alterar">
                    </form>
                </td>
          
          @endforeach
     
     
    </table>


    


@endsection('conteudo')






