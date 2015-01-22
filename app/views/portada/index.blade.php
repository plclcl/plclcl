@extends('layouts.test')
@section('contenido')
    <div class="container">

        <h1 class="text-center page-header">Portal Planificación Clase a Clase</h1>
        <div class="row">
            <div id="myCarousel" class="carousel slide" style="width: 700px; margin: 0 auto">
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="/assets/image/utem2.jpg" height="120" width="600">
                        <div class="carousel-caption">
                            <h4>Planificación Clase a Clase</h4>
                            <p>Aplicación de administracion de planificaciones semestrales</p>
                        </div>
                    </div>
                    <div class="item">

                        <img src="/assets/image/utem2.jpg" height="120" width="600">
                        <div class="carousel-caption">
                            <h4>Universidad Tecnológica Metropolitana</h4>
                            <p>Del Estado de Chile</p>
                        </div>
                    </div>
                    <div class="item">

                        <img src="/assets/image/utem2.jpg" height="120" width="600">
                        <div class="carousel-caption">
                            <h4>Departamento de Computación e Informática</h4>
                            <p>Escuela de Informática</p>
                        </div>
                    </div>
                </div>
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
            </div>
        </div>

        <br>

        <div class="text-center">
            <a data-toggle="modal" href="#myModal" class="btn btn-primary">Inicia sesion</a>
            <a class="btn btn-success" href="">Buscar Planificación</a>

        </div>

        {{Form::open()}}

        <div class="modal" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title">Portal Utem</h4>
                    </div>
                    <div class="modal-body">
                        <for class="form-horizontal" role="form">

                            <div class="form-gruop control-gruop">
                                <script type="text/javascript">
                                    jQuery(document).ready(function() {
                                        jQuery('#Usuario').Rut({
                                            on_error: function() {
                                                alert('Rut incorrecto');
                                            }
                                        });
                                    });
                                </script>

                                <label for="Usuario" class=" control-label">Usuario</label>
                                <div class="controls">
                                    {{Form::text('usuario','Usuario')}}

                            </div>
                            <h4></h4>
                            <div>
                                <div class="for-group control-group">
                                    <label for="Password" class="control-label">Password</label>
                                    <div class="controls">
                                        <input type="password" name="Password" id="Password" placeholder="Password">
                                    </div>

                                </div>
                            </div>


                        </for>
                    </div>
                    <div class="modal-footer">
                        <a href="#" data-dismiss="modal" class="btn">Close</a>
                        {{Form::submit('ingresar',array('class'=>"btn btn-success"))}}

                    </div>
                </div>
            </div>
        </div>

    </div>

    {{Form::close()}}

    <div class="text-center">




    </div>


    </div>


    <br />
    <div class="footer text-center ">
        <p>&copy; Universidad Tecnológica Metropolitana</p>
        <p>Estado de Chile</p>
    </div>

    </div> <!-- /container -->





    @stop