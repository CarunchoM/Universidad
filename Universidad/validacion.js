function validarFormulario() {
    var nombre = document.getElementById('nombre').value;
    var apellido1 = document.getElementById('apellido1').value;
    var apellido2 = document.getElementById('apellido2').value;
    var dni = document.getElementById('dni').value;
    var email = document.getElementById('email').value;
    var telefono = document.getElementById('telefono').value;
    var fnacimiento = document.getElementById('fnacimiento').value;
    var sexo = document.getElementById('sexo').value;
    var facultad = document.getElementById('facultad').value;

    // Validar que todos los campos estén llenos
    if (nombre.trim() === '' || apellido1.trim() === '' || apellido2.trim() === '' || dni.trim() === '' || email.trim() === '' || telefono.trim() === '' || fnacimiento.trim() === '' || sexo.trim() === '' || facultad.trim() === '') {
        alert('Por favor, completa todos los campos.');
        return false;
    }

    // Validar el formato del email
    var emailRegExp = /^\S+@\S+\.\S+$/;
    if (!emailRegExp.test(email)) {
        alert('Por favor, introduce un email válido.');
        return false;
    }

    // Validar el formato del teléfono
    var telefonoRegExp = /^\d{9}$/; // Se asume que el teléfono tiene 9 dígitos
    if (!telefonoRegExp.test(telefono)) {
        alert('Por favor, introduce un número de teléfono válido de 9 dígitos.');
        return false;
    }
    var telefonoRegExp = /^[0-9]+$/;
    if (!telefonoRegExp.test(telefono)) {
        alert('Por favor, introduce solo números en el campo de teléfono.');
        return false;
    }
    // Si todas las validaciones pasan, el formulario se puede enviar
    return true;
}
    