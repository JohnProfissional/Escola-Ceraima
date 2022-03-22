
@extends('layouts.main')
@extends('layouts.app')
@section('titulo','lista de patrimonio') 

@section('conteudo')

  
          @foreach ($Patrimonio as $patrimonio)
          <thead>
            <tr>
              <th scope="col">id</th>
              <th>nome</th><br>
               <th>localização</th><br>
              <th>quantidade</th>
              <th>tipo do patrimonio</th>
             <th></th>
             <th></th>
             <th></th>


            </tr>
          </thead>

                <td scope="row">{{$patrimonio->id}}</td>

              <td>{{$patrimonio->nome}}</td>
              <td>{{$patrimonio->localizacao}}</td>
              <td>{{$patrimonio->quantidade_patrimonio}}</td>
              <td>{{$patrimonio->tipo_patrimonio}}</td>


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
       

            
 
    

  
        <form action="{{route('patrimonio.create')}}" method="post">
        @csrf
        
        <input type="submit" class="btn btn-primary" name="formulario" value="cadastrar novo patrimônio">
     </form>
    
    
     

   
    
         
                   <footer>
			<br>
			<br><br>
            <div id="footer" align="center">
			copyrigth @Sistema desenvolvido por Robério Fagundes dos Santos
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
            </div>
</footer>
   
@endsection('conteudo')







