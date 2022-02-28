
@extends('layouts.main')
@extends('layouts.app')

@section('conteudo')

<body>
	<div class="col">
           		
           	</div>
	<div class="row g-3">
			<div>
           		<h4>Edição de eventos</h4>
           	</div>	
        <div class="col">
           	<form action="{{route('evento.edit', ['id' => $Evento->id])}}" method="post">
				@csrf
				@method('PUT')
				<label for="nome">nome do evento</label>
				{{-- Form Section 1 --}}
				<input type="text" name="nome" class="form-control" value="{{$Evento->nome}}">
				<label>data de inicio</label>
                <input type="date" class="form-control" name="data_inicio" id="nome">                      
                <label>data de fim</label>
                <input type="date" class="form-control" name="data_fim" id="nome"><br>
                <input type="submit" class="btn btn-primary" value="salvar">
        </div>
        <div class="col">
                <label>hora de inicio</label>
                <input type="time" class="form-control" name="hora_inicio" id="nome">
                <label>hora de fim</label>
                <input type="time" class="form-control" name="hora_terminio" id="nome"><br>
				
		</div>
	</form>
 		</div>
    </div>	
</body>

@endsection('conteudo')
@section('footer')
@endsection('footer')