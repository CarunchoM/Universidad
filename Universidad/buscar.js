function validarBusqueda() {
    var dni = document.getElementById('dni').value;
    var celectronico = document.getElementById('celectronico').value;
    
    // Validar que todos los campos estén llenos
    if (dni.trim() === '' && celectronico.trim() === '' ) {
        alert('Por favor, completa por lo menos un campo.');
        return false;
    }
    if (dni.trim() != ''){
        return true;
    }else if (celectronico.trim() != ''){
   // Validar el formato del email
    var emailRegExp = /^\S+@\S+\.\S+$/;
        if (!emailRegExp.test(celectronico)) {
            alert('Por favor, introduce un email válido.');
            return false;
        }
    }
    // Si todas las validaciones pasan, el formulario se puede enviar
    return true;
}
    