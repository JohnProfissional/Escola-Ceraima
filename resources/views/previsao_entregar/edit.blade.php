

@extends('layouts.app')
@extends('layouts.main')
@section('conteudo')

	@section('titulo','edição de previsao de entregar')


<body>
	<div class="row g-3">
        <div class="col">
           	<form action="{{route('previsaoentregar.edit', ['id' => $PrevisaoEntregar->id])}}" method="post">
				<h4>Previsao da Entregar</h4><br>
				@csrf
				@method('PUT')
				
				<label for="data_previsao_entrega">data previsao entrega</label>
				{{-- Form Section 1 --}}
				<input type="text" name="data_previsao_entrega" class="form-control" value="{{$PrevisaoEntregar->data_previsao_entrega}}"><br>

				<input type="submit" class="btn btn-primary" value="editar">
			</form>
 		</div>
    </div>
		
</body>

@endsection('conteudo')

