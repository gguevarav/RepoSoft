@extends('layouts.layout')
@section('content')
<div class="row">
	<section class="content">
		<div class="col-md-8 col-md-offset-2">
			@if (count($errors) > 0)
			<div class="alert alert-danger">
				<strong>Error!</strong> Revise los campos obligatorios.<br><br>
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif
			@if(Session::has('success'))
			<div class="alert alert-info">
				{{Session::get('success')}}
			</div>
			@endif

			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Subir programas</h3>
				</div>
				<div class="panel-body">					
					<div class="table-container">
						<form method="POST" action="{{ route('Programas.store') }}"  role="form">
							{{ csrf_field() }}
							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="NombrePrograma" id="NombrePrograma" class="form-control input-sm" placeholder="Nombre del programa">
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<select class="form-control input-sm" id=PlataformaPrograma name="PlataformaPrograma">
											<option value="x86">x86</option>
											<option value="x64">x64</option>
										</select>
									</div>
								</div>
							</div>

							<div class="form-group">
								<textarea name="VersionPrograma" class="form-control input-sm" placeholder="Version del programa"></textarea>
							</div>
							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="UsuarioPrograma" id="UsuarioPrograma" class="form-control input-sm" placeholder="Usuario del programa">
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
									<input type="text" name="ClavePrograma" id="ClavePrograma" class="form-control input-sm" placeholder="Clave del programa">
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-12">
									<div class="form-group">
										<input type="text" name="LinkDescargaPrograma" id="LinkDescargaPrograma" class="form-control input-sm" placeholder="Link del programa">
									</div>
								</div>
							</div>
							<div class="row">

								<div class="col-xs-12 col-sm-12 col-md-12">
									<input type="submit"  value="Guardar" class="btn btn-success btn-block">
									<a href="{{ route('Programas.index') }}" class="btn btn-info btn-block" >Atrás</a>
								</div>	

							</div>
						</form>
					</div>
				</div>

			</div>
		</div>
	</section>
	@endsection