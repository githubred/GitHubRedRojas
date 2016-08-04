<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Menu Principal</title>

        <!--Links y Js de Bootstrap-->
<!--        <link rel="stylesheet" href="css/bootstrap.min.css">-->
        {!!Html::style('css/bootstrap.min.css')!!}
        <!--Links y js propias-->
<!--        <link rel="stylesheet" href="css/main.css">-->
        {!!Html::style('css/main.css')!!}

    </head>
    <body onresize="responsiveMenu();" onscroll="ocultarMenu();">
        <!--
        <header>
            <div id="lado-top" class="container">
                <h1>RED</h1>
            </div>
        </header>
        -->
        <div class="container">
            <div class="row">
                <div id="lado-izq" class="col-xs-12 col-sm-3 col-md-3">

                </div>
                <!--1-Menu izquierdo-->
                <div id="lado-izq-menu" class="navbar navbar-inverse" role="navigation">
                    <!--BOTON 3 RAYAS-->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
                            <span class="sr-only">Toggle Navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <span class="visible-xs navbar-brand">Menu</span>
                    </div>
                    <!--BOTON 3 RAYAS FIN-->

                    <!--MENU lista-->
                    <div class="navbar-collapse collapse sidebar-navbar-collapse" id="menu-lista">
                        <!--logo-->
                        <div class="logo-icono">
                            <a href="#">
                                <span style="color:white" class="glyphicon glyphicon-home" aria-hidden="true"></span> Home
                            </a>
                        </div>
                        <!--ANTIGUO MENU
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="#">
                                    <span class="glyphicon glyphicon-cog"></span> Administrar
                                </a>
                            </li>
                            <li onclick="showHide(estado, document.getElementById('menuSedes'));">
                                <a href="#">
                                    <span class="glyphicon glyphicon-tower"></span>
                                    Sedes
                                </a>
                                <ul class="sub-menu-list nav navbar-nav" style="display: none;"  id="menuSedes">
                                    <li class="menu-list"><a href="">Consultar</a></li>
                                    <li class="menu-list"><a href="">Registrar</a></li>
                                    <li class="menu-list"><a href="">Modificar</a></li>
                                </ul>
                            </li>
                            <li onclick="showHide(estado, document.getElementById('menuPersonal'));">
                                <a href="#">
                                    <span class="glyphicon glyphicon-eye-open"></span> Personal
                                </a>
                                <ul class="sub-menu-list nav navbar-nav" style="display: none;"  id="menuPersonal">
                                    <li class="menu-list"><a href="">Consultar</a></li>
                                    <li class="menu-list"><a href="">Registrar</a></li>
                                    <li class="menu-list"><a href="">Modificar</a></li>
                                </ul>
                            </li>
                            <li class="menu-list">
                                <a href="#">
                                    <span class="glyphicon glyphicon-plus"></span> Médicos
                                </a>
                            </li>
                            <li class="menu-list">
                                <a href="#">
                                    <span class="glyphicon glyphicon-user"></span> Pacientes
                                </a>
                            </li>
                            <li class="menu-list">
                                <a href="#">
                                    <span class="glyphicon glyphicon-list-alt"></span> Historias Clinicas
                                </a>
                            </li>
                        </ul>
                        -->
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a href="{{ URL::to('usuario') }}" >
                                            <div>
                                                <span class="glyphicon glyphicon-cog"></span>
                                                Administrar
                                            </div>
                                        </a>
                                    </h4>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <div>
                                                <span class="glyphicon glyphicon-tower"></span>
                                                Sedes
                                                <span class="caret"></span>
                                            </div>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <a href="{{ URL::to('sede') }}">
                                        <div class="list-group">
                                            Consultar
                                        </div>
                                    </a>
                                    <a href="{{ URL::to('sede/create') }}">
                                        <div class="list-group">
                                            Registrar
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="list-group">
                                            Modificar
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            <div>
                                                <span class="glyphicon glyphicon-eye-open"></span>
                                                Personal
                                                <span class="caret"></span>
                                            </div>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <a href="#">
                                        <div class="list-group">
                                            Consultar
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="list-group">
                                            Registrar
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="list-group">
                                            Modificar
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingFour">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            <div>
                                                <span class="glyphicon glyphicon-plus"></span>
                                                Médicos
                                                <span class="caret"></span>
                                            </div>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                    <a href="{{ URL::to('medico') }}">
                                        <div class="list-group">
                                            Consultar
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="list-group">
                                            Registrar
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="list-group">
                                            Modificar
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingFive">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                            <div>
                                                <span class="glyphicon glyphicon-user"></span>
                                                Pacientes
                                                <span class="caret"></span>
                                            </div>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                                    <a href="#">
                                        <div class="list-group">
                                            Consultar
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="list-group">
                                            Registrar
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="list-group">
                                            Modificar
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingSix">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                            <div>
                                                <span class="glyphicon glyphicon-list-alt"></span>
                                                Historias Clinicas
                                                <span class="caret"></span>
                                            </div>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                                    <a href="#">
                                        <div class="list-group">
                                            Consultar
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="list-group">
                                            Registrar
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--MENU lista FIN-->
                </div>
                <!--1-Menu izquierdo fin-->
                <!--2-Menu superior-->
                <div id="lado-der-top" class="col-xs-12">
                    <img src="{{ asset('img/man_brown.png') }}" alt="user-img" class="img-circle">


                    <div class="dropdown" style="float: right;">
                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            Usuario
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                            <li><a href="#">Perfil</a></li>
                            <li><a href="#">Configuracion</a></li>
                            <li><a href="#">Salir</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Ayuda</a></li>
                        </ul>
                     </div>
                </div>
                <!--2-Menu superior Fin-->
                @yield('content')
            </div>
        </div>

        <!--Jquery-->
        <script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>

        <!--Jquery-->
<!--        <script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>-->

        {!!Html::script('js/jquery-3.1.0.min.js')!!}
<!--        <script type="text/javascript" src="js/jquery-2.2.4.min.js"></script>-->
        {!!Html::script('js/jquery-2.2.4.min.js')!!}
<!--        <script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>-->
        {!!Html::script('js/jquery-1.12.4.min.js')!!}
        <!--bootstrap js-->
<!--        <script type="text/javascript" src="js/bootstrap.min.js"></script>-->
        {!!Html::script('js/bootstrap.min.js')!!}
        <!--own js-->
        <!--<script type="text/javascript" src="js/main.js"></script>-->
        {!!Html::script('js/main.js')!!}

    </body>
</html>
