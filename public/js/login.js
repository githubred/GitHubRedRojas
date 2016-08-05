var estado = 0;

function onSignIn(googleUser) {
     // Useful data for your client-side scripts:
    var profile = googleUser.getBasicProfile();

    var gmail = profile.getEmail();
    var id = profile.getId();
    /*
    document.write("ID: " + profile.getId()); // Don't send this directly to your server!
    document.write('Full Name: ' + profile.getName());
    document.write('Given Name: ' + profile.getGivenName());
    document.write('F+amily Name: ' + profile.getFamilyName());
    document.write("Image URL: " + profile.getImageUrl());
    document.write("Email: " + profile.getEmail());
    // The ID token you need to pass to your backend:
    var id_token = googleUser.getAuthResponse().id_token;
    document.write("ID Token: " + id_token);

    var sistema = "http://localhost:8000/main?var1="+profile.getName();
    location.href = sistema;
    */
    var inputGmail = document.getElementById('usuario');
    var inputId = document.getElementById('contra');

    inputGmail.value = gmail;
    inputId.value = id;
    
    if(estado == 0) {
        exit();
        submit();
    }

}
function submit(){
    document.getElementById('ingresa').click(); //ACTIVAR
}
function exit(){
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
        console.log('User signed out.');
    });
}
function changeState(){
    estado = 1;
}
var windowClose;
function signOut() {
    
    if(estado == 1){
        windowClose = window.open("https://accounts.google.com/Logout?hl=es&continue=https://www.google.com.pe/%3Fgfe_rd%3Dcr%26ei%3D_VeiV72WDcWEqQW_opXwBA%26gws_rd%3Dssl%26pli%3D1&timeStmp=1470258930&secTok=.AG5fkS8Ajs2RP68RUilVqHon6-0jDKT_TA", "nuevo", "toolbar=no,scrollbars=no,resizable=no,top=100,left=500,width=400,height=400" );
        setTimeout(cerrarVentana,5000);
    }
    
    estado = 0;
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
        console.log('User signed out.');
    });
    var inputGmail = document.getElementById('usuario');
    var inputId = document.getElementById('contra');
    
    inputGmail.value = '';
    inputId.value = '';
}

function cerrarVentana() {
    windowClose.close();
    window.location.href = "http://localhost:8000/autentificacion";
}

function salir(){//from system
    windowClose = window.open("https://accounts.google.com/Logout?hl=es&continue=https://www.google.com.pe/%3Fgfe_rd%3Dcr%26ei%3D_VeiV72WDcWEqQW_opXwBA%26gws_rd%3Dssl%26pli%3D1&timeStmp=1470258930&secTok=.AG5fkS8Ajs2RP68RUilVqHon6-0jDKT_TA", "nuevo", "toolbar=yes,scrollbars=yes,resizable=yes,top=100,left=500,width=400,height=400" );
    setTimeout(cerrarVentana,5000);
}