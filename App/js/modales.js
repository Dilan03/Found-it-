const crear_post_btn = document.getElementById('crear_post_btn');
const crear_post_form = document.getElementById('crear_post_form');
const cerrar_modal = document.getElementById('cerrar_modal');
const login_btn = document.getElementById('login_btn');
const login_form = document.getElementById('login_form');

const body = document.body

if (login_btn) {
   login_btn.addEventListener('click', () => {
      toggleModal(login_form);
   });
}

if (crear_post_btn) {
   crear_post_btn.addEventListener('click', () => {
      toggleModal(crear_post_form);
   });
}

window.addEventListener('click', (e) => {
   if (e.target.id == 'crear_post_form') {
      toggleModal(crear_post_form);
   } else if (e.target.id == 'login_form') {
      toggleModal(login_form);
   }

   if (e.target.id == 'cerrar_modal') {
      e.preventDefault()
      const currentModal = document.getElementById(e.target.parentElement.parentElement.parentElement.id);
      toggleModal(currentModal);
   }
});

const toggleModal = (modal) => {
   modal.classList.toggle('hideElement');
   body.classList.toggle('bloquear');
}