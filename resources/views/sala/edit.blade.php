@section('conteudo')
@extends('layouts.main')
@extends('layouts.app')

@section('titulo','edição de sala')

<body>
	<div class="row g-3">
        <div class="col">
           	<form action="{{route('sala.edit', ['id' => $Sala->id])}}" method="post">
				<h4>Sala</h4><br>
				@csrf
				@method('PUT')
				
				<label for="nome">nome da sala</label>
				{{-- Form Section 1 --}}
				<input type="text" name="nome" class="form-control" value="{{$Sala->nome}}"><br>

				<input type="submit" class="btn btn-primary" value="editar">
			</form>
 		</div>
    </div>
		
</body>

@endsection('conteudo')

