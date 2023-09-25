const modalTriggers = document.querySelectorAll('.popup-trigger')
const modalCloseTrigger = document.querySelector('.popup-modal__close')

modalTriggers.forEach(trigger => {
  trigger.addEventListener('click', () => {
    const { popupTrigger } = trigger.dataset
    console.log(popupTrigger);
    const popupModal = document.querySelector(`[data-popup-modal="${popupTrigger}"]`)

    popupModal.classList.add('is--visible')

    const file = document.getElementById(`file${popupTrigger}`);
    console.log(file);
    const fileLabel = document.getElementById(`fileLabel${popupTrigger}`);
    console.log(fileLabel);
   file.addEventListener('change', () => {
       if (file.files.length > 0) {
           const fileName = file.files[0].name;
           fileLabel.textContent = fileName; // Try using textContent
       } else {
           fileLabel.textContent = 'Select Image';
       }
   });
    popupModal.querySelector('.popup-modal__close').addEventListener('click', () => {
      popupModal.classList.remove('is--visible')
    })

    // hides the modal when the user clicks outside the modal
    window.addEventListener('click', function (event) {
      // check if the event happened on the modal-background
      if (event.target === popupModal) {
        // hides the modal
        popupModal.classList.remove('is--visible')

      }
    });
  })
})
