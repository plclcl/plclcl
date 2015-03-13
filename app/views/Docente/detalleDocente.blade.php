@extends('layouts.test')
@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="well well-sm">
                    <div class="row">
                        <div class="col-sm-6 col-md-4">
                            <img src="http://placehold.it/380x500" alt="" class="img-rounded img-responsive" />
                        </div>
                        <div class="col-sm-6 col-md-8">
                            <h4>
                                {{$docente->nombre}}
                            </h4>
                            <small>
                                <p>
                                    {{$docente->apellidopaterno}}
                                </p>
                                <p>
                                    {{$docente->apellidomaterno}}
                                </p>
                            </small>
                            <p>
                                <i class="glyphicon glyphicon-envelope"></i>{{$docente->email}}
                                <br />
                                <i class="glyphicon-user"></i>{{$docente->genero}}
                                <br />
                                <i class="glyphicon glyphicon-globe"></i><a href="http://www.jquery2dotnet.com">www.jquery2dotnet.com</a>
                                <br />
                                <i class="glyphicon glyphicon-gift"></i>June 02, 1988</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop