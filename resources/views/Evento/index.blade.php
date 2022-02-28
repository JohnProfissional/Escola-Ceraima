@extends('layouts.main')
@extends('layouts.app')

@section('conteudo')

<div>
    <table class="table table-sm">
        <div>
            @section('titulo','Lista de eventos')
        </div>
      @foreach ($Evento as $evento)
      <thead>
        <tr>
          <th scope="col">id</th>
          <th>nome</th><br>
          <th>nome do evento</th><br>
           <th>data de inicio</th><br>
           <th>data de fim</th><br>
           <th>hora de inicio</th><br>
           <th>data do fim</th><br>
          <th></th>
          <th></th>
          <th></th>
        </tr>
      </thead>
      <thead>
        <td scope="row">{{$evento->id}}</td>
          <td>{{$evento->nome}}</td>
          <td>{{$evento->data_inicio}}</td>
          <td>{{$evento->data_fim }}</td>
          <td>{{$evento->hora_inicio}}</td>
          <td>{{$evento->hora_terminio}}</td>
          <td>
              <form action="{{route('evento.delete', ['id' => $evento->id])}}" method="post">
                    @csrf
                    @method('DELETE')   
                    <input type="submit" class="btn btn-primary" value="deletar">
                    </form> 
            </td>
            <td>
                <form action="{{route('evento.create')}}" method="post">
                    @csrf
                    <input type="submit" class="btn btn-primary" name="formulario" value="novo">
                    </form>
                </td>
                <td>
                    <form action="{{route('evento.edit', ['id' => $evento->id])}}" method="post">
                        @csrf
                        <input type="submit" class="btn btn-primary" name="formulario" value="alterar">
                    </form>
                </td>
          @endforeach
        </table>          
    </thead>
          
@endsection('conteudo')
@section('footer')
@endsection('footer')
    
</div>
  




