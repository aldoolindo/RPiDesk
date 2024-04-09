@extends('site.layouts.default_page')

@section('titulo', 'Importações')

@section('body')
	<main>
		<!-- Cabecalho -->
		<section>
			<div class="cabecalho">
				<h1><a href="{{ route('site.index') }}">RPiDesk</a></h1>
				<div>
					<nav>
						<ul>
							<li><i class="fa-solid fa-gear"></i></li>
							<li><i class="fa-solid fa-circle-exclamation"></i></li>
							<li><i class="fa-solid fa-message"></i></li>
							<li><i class="fa-solid fa-user"></i></li>
						</ul>
					</nav>
				</div>
			</div>
		</section>

		<!-- Menu Lateral -->
		<section class="menu-lateral">
			<div class="menu-lateral-nav">
				<nav>
					<ul>
						<li><a href="{{ route('site.pendencias') }}">Pendencias</a></li>
            {{-- <li><a href="{{ route('site.consultas') }}">Consultas</a></li> --}}
            <li><a href="/importacoes">Importar CSV</a></li>
            <li><a href="{{ route('site.exportacoes') }}">Exportar CSV</a></li>
            {{-- <li><a hrel="{{ route('site.backup') }}">Backup</a></li> --}}
					</ul>
				</nav>
			</div>
		</section>

		<!-- Conteudo -->
		<section class="conteudo">
			<div class="conteudo-back-home">

				<form action="{{ url('customer/import') }}" method="POST" enctype="multipart/form-data">	
				{{-- <form method="POST", action="{{ route('site.importacoes_post') }}" enctype="multipart/form-data"> --}}

					@csrf
					<input type="file" name="import_file" class="form-control" />
					{{-- <input type="file" name="documento_csv"/> --}}
					<input type="submit" value="Importar CSV"/>
				</form>
				{{-- <ul>
				@forelse($protocols as $protocol)
					<li>{{ $protocol->ID }} {{ $protocol->Título }} {{ $protocol->Situação }} </li>
				@empty
					<p>No data</p>
				@endforelse
				</ul> --}}
			</div>
		</section>
	</main>
@endsection
