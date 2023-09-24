const modalTriggers = document.querySelectorAll('.popup-trigger')
const modalCloseTrigger = document.querySelector('.popup-modal__close')
// const bodyBlackout = document.querySelector('.body-blackout')

modalTriggers.forEach(trigger => {
  trigger.addEventListener('click', () => {
      const { popupTrigger } = trigger.dataset
      console.log(popupTrigger);
    const popupModal = document.querySelector(`[data-popup-modal="${popupTrigger}"]`)

    popupModal.classList.add('is--visible')
    // bodyBlackout.classList.add('is-blacked-out')
    
    popupModal.querySelector('.popup-modal__close').addEventListener('click', () => {
       popupModal.classList.remove('is--visible')
      //  bodyBlackout.classList.remove('is-blacked-out')
    })
    
    // popupModal.addEventListener('click', () => {
    //   // TODO: Turn into a function to close modal
    //   popupModal.classList.remove('is--visible')
    //   // bodyBlackout.classList.remove('is-blacked-out')
    // })
    // hides the modal when the user clicks outside the modal
window.addEventListener('click', function(event) {
  // check if the event happened on the modal-background
  if (event.target === popupModal) {
    // hides the modal
    popupModal.classList.remove('is--visible')

    // modalBackground.style.display = 'none';
  }
});
  })
})
