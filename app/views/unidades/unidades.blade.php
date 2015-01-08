@extends('layouts.test')
@section('contenido')
    <script type="text/javascript" src="/assets/js/Carpeta sin título/addrows.js" ></script>
    <div class="container">
        <div class="row clearfix">
            <div class="col-md-12 column">
                <table class="table table-bordered table-hover" id="tab_logic">
                    <thead>
                    <tr >
                        <th class="text-center">
                            #
                        </th>
                        <th class="text-center">
                            Name
                        </th>
                        <th class="text-center">
                            Mail
                        </th>
                        <th class="text-center">
                            Mobile
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr id='addr0'>
                        <td>
                            1
                        </td>
                        <td>
                            <input type="text" name='name0'  placeholder='Name' class="form-control"/>
                        </td>
                        <td>
                            <input type="text" name='mail0' placeholder='Mail' class="form-control"/>
                        </td>
                        <td>
                            <input type="text" name='mobile0' placeholder='Mobile' class="form-control"/>
                        </td>
                    </tr>
                    <tr id='addr1'></tr>
                    </tbody>
                </table>
            </div>
        </div>
        <a id="add_row" class="btn btn-default pull-left">Add Row</a><a id='delete_row' class="pull-right btn btn-default">Delete Row</a>
    </div>
    @stop