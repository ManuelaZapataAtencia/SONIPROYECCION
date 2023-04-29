const $btnSignUp = document.querySelector('.sign-up-btn'),
      $btnSignIn = document.querySelector('.sign-in-btn'),
      $signUp = document.querySelector('.sign-up'),
      $signIn = document.querySelector('.sign-in');

document.addEventListener('click', e => {
    if(e.target === $btnSignIn || e.target  === $btnSignUp){
        $signIn.classList.toggle('active');        
        $signUp.classList.toggle('active')    
    }
});




function validarFormulario(){
    
    var name = document.getElementById("name").value;

    if (name.length <=1) {
        alert("entra")
        return false;
    }else{
        var valor = prompt("Dame una contraseña", "");
        document.getElementById("password").value = valor;
        validarpassword()

        return false;
    }
}

function validarpassword(){
    var password = document.getElementById("password").value;
    var num = parseInt(password)

    if (Number.isInteger(num)){
    
    sum = 0;
    
    for (i =0; i < password.length; i++){
    
    sum = sum + parseInt(password[i])
    
    }
    document.getElementById("suma").value = sum;

    document.getElementById("suma").style.display = 'block';

    identificarIntervaloDeTiempo = setInterval(mandarMensaje, 1000);
  }
  function mandarMensaje() {

    console.log("Ha pasado 1 segundo.");
  }

}
