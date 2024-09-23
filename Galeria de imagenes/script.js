
document.getElementById('imageForm').addEventListener('submit', function(event) {
    event.preventDefault();

    let imgName = document.getElementById('imgName').value;
    //let imgDetail = document.getElementById('imgDetail').value;
    let fileInput = document.getElementById('myFile');

    if (!fileInput.files || fileInput.files.length === 0) {
      alert('Seleccione una imagen.');
      return;
    }

    let file = fileInput.files[0];
    let reader = new FileReader();

    reader.onload = function(event) {
      let imageData = event.target.result;
      saveImage(imgName,imageData);
    };

    reader.readAsDataURL(file);
});

function saveImage(name,imageData) {
    let images = JSON.parse(localStorage.getItem('images')) || [];
    images.push({ name: name,image: imageData });
    localStorage.setItem('images', JSON.stringify(images));

    displayImages();
}

function displayImages() {
    let images = JSON.parse(localStorage.getItem('images')) || [];
    let imageList = document.getElementById('imageList');
    imageList.innerHTML = '';

    images.forEach(function(image, index) {
      let container = document.createElement('div');
      container.classList.add('image-container');

      let imgElement = document.createElement('img');
      imgElement.src = image.image;
      imgElement.alt = image.name;

      let nameElement = document.createElement('h5');
      nameElement.textContent = image.name;

      // Agregar imagen y nombre al contenedor
      container.appendChild(imgElement);
      container.appendChild(nameElement);

      imageList.appendChild(container);
    });
}

// Mostrar imágenes almacenadas al cargar la página
displayImages();
