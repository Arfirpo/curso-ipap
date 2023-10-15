function actualizarFecha() {
    const elementoFecha = document.getElementById('fecha-actual');
    const ahora = new Date();
    const año = ahora.getFullYear();
    const mes = (ahora.getMonth() + 1).toString().padStart(2, '0'); // El mes comienza en 0 (enero).
    const dia = ahora.getDate().toString().padStart(2, '0');
    elementoFecha.textContent = `${año}-${mes}-${dia}`;
}

// Llama a actualizarFecha para mostrar la fecha actual inmediatamente
actualizarFecha();