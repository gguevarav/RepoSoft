@extends('layouts.app')
@section('content')
<div class="container">
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
						<h3 class="panel-title">Editar información</h3>
					</div>
					<div class="panel-body">					
						<div class="table-container">
							<form method="POST" action="{{ route('Programas.update',$programa->id) }}"  role="form">
								{{ csrf_field() }}
								<input name="_method" type="hidden" value="PATCH">
								<div class="row">
									<div class="col-xs-6 col-sm-6 col-md-6">
										<div class="form-group">
											<input type="text" name="NombrePrograma" id="NombrePrograma" class="form-control input-sm" value="{{$programa->NombrePrograma}}">
										</div>
									</div>
									<div class="col-xs-6 col-sm-6 col-md-6">
										<div class="form-group">
											<input type="text" name="PlataformaPrograma" id="PlataformaPrograma" class="form-control input-sm" value="{{$programa->PlataformaPrograma}}">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-4 col-sm-4 col-md-4">
										<div class="form-group">
											<input type="text" name="VersionPrograma" id="VersionPrograma" class="form-control input-sm" value="{{$programa->VersionPrograma}}">
										</div>
									</div>
									<div class="col-xs-4 col-sm-4 col-md-4">
										<div class="form-group">
											<input type="text" name="UsuarioPrograma" id="UsuarioPrograma" class="form-control input-sm" value="{{$programa->UsuarioPrograma}}">
										</div>
									</div>
									<div class="col-xs-4 col-sm-4 col-md-4">
										<div class="form-group">
											<input type="text" name="ClavePrograma" id="ClavePrograma" class="form-control input-sm" value="{{$programa->ClavePrograma}}">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-12">
										<input type="submit"  value="Actualizar" class="btn btn-success btn-block">
										<a href="{{ route('Programas.index') }}" class="btn btn-info btn-block" >Atrás</a>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
	@endsection