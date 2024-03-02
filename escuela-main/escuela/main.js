const username = document.getElementById('email')
const password = document.getElementById('password')
const button = document.getElementById('button')

function redirigir() {
    window.location.href = "privacidad.html";
}

button.addEventListener('click', (e) => {
    e.preventDefault()
    const data = {
        email: email.value,
        password: password.value
    }

    console.log(data)
})


function redireccionarPagina1() {
    window.location.href = 'home.php'; 
  }

  function redireccionarPagina2() {
    window.location.href = 'index.html'; 
 }

 function validarFormulario() {
    var casilla = document.getElementById('aceptoTerminos');

    if (!casilla.checked) {
        alert('Debes aceptar los términos y condiciones antes de enviar el formulario.');
        return false;
    }

    return true;
}

  

