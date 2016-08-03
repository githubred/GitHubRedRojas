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
        <header>
            <div class="container">
                <h1>INICIAR SESION</h1>
            </div>
        </header>
        <div class="container">
            <div class="g-signin2" type="submit" data-onsuccess="onSignIn"></div>
            <div class="secure">
                
                {!!Form::open(['route'=>'autentificacion.store','method'=>'POST'])!!}

                    <div class="form-group">
                        <label for="exampleInputEmail1">Email de Usuario</label>

                            {!!Form::text('usuario',null,['required'=>' ', 'autocomplete'=>'off', 'placeholder' =>'Ejemplo@ejemplo.com','class'=>'form-control','id'=>'usuario'])!!}
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Id</label>

                            {!!Form::password('contra',['required'=>' ', 'autocomplete'=>'off', 'placeholder' =>'Id','class'=>'form-control','id'=>'contra'])!!}
                    </div>
                    <hr>
                    <center>
                        <button type="submit" id="ingresa">Ingresar</button>
                        <a href="#"><button type="button">Cancelar</button></a>
                    </center>
                    
                {!!Form::close()!!}
            </div>
            <center>
                <a href="#"><button type="button">Cancelar</button></a>
            </center>
            

        </div>
        <script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>
        <script type="text/javascript" src="js/jquery-2.2.4.min.js"></script>
        <script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
        <!--bootstrap js-->
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <!--js propio-->
        <script type="text/javascript" src="js/login.js"></script>
    </body>
</html>
