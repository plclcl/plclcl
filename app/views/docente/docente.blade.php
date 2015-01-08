@extends('layouts.test')
@section('contenido')

<h1>Listado Docente</h1>
<script type="text/javascript">
    $(document).ready(function(){
        $("#mytable #checkall").click(function () {
            if ($("#mytable #checkall").is(':checked')) {
                $("#mytable input[type=checkbox]").each(function () {
                    $(this).prop("checked", true);
                });

            } else {
                $("#mytable input[type=checkbox]").each(function () {
                    $(this).prop("checked", false);
                });
            }
        });

        $("[data-toggle=tooltip]").tooltip();
    });
</script>
<div class="container">
    <div class="row">


        <div class="col-md-12">
            <h4>Bootstrap Snipp for Datatable</h4>
            <div class="table-responsive">


                <table id="mytable" class="table table-bordred table-striped">

                    <thead>

                    <th><input type="checkbox" id="checkall" /></th>
                    <th>RUT</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                    </thead>
                    <tbody>




                            @foreach($datosDocente as $datoDocente)

                    <tr>
                        <td><input type="checkbox" class="checkthis" /></td>
                        <td>{{$datoDocente->rut}}</td>
                        <td>{{$datoDocente->nombres}}</td>
                        <td>{{$datoDocente->apellidos}}</td>
                        <td><p data-placement="top" data-toggle="tooltip" title="Editar"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                        <td><p data-placement="top" data-toggle="tooltip" title="Eliminar"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                    </tr>
                            @endforeach
                    </tbody>

                </table>

                <div class="clearfix"></div>
                <ul class="pagination pull-right">
                    <li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
                </ul>

            </div>

        </div>
    </div>
</div>