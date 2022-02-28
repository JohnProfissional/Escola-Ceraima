
@extends('layouts.app')
@extends('layouts.main')


@section('conteudo')

@section('titulo','edição de manutenção')


<body>
	<div class="row g-3">
        <div class="col">
           	<form action="{{route('manutencao.edit', ['id' => $Manutencao->id])}}" method="post">
				<h4>Manutenção</h4><br>
				@csrf
				@method('PUT')
				
				<label for="nome">data de manutencao</label>
				{{-- Form Section 1 --}}
				<input type="text" name="data_manutencao" class="form-control" value="{{$Manutencao->data_manutencao}}"><br>

				<label for="nome">patrimonio</label>
				{{-- Form Section 1 --}}
				<input type="text" name="patrimonio_id" class="form-control" value="{{$Manutencao->patrimonio_id}}"><br>

				<input type="submit" class="btn btn-primary" value="editar">
			</form>
 		</div>
    </div>
		
</body>

@endsection('conteudo')

@section('footer')

@endsection('footer')