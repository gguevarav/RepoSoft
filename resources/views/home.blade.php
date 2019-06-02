@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="nav">
                        <ul class="nav nav-pills nav-fill">
                            <li class="nav-item">
                                <a href="{{ url('Programas') }}" class="nav-link">Listado de programas</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('Programas.create') }}"  class="nav-link">Subir un Programa</a>
                            </li>
                            <li class="nav-item">
                                <a href="http://localhost/"  class="nav-link">Acerca de...</a>
                            </li>
                            
                        </ul>
                    </div>
                    <!-- You are logged in! -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
