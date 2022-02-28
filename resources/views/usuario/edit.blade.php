@extends('layouts.main')
@extends('layouts.app')
@section('conteudo')
@section('titulo','edição de usuario')
<body>
	<div class="row g-3">
        <div class="col">
           	<form action="{{route('usuario.edit', ['id' => $Usuario->id])}}" method="post">
				<h4>Estagiario</h4><br>
				@csrf
				@method('PUT')
				
				<label for="nome">nome do estagiario</label>
				{{-- Form Section 1 --}}
				<input type="text" name="nome" class="form-control" value="{{$Usuario->nome}}"><br>

				<input type="submit" class="btn btn-primary" value="editar">
			</form>
 		</div>
    </div>
		
</body>

@endsection('conteudo')

@section('footer')

@endsection('footer')