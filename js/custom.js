const file = document.getElementById('file');
const fileLabel = document.getElementById('fileLabel');


file.addEventListener('change', () => {
  if (file.files.length > 0) {
    fileLabel.innerHTML = file.files[0].name;
  } else {
    fileLabel.innerHTML = 'Select Image';
  }
});
