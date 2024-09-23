// Mostar Formulario
function ocultar(){
    var container = document.getElementsByClassName("formulario")[0];
    container.style.visibility = "visible";
}

// Selección de elementos del DOM
const form = document.querySelector('.formulario');
const taskTable = document.querySelector('tbody');

// Escuchar el evento de envío del formulario
form.addEventListener('submit', function (event) {
    event.preventDefault();
    agregarTarea();
});

// Función para agregar una nueva tarea
function agregarTarea() {
    // Capturando valores del formulario
    const nombre = document.getElementById('nombre').value;
    const detalle = document.getElementById('detalle').value;
    const fecha = document.getElementById('fecha').value;
    const hora = document.getElementById('hora').value;
    const estado = document.getElementById('estado').value;

    // Crear un objeto con los datos de la tarea
    const tarea = {
        id: Date.now(), 
        nombre: nombre,
        detalle: detalle,
        fecha: fecha,
        hora: hora,
        estado: estado
    };

    // Guardar tarea en Local Storage
    guardarEnLocalStorage(tarea);

    // Actualizar la tabla
    mostrarTareas();

    // Limpiar el formulario después de enviar
    form.reset();
}

// Función para guardar tarea en el Local Storage
function guardarEnLocalStorage(tarea) {
    let tareas = JSON.parse(localStorage.getItem('tareas')) || [];
    tareas.push(tarea);
    localStorage.setItem('tareas', JSON.stringify(tareas));
}

// Función para mostrar tareas en la tabla
function mostrarTareas() {
    // Limpiar la tabla antes de mostrar los datos actualizados
    taskTable.innerHTML = '';

    // Obtener tareas del Local Storage
    const tareas = JSON.parse(localStorage.getItem('tareas')) || [];

    // Crear filas de la tabla con las tareas almacenadas
    tareas.forEach((tarea, index) => {
        const row = document.createElement('tr');
        row.innerHTML = `
            <td>${index + 1}</td>
            <td>${tarea.nombre}</td>
            <td>${tarea.detalle}</td>
            <td>${tarea.fecha}</td>
            <td>${tarea.hora}</td>
            <td><span class="status ${tarea.estado === 'pendiente' ? 'pending' : 'done'}">${tarea.estado.charAt(0).toUpperCase() + tarea.estado.slice(1)}</span></td>
            <td>
                <button class="btn edit" onclick="editarTarea(${tarea.id})"> <i class="bi bi-pencil-square"> </i> </button>
                <button class="btn delete" onclick="eliminarTarea(${tarea.id})"> <i class="bi bi-trash"> </i> </button>
            </td>
        `;
        taskTable.appendChild(row);
    });
}

// Función para eliminar una tarea
function eliminarTarea(id) {
    let tareas = JSON.parse(localStorage.getItem('tareas')) || [];
    tareas = tareas.filter(tarea => tarea.id !== id);
    localStorage.setItem('tareas', JSON.stringify(tareas));
    mostrarTareas();
}

//Cargar las tareas al cargar la página
window.onload = mostrarTareas;
