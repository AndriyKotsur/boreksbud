const popUp = document.querySelector('.popUp');
const popUpSpinner = document.querySelector('.popUpSpinner');
const popUpMsg = document.querySelector('.popUpMsg');

const formSend = (formData) => {

    popUp.classList.add('active');
    popUpSpinner.classList.add('active');
    
    fetch('includes/mail.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
                'Accept-Charset': 'utf-8'
            },
            body: JSON.stringify(formData)
        })
        .then(res => {
          console.log(res);
        })
        .then(function() {
          popUpSpinner.classList.remove('active');
          popUpMsg.classList.add('active');
          
          setTimeout(()=>  {
            popUp.classList.remove('active')
          }, 4000);
        })
        .catch(error => console.log(error));
};

const formValidation = (name, phone, email) => {

  const errMsg = document.querySelector('.errMsg');
  
  const messages = {
    name_email: "Enter the valid name and email address",
    phone_email: "Enter the valid phone and email address",
    name_phone: "Enter the valid name and phone",
    name: "Enter the valid name",
    email: "Enter the valid email address",
    message: "Fill the required fields"
  };

  let errKey = null;

  if(!name.value && !phone.value && !email.value) {
    errKey = 'message';
  } else if(!phone.value && !email.value) {
    errKey = 'phone_email';
  } else if(!name.value && !email.value) {
    errKey = 'name_email'
  } else if(!name.value && !phone.value) {
    errKey = 'name_phone';
  } else if(!name.value) {
    errKey = 'name';
  } else if(!phone.value) {
    errKey = 'phone';
  } else if(!email.value) {
    errKey = 'email';
  }

  if(errKey) {
    errMsg.innerHTML = messages[errKey];
    errMsg.classList.add('active');
    return false;
  } else if(!errKey){
    errMsg.classList.remove('active');
  };
  console.log(errKey);
};

const formData = () => {

    const form = document.getElementsByTagName('form');

    const inputName = document.querySelector('.inputName');
    const inputPhone = document.querySelector('.inputPhone');
    const inputEmail = document.querySelector('.inputEmail');

    for (let i = 0; i < form.length; i++) {
      form[i].addEventListener('submit', function (e) {
        e.preventDefault();

        formValidation(inputName, inputPhone, inputEmail);

        let formData = new FormData(this);
        formData = Object.fromEntries(formData);
    
        formSend(formData);
        this.reset();
      });
    }
};

formData();
