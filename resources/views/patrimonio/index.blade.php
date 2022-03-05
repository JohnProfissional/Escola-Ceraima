
@section('conteudo')
@extends('layouts.main')
@extends('layouts.app')
@section('titulo','lista de patrimonio')

  <table class="table table-sm">
    <div>
        
       
    </div>
   
      @foreach ($Patrimonio as $patrimonio)
      <thead>
        <tr>
          <th scope="col">id</th>
          <th>nome</th><br>
           <th>localização</th><br>
          <th>data de manutenção</th>
         <th></th>
         <th></th>
         <th></th>
          

        </tr>
      </thead>
       
            <td scope="row">{{$patrimonio->id}}</td>

          <td>{{$patrimonio->nome}}</td>
          <td>{{$patrimonio->localizacao}}</td>
           <td>{{ date("m-d-Y", strtotime($patrimonio->data_manutencao)); }}</td>
          
             <td>
                   <form action="{{route('patrimonio.delete', ['id' => $patrimonio->id])}}" method="post">
                    @csrf
                    @method('DELETE')   
                    <input type="submit" class="btn btn-primary" value="deletar">
                    </form> 
                </td>
                <td>
                    
                </td>
                <td>
                    <form action="{{route('patrimonio.edit', ['id' => $patrimonio->id])}}" method="post">
                        @csrf
                        <input type="submit" class="btn btn-primary" name="formulario" value="alterar">
                    </form>
                </td>
               
          @endforeach
    </table><br>
    
    <form action="{{route('patrimonio.create')}}" method="post">
                        @csrf
                        <input type="submit" class="btn btn-primary" name="formulario" value="novo">
                    </form>

@endsection('conteudo')





