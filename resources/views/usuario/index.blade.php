



@section('conteudo')
@extends('layouts.main')
@extends('layouts.app')
@section('titulo','Lista de Usuários')

  <table class="table table-sm">
    <div>
        <caption>Tabela de estagiario</caption>
       
    </div>
   
      @foreach ($Usuario as $usuario)
      <thead>
        <tr>
          <th scope="col">id</th>
          <th>nome</th><br>
          <th></th>
          <th></th>
          <th></th>

        </tr>
      </thead>
       
            <td scope="row">{{$usuario->id}}</td>

          <td>{{$usuario->nome}}</td>
          
             <td>
                   <form action="{{route('usuario.delete', ['id' => $usuario->id])}}" method="post">
                    @csrf
                    @method('DELETE')   
                    <input type="submit" class="btn btn-primary" value="deletar">
                    </form> 
                </td>
                <td>
                   
                </td>
                <td>
                    <form action="{{route('usuario.edit', ['id' => $usuario->id])}}" method="post">
                        @csrf
                        <input type="submit" class="btn btn-primary" name="formulario" value="alterar">
                    </form>
                </td>
          
          @endforeach
     
     
    </table><br>


     <form action="{{route('usuario.create')}}" method="post">
                        @csrf
                        <input type="submit" class="btn btn-primary" name="formulario" value="cadastrar novo usuario">
                    </form>


@endsection('conteudo')





