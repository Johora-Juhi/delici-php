const file = document.getElementById('file');
const fileLabel = document.getElementById('fileLabel');


file.addEventListener('change', () => {
  if (file.files.length > 0) {
    fileLabel.innerHTML = file.files[0].name;
  } else {
    fileLabel.innerHTML = 'Select Image';
  }
});

// function toggleSidebar() {
//   const sidebar = document.querySelector('.s-sidebar__nav');
//   if (window.innerWidth < 672) {
//     sidebar.classList.toggle('s-sidebar__nav--closed');
//   } else if (window.innerWidth >= 672 && window.innerWidth < 1024) {
//     sidebar.classList.toggle('s-sidebar__nav__medium');
//   }
// }

