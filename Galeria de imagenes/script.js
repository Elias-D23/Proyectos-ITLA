const fulImgBox = document.getElementById("fulImgBox");

const fulImg = document.getElementById("fulImg")

function openFulImg( imgReference){
    fulImgBox.style.display = "flex"

    fulImg.src = imgReference;
}    
 
function closeImg(){

    fulImgBox.style.display = "none"
}

