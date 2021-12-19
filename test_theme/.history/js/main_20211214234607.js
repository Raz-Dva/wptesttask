// -------------------- animate scrolling anchor ----------
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
    e.preventDefault();
    document.querySelector(this.getAttribute('href')).scrollIntoView({
      behavior: 'smooth'
    });
  });
});

// ---------  modal -----------
const btnSend = document.getElementById('btn_send');
const btnCloseModal = document.getElementById('btn_close');
const modal = document.getElementById('modal');
const btnEdit = document.getElementById('btn_edit');
const btnSubmit = document.getElementById('btn_submit');
const contactForm = document.getElementsByClassName('wpcf7-form')[0];

const dataUser = {
  name: document.getElementById('list_item_name'),
  email: document.getElementById('list_item_email'),
  theme: document.getElementById('list_item_theme'),
  message: document.getElementById('list_item_message')
};

btnSend.addEventListener('click', (e) => {
  e.preventDefault();
  const formData = new FormData(contactForm);
  // for (let [name, value] of formData) {
  //   if (!value) {
  //     alert('All fields can be filled')
  //     return
  //   }
  //   dataUser[name].textContent = value;
  // }
  modal.classList.add('modal_open');
})

btnCloseModal.addEventListener('click', closeModal);
btnEdit.addEventListener('click', closeModal);
btnSubmit.addEventListener('click', (e) => {
  e.preventDefault();
  modal.classList.remove('modal_open');
  // console.log('Выслать форму')
});

function closeModal(e) {
  e.preventDefault();
  modal.classList.remove('modal_open');
}