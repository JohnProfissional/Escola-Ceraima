

@extends('layouts.app')
@extends('layouts.main')
@section('conteudo')
@section('titulo','edição de reserva')

<body>
	<div class="row g-3">
        <div class="col">
           	<form action="{{route('reservas.store', ['id' => $Reservas->id])}}" method="post">
				
				@csrf
				@method('PUT')
				
				<label for="nome">Reserva</label>
				{{-- Form Section 1 --}}
				<input type="text" name="nome" class="form-control" value="{{$Reservas->nome}}"><br>

				<input type="submit" class="btn btn-primary" value="editar">
			</form>
 		</div>
    </div>
		
</body>

@endsection('conteudo')

@section('footer')

@endsection('footer')