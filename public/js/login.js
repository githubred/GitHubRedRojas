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
    
    //document.getElementById('ingresa').click(); //ACTIVAR
}
      
function signOut() {
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
        console.log('User signed out.');
    });
    var inputGmail = document.getElementById('usuario');
    var inputId = document.getElementById('contra');
    
    inputGmail.value = '';
    inputId.value = '';
}