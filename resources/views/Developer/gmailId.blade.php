<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--links css y js-->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!--links css propio-->
        <link rel="stylesheet" href="css/login.css">

        <!--Google Sing-in-->
        <meta name="google-signin-scope" content="profile email">
        <meta name="google-signin-client_id" content="764218325264-h4c92vhnpj24719d226qdkkilbfvomtm.apps.googleusercontent.com">
        <script src="https://apis.google.com/js/platform.js" async defer></script>
    </head>
    <body>
        <div class="cuerpoLogin">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-6 col-md-offset-2 login">
                        <div class="panel panel-default">
                            <div class="panel-heading">Iniciar Sesión con Gmail</div>
                            <div class="panel-body">
                                <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                                    {{ csrf_field() }}

                                    <div class="g-signin2" data-onsuccess="onSignIn"></div>
                                    <hr/>
                                    <div class="form-group">
                                        <div class="col-xs-12 col-md-8 col-md-offset-2">
                                            <button class="btn btn-primary">
                                                Cancelar
                                            </button>

                                            <a class="btn btn-link" href="#" onclick="signOut();">¡ Cerrar Sesión !</a>
                                        </div>
                                    </div>
                                    <hr/>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>
        <script type="text/javascript" src="js/jquery-2.2.4.min.js"></script>
        <script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
        <!--bootstrap js-->
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <!--js propio-->
        <script type="text/javascript" src="js/gmailId.js"></script>
    </body>
</html>
