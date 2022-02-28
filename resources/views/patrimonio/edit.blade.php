

@extends('layouts.app')

@extends('layouts.main')

@section('conteudo')
@section('titulo','edição de patrimonio')

<body>
	<div class="row g-3">
        <div class="col">
           	<form action="{{route('patrimonio.edit', ['id' => $Patrimonio->id])}}" method="post">
				<h4>Patrimonio</h4><br>
				@csrf
				@method('PUT')

				<input type="submit" class="btn btn-primary" value="editar">
			</form>
 		</div>
    </div>
		
</body>

@endsection('conteudo')

@section('footer')

@endsection('footer')