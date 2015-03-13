@extends('layouts.inicio')
@section('contenido')
    <link href="\assets\css\portada.css" rel="stylesheet">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="http://placehold.it/1200x500/3498db/2980b9" alt="First slide">
                            <div class="carousel-caption">
                                <h3>
                                    First slide</h3>
                                <p>
                                    Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="http://placehold.it/1200x500/9b59b6/8e44ad" alt="Second slide">
                            <div class="carousel-caption">
                                <h3>
                                    Second slide</h3>
                                <p>
                                    Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="http://placehold.it/1200x500/34495e/2c3e50" alt="Third slide">
                            <div class="carousel-caption">
                                <h3>
                                    Third slide</h3>
                                <p>
                                    Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                            </div>
                        </div>
                    </div>
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span></a><a class="right carousel-control"
                                                                                     href="#carousel-example-generic" data-slide="next"><span class="glyphicon glyphicon-chevron-right">
                        </span></a>
                </div>
                <div class="main-text hidden-xs">
                    <div class="col-md-12 text-center">
                        <h1>
                            Static Headline And Content</h1>
                        <h3>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        </h3>
                        <div class="">
                            <a class="btn btn-clear btn-sm btn-min-block" href="#login">Login</a><a class="btn btn-clear btn-sm btn-min-block"
                                                                                                                           href="http://www.jquery2dotnet.com/">Registration</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="push">
    </div>

    <div class="modal" id="login">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Portal Utem</h4>
                </div>
                <div class="modal-body">
                    @include('login.login')
                 
                </div>
            </div>
        </div>
    </div>
    @stop