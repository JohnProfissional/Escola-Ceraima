


@section('conteudo')
@extends('layouts.main')
@extends('layouts.app')
@section('titulo','cadastro de usuario')

<!--t -->
    @if($errors->any())
        
        <div class="alert alert-danger">
            
            <ul>
                @foreach($errors->all() as $error)

                    <li>{{$error}}</li>

                @endforeach    
            </ul>
                
        </div>        

    @endif

    
        
        @csrf
        <div class="row g-3">
            <div>
                <h4>cadastro de evento</h4><br>
            </div>
             <form action="{{route('usuario.store')}}" method="post">
                <div class="col">
                        <label for="nome">nome</label>
                        <input type="text" class="form-control" name="nome" id="nome"><br>
                        
                         <input type="submit" class="btn btn-primary" value="cadastrar"> 
                </div>             
            </form>               
        </div>




    </form>
        

                
@endsection('conteudo')

