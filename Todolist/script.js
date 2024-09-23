// Mostrar el formulario para agregar o editar una tarea
function mostrarFormulario() {
    document.getElementsByClassName("formulario")[0].style.visibility = "visible";
}

// Ocultar el formulario
function ocultarFormulario() {
    document.getElementsByClassName("formulario")[0].style.visibility = "hidden";
}

// Selección de elementos del DOM
const form = document.getElementById('taskForm');
const taskTable = document.querySelector('tbody');
let editMode = false;
let taskToEdit = null;

// Escuchar el evento de envío del formulario
form.addEventListener('submit', function (event) {
    event.preventDefault();
    if (editMode) {
        actualizarTarea();
    } else {
        agregarTarea();
    }
    ocultarFormulario();
});

// Función para agregar una nueva tarea
function agregarTarea() {
    const nombre = document.getElementById('nombre').value;
    const detalle = document.getElementById('detalle').value;
    const fecha = document.getElementById('fecha').value;
    const hora = document.getElementById('hora').value;
    const estado = document.getElementById('estado').value;

    const tarea = {
        id: Date.now(), 
        nombre,
        detalle,
        fecha,
        hora,
        estado
    };

    guardarEnLocalStorage(tarea);
    mostrarTareas();
    form.reset();
    form.style.visibility = 'hidden';
}

// Función para guardar tarea en el Local Storage
function guardarEnLocalStorage(tarea) {
    let tareas = JSON.parse(localStorage.getItem('tareas')) || [];
    tareas.push(tarea);
    localStorage.setItem('tareas', JSON.stringify(tareas));
}

// Función para mostrar tareas en la tabla
function mostrarTareas() {
    taskTable.innerHTML = '';
    const tareas = JSON.parse(localStorage.getItem('tareas')) || [];
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
                <button class="btn edit" onclick="editarTarea(${tarea.id})"><i class="bi bi-pencil-square"></i></button>
                <button class="btn delete" onclick="eliminarTarea(${tarea.id})"><i class="bi bi-trash"></i></button>
            </td>
        `;
        taskTable.appendChild(row);
    });
}

// Función para editar una tarea
function editarTarea(id) {
    let tareas = JSON.parse(localStorage.getItem('tareas')) || [];
    taskToEdit = tareas.find(tarea => tarea.id === id);

    // Llenar el formulario con los datos de la tarea seleccionada
    document.getElementById('nombre').value = taskToEdit.nombre;
    document.getElementById('detalle').value = taskToEdit.detalle;
    document.getElementById('fecha').value = taskToEdit.fecha;
    document.getElementById('hora').value = taskToEdit.hora;
    document.getElementById('estado').value = taskToEdit.estado;

    editMode = true;
    mostrarFormulario();
}

// Función para actualizar la tarea editada
function actualizarTarea() {
    let tareas = JSON.parse(localStorage.getItem('tareas')) || [];
    const index = tareas.findIndex(tarea => tarea.id === taskToEdit.id);

    tareas[index] = {
        ...tareas[index],
        nombre: document.getElementById('nombre').value,
        detalle: document.getElementById('detalle').value,
        fecha: document.getElementById('fecha').value,
        hora: document.getElementById('hora').value,
        estado: document.getElementById('estado').value
    };

    localStorage.setItem('tareas', JSON.stringify(tareas));
    mostrarTareas();
    form.reset();
    editMode = false;
    taskToEdit = null;
}

// Función para eliminar una tarea
function eliminarTarea(id) {
    let tareas = JSON.parse(localStorage.getItem('tareas')) || [];
    tareas = tareas.filter(tarea => tarea.id !== id);
    localStorage.setItem('tareas', JSON.stringify(tareas));
    mostrarTareas();
}

// Cargar las tareas al cargar la página
window.onload = mostrarTareas;
