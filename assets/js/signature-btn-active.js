{
let canvas = document.getElementById('signature-canvas');
const submitButton = document.getElementById('submit-button');

function updateButton() {
  const imageData = canvas.toDataURL();  // get the image data from the canvas
  if (imageData.length > 0) {  // check if the canvas is empty
    submitButton.disabled = false;  // enable the button if the canvas is not empty
  } else {
    submitButton.disabled = true;  // disable the button if the canvas is empty
  }
}

canvas.addEventListener('mouseup', updateButton);  // update the button when the mouse is released
canvas.addEventListener('touchstart', updateButton);  // update the button when a touch gesture starts
}
