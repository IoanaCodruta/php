function reloadPage() {
    location.reload();
}

function confirmarEliminar() {
    // Mostrar la alerta y capturar la respuesta del usuario
    var confirmacion = confirm("¿Seguro que quieres eliminar este registro?");
    
    // Si el usuario confirma, redireccionar o realizar otra acción
    if (confirmacion) {
      // Aquí puedes realizar la acción de eliminación o redireccionar a otra página
      alert("Registro eliminado correctamente.");
    }
}