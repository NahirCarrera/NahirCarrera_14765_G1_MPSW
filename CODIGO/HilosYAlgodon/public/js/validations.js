function validarAlfabeticos(inputElement) {
    const valor = inputElement.value;

    // Permitir borrar y teclas de flechas
    if (/^[a-zA-Z\s]*$/.test(valor) && valor != "") {
        inputElement.classList.remove("is-invalid");
        inputElement.classList.add("is-valid");
        return true;
    } else {
        inputElement.value = valor.replace(/[^a-zA-Z\s]/g, ""); // Eliminar caracteres no alfabéticos ni espacios
        inputElement.classList.add("is-invalid");
        inputElement.classList.remove("is-valid");
        return false;
    }
}
