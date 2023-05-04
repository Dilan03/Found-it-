const crear_post_btn = document.getElementById('crear_post_btn');
const crear_post_form = document.getElementById('crear_post_form');
const cerrar_modal = document.getElementById('cerrar_modal');
const login_btn = document.getElementById('login_btn');
const login_form = document.getElementById('login_form');
const registro_btn = document.getElementById('registro_btn');
const registro_form = document.getElementById('registro_form');

const body = document.body

if (registro_btn) {
   registro_btn.addEventListener('click', () => {
      toggleModal(login_form);
      toggleModal(registro_form);
   });
}

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
   } else if (e.target.id == 'registro_form') {
      toggleModal(registro_form);
   }

   if (e.target.parentElement.id != 'options_desplegable' && options_btn.classList.contains('active') && e.target.parentElement.id != 'options_btn') {
      options_desplegable.classList.toggle('hideElement');
      options_btn.classList.remove('active');
   }

   if (e.target.id == 'cerrar_modal') {
      e.preventDefault()
      const currentModal = document.getElementById(e.target.parentElement.parentElement.parentElement.id);
      toggleModal(currentModal);
   }
});

const toggleModal = (modal) => {
   window.scrollTo(0, 0);
   modal.classList.toggle('hideElement');
   body.classList.toggle('bloquear');
}