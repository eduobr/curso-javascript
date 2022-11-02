function guardarUsuario() {
    var email = document.getElementById("txtEmail").value;
    var pass = document.getElementById("txtPass").value;

    firebase.auth().createUserWithEmailAndPassword(email, pass)
    .catch(function(error) {
        var errorCode = error.code;
        var errorMessage = error.message;
        console.log(errorCode);
        console.log(errorMessage);
      });
}

function loginUsuario() {
    var email = document.getElementById("txtEmail").value;
    var pass = document.getElementById("txtPass").value;

    firebase.auth().signInWithEmailAndPassword(email, pass)
    .then(function(){
      //M.toast({html: 'Cerrando Sesion', classes: 'rounded'});
      location.assign("controladores/ProcesoLogin.php?btnLogin='btnLogin'&txtEmail="+email);
    })
    .catch(function(error) {
        document.getElementById("respuesta").innerHTML = error;
        var errorCode = error.code;
        var errorMessage = error.message;
        console.log(errorCode);
        console.log(errorMessage);
      });
}

function observadorUsuario() {
    firebase.auth().onAuthStateChanged(function(user) {
        if (user) {
          // User is signed in.
          var displayName = user.displayName;
          var email = user.email;
          var emailVerified = user.emailVerified;
          var photoURL = user.photoURL;
          var isAnonymous = user.isAnonymous;
          var uid = user.uid;
          var providerData = user.providerData;
          // ...
          console.log("Usuario activo: " + email);
          //var aux = document.getElementById("contenedor");
          //aux.innerHTML = "Bienvenido: " + email;
          M.toast({html: 'Usuario Logeado', classes: 'rounded'});
        } else {
          // User is signed out.
          // ...
          console.log("Usuario no activo");
          
        }
      });
}

observadorUsuario();

function cerrarSesion() {
    firebase.auth().signOut()
    .then(function(){
        //M.toast({html: 'Cerrando Sesion', classes: 'rounded'});
        location.assign("../index.php");
    })
    .catch(function(error){
        console.log(error);
    })
}


