



@section('conteudo')
@extends('layouts.main')
@extends('layouts.app')
@section('titulo','lista de sala')

  <table class="table table-sm">
    <div>
        
       
    </div>
   
      @foreach ($Sala as $sala)
      <thead>
        <tr>
          <th scope="col">id</th>
          <th>nome</th><br>
          <th></th>
          <th></th>
          <th></th>

        </tr>
      </thead>
       
            <td scope="row">{{$sala->id}}</td>

          <td>{{$sala->nome}}</td>
          
             <td>
                   <form action="{{route('sala.delete', ['id' => $sala->id])}}" method="post">
                    @csrf
                    @method('DELETE')   
                    <input type="submit" class="btn btn-primary" value="deletar">
                    </form> 
                </td>
                <td>
                    
                </td>
                <td>
                    <form action="{{route('sala.edit', ['id' => $sala->id])}}" method="post">
                        @csrf
                        <input type="submit" class="btn btn-primary" name="formulario" value="alterar">
                    </form>
                </td>
          
          @endforeach
     
     
    </table>
    <form action="{{route('sala.create')}}" method="post">
                        @csrf
                        <input type="submit" class="btn btn-primary" name="formulario" value="cadastrar uma nova sala">
                    </form>


  @section('footer')

@endsection('footer')
  


@endsection('conteudo')





