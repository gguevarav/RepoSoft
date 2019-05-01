@extends('layouts.layout')
@section('content')
<div class="row">
  <section class="content">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="pull-left"><h3>Lista de Programas</h3></div>
          <div class="pull-right">
            <div class="btn-group">
              <a href="{{ route('Programas.create') }}" class="btn btn-info" >Añadir Programas</a>
            </div>
          </div>
          <div class="table-container">
            <table id="mytable" class="table table-bordred table-striped">
              <thead>
                <th>Nombre del Programa</th>
                <th>Plataforma </th>
                <th>Versión</th>
                <th>Usuario</th>
                <th>Clave</th>
                <th>Link de Descarga</th>
              </thead>
              <tbody>
                @if($programa->count())  
                @foreach($programa as $Programas)  
                <tr>
                  <td>{{$Programas->NombrePrograma}}</td>
                  <td>{{$Programas->PlataformaPrograma}}</td>
                  <td>{{$Programas->VersionPrograma}}</td>
                  <td>{{$Programas->UsuarioPrograma}}</td>
                  <td>{{$Programas->ClavePrograma}}</td>
                  <td>{{$Programas->LinkDescargaPrograma}}</td>
                  <td><a class="btn btn-primary btn-xs" href="{{action('ProgramasController@edit', $Programas->id)}}" ><span class="glyphicon glyphicon-pencil"></span></a></td>
                  <td>
                    <form action="{{action('ProgramasController@destroy', $Programas->id)}}" method="post">
                      {{csrf_field()}}
                      <input name="_method" type="hidden" value="DELETE">

                      <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash"></span></button>
                    </td>
                  </tr>
                  @endforeach 
                  @else
                  <tr>
                    <td colspan="8">No hay registro !!</td>
                  </tr>
                  @endif
                </tbody>

              </table>
            </div>
          </div>
          {{ $programa->links() }}
        </div>
      </div>
    </section>

    @endsection