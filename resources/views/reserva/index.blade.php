@extends('layouts.main')
@extends('layouts.app')

@section('conteudo')
@section('titulo','lista de reserva')

  <table class="table table-sm">
    <div>
        <caption>Tabela de reserva</caption>
       
    </div>
      @foreach ($Reservas as $reserva)
      <thead>
        <tr>
          <th scope="col">id</th>
          <th>data_reserva</th><br>
          <th>fim_reserva </th>
          <th>usuario</th>
          <th>sala</th>
          <th>patrimonio</th>
          <th>eventos</th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>

        </tr>
      </thead>
       
            <td scope="row">{{$reserva->id}}</td>


          <td>{{$reserva->data_reserva}}</td>
          <td>{{$reserva->fim_reserva}}</td>
          <td>{{$reserva->usuario->nome}}</td>
          <td>{{$reserva->sala->nome}}</td>
          <td>{{$reserva->patrimonio->nome}}</td>
          <td>{{$reserva->evento->nome}}</td>
          
             <td>
                   <form action="{{route('reserva.delete', ['id' => $reserva->id])}}" method="post">
                    @csrf
                    @method('DELETE')   
                    <input type="submit" class="btn btn-primary" value="deletar">
                    </form> 
                </td>
               
                <td>
                    <form action="{{route('reservas.edit', ['id' => $reserva->id])}}" method="post">
                        @csrf
                        <input type="submit" class="btn btn-primary" name="formulario" value="alterar">
                    </form>
                </td>
          
          @endforeach
          
           <td>
                    <form action="{{route('reservas.create')}}" method="post">
                        @csrf
                        <input type="submit" class="btn btn-primary" name="formulario" value="fazer uma nova reserva">
                    </form>
                </td>
     
     
    </table>


    


@endsection('conteudo')

@section('footer')

@endsection('footer')




