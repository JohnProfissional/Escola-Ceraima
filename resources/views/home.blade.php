



@section('conteudo')

@extends('layouts.app')




<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div id="nav">
			<ul id="menu-h">

				<li>
                                <a href="{{route('evento.index')}}">
                                    <img src="{{ URL::asset('images/eventos.png'); }}"
                                    style="width:50px; height:50px;"><br><h4>Evento</h4>
                                </a>  
                            </li>
                            <li> 
                                <a href="{{route('patrimonio.index')}}">
                                    <img src="{{ URL::asset('images/patrimonio.jpeg'); }}"
                                    style="width:50px; height:50px;"><br><h4>Patrimônio</h4>
                                </a> 
                            </li>
                            <li>
                                <a href="{{route('manutencao.index')}}">
                                    <img src="{{ URL::asset('images/Manutenção.jpg'); }}"
                                    style="width:50px; height:50px;"><br><h4>Manutenção</h4>
                                </a>
                                
                            </li>

                             <li>
                                <a href="{{route('reservas.index')}}">
                                    <img src="{{ URL::asset('images/reserva.png'); }}"
                                    style="width:50px; height:50px;"><br><h4>Reserva</h4>
                                </a>
                                
                            </li>

                            <li>
                                <a href="{{route('testes.index')}}">
                                    <img src="{{ URL::asset('images/teste.jpg'); }}"
                                    style="width:50px; height:50px;"><br><h4>Teste</h4>
                                </a>   
                            </li>
                            <li>
                                <a href="{{route('usuario.index')}}">
                                    <img src="{{ URL::asset('images/Usuario.png'); }}"
                                    style="width:50px; height:50px;"><br><h4>Usuário</h4>
                                </a>   
                            </li>

                            <li>
                                <a href="{{route('previsaoentregar.index')}}">
                                    <img src="{{ URL::asset('images/presisão_entregar.png'); }}"
                                    style="width:50px; height:50px;"><br><h4>Previsão de entregar</h4>
                                </a>   
                            </li>
			</ul>
		</div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection('conteudo')

@extends('layouts.main')
