/*
const contactForm = document.querySelector('.php-email-form')
const nome = document.querySelector('.nome')
const telefone = document.querySelector('.telefone')
const email = document.querySelector('.email')
const empresa = document.querySelector('.empresa')
const mensagem = document.querySelector('.mensagem')

const submit = document.querySelector('.submit-form')

// teste
function validar() {
  var nome = document.getElementById('name').value
  if (nome.value == "" || telefone.value == "" || email.value == "" || empresa.value == "" || mensagem.value == "") {
   // enable alert
    document.querySelector('.alertVazio').style.display = 'block';

    // remove the alert
    setTimeout(() => {
      document.querySelector('.alertVazio').style.display = 'none';
    }, 3000);

    return true;
  } else {
   // enable alert
   document.querySelector('.alert').style.display = 'block';

   // remove the alert
   setTimeout(() => {
      document.querySelector('.alert').style.display = 'none';
    }, 3000);

  }
}


// teste

submit.addEventListener('click', e => {
  validar()
 e.preventDefault()

   .then(() => {
    contactForm.reset()

   })
})
*/