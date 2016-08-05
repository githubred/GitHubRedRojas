<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Red Oftalmologica</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--links css y js-->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/index.css">

        <!--Google Sing-in-->
        <meta name="google-signin-scope" content="profile email">
        <meta name="google-signin-client_id" content="764218325264-h4c92vhnpj24719d226qdkkilbfvomtm.apps.googleusercontent.com">
        <script src="https://apis.google.com/js/platform.js" async defer></script>
    </head>

    <body >
        <!-- =TOP= -->
        <div class="navbar navbar-inverse" role="navigation" id="nav_top">
            <div class="container" style="text-align: center;">
                <ul class="nav navbar-nav col-xs-12 col-sm-12">
                    <li><a href="{{ URL::to('autentificacion') }}">Ingresar a la red</a></li>
                    <!--
                    <div class="g-signin2" data-onsuccess="onSignIn" ></div>
                    <script>
                      function onSignIn(googleUser) {
                        // Useful data for your client-side scripts:
                        var profile = googleUser.getBasicProfile();
                        console.log("ID: " + profile.getId()); // Don't send this directly to your server!
                        console.log('Full Name: ' + profile.getName());
                        console.log('Given Name: ' + profile.getGivenName());
                        console.log('Family Name: ' + profile.getFamilyName());
                        console.log("Image URL: " + profile.getImageUrl());
                        console.log("Email: " + profile.getEmail());

                        // The ID token you need to pass to your backend:
                        var id_token = googleUser.getAuthResponse().id_token;
                        console.log("ID Token: " + id_token);

                        //var sistema = "http://localhost:8000/main";

                        //location.href = sistema;

                      };
                    </script>
                    -->
                </ul>

                <form class="navbar-form navbar-left col-xs-12 col-sm-12" style="color: white; text-align:center;">
                    <!--
                    <div class="form-group col-xs-10">
                        <input type="text" class="form-control" placeholder="Buscar">
                    </div>
                    <button type="submit" class="btn btn-default col-xs-2">Ir</button>
                    -->
                    <div><h1>Red Médica Oftalmológica</h1></div>
                </form>
            </div>
        </div>

        <!-- =HEADER= -->
        <header class="container" id="header">

            <hgroup style="text-align:center">
                <a href="http://localhost:8000"><img id="logo" src="img/logoOjos-1.png" alt="logoRedOftalmologica"></a>
            </hgroup>
            <nav  class="navbar navbar-default" role="navigation">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <nav class="navbar-collapse collapse sidebar-navbar-collapse" role="navigation">
                    <ul class="nav navbar-nav">
                        <li><a href="#" onclick="view(0);">INICIO</a></li>
                        <li><a href="#" onclick="view(1);">ORGANIZACIÓN</a></li>
                        <li><a href="#" onclick="view(2);">ENTIDADES DE SALUD Y ALIANZAS</a></li>
                        <li><a href="#" onclick="view(3);">BANER PUBLICITARIO</a></li>
                    </ul>
                    <script type="text/javascript">
                        function view(num){
                            var menu0 = document.getElementById('cuerpo-0');
                            var menu1 = document.getElementById('cuerpo-1');
                            var menu2 = document.getElementById('cuerpo-2');
                            var menu3 = document.getElementById('cuerpo-3');
                            switch(num){
                                case 0:
                                    menu0.style = "display: block;";
                                    menu1.style = "display: none;";
                                    menu2.style = "display: none;";
                                    menu3.style = "display: none;";
                                    break;
                                case 1:
                                    menu0.style = "display: none;";
                                    menu1.style = "display: block;";
                                    menu2.style = "display: none;";
                                    menu3.style = "display: none;";
                                    break;
                                case 2:
                                    menu0.style = "display: none;";
                                    menu1.style = "display: none;";
                                    menu2.style = "display: block;";
                                    menu3.style = "display: none;";
                                    break;
                                case 3:
                                    menu0.style = "display: none;";
                                    menu1.style = "display: none;";
                                    menu2.style = "display: none;";
                                    menu3.style = "display: block;";
                                    break;
                            }
                        }
                    </script>
                </nav>
            </nav>
        </header>

        <!--Se carga El CONTAINER PARA CADA VISTA-->
        @yield('content')

       <!-- =PIE PAGINA= -->
        
        <footer class="col-xs-12 col-ms-12 col-md-12" id="footer">
           <hr/>
            <div class="container  panel-footer">
                <p>@RedOftalmologicaRojas</p>
            </div>
        </footer>
        <!--Jquery-->
        <script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>
        <script type="text/javascript" src="js/jquery-2.2.4.min.js"></script>
        <script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
        <!--bootstrap js-->
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
    </body>
</html>
