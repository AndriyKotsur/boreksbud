
    
    const burgerMenu = () => {
  
      const headerBurger = document.querySelector('.headerBurger');
      const headerMenu = document.querySelector('.headerMenu');
      const body = document.querySelector('.body');
      
      if(headerBurger) {
        
        headerBurger.addEventListener('click', function () {
          headerBurger.classList.toggle('active');
          headerMenu.classList.toggle('active');
          body.classList.toggle('blocked');
        });
      };
    };
  
    burgerMenu();
    
    const langMenu = () => {

        const headerMenu = document.querySelector('.headerMenu');
        const langMenu = document.querySelector('.langMenu');
        const langContainer = document.querySelector('.langContainer');
        
        if(langMenu) {
          
          if (window.matchMedia("(max-width: 768px)").matches && !langMenu.classList.contains('active')) {
            langMenu.classList.add('active');
            headerMenu.prepend(langMenu);
          } else {
            langMenu.classList.remove('active');
            langContainer.prepend(langMenu);
          };
        };
      };

      langMenu();
    
    const headerSubMenu = () => {
      
        const subMenu = document.querySelector('.subMenu');
        const headerSubMenu = document.querySelector('.headerSubMenu');
        
        if(subMenu) {
          
          subMenu.addEventListener('click', () => {
            headerSubMenu.classList.toggle('active');
          });
        }
      };
  
      headerSubMenu();
  
    
let slideIndex = 1;
const slides = document.querySelectorAll(".slidesItem");

const showSlides = (index, items) => {
  if (items.length == 0) {
    return false;
  } else if (index > slides.length) {
    slideIndex = 1;
  } else if (index < 1) {
    slideIndex = items.length;
  }
  for (let i = 0; i < items.length; i++) {
    items[i].classList.remove('active');
  }
  
  items[slideIndex-1].classList.toggle('active');
};

showSlides(slideIndex, slides);

const prevBtn = document.querySelector(".prevBtn");
if (prevBtn) {
  prevBtn.addEventListener("click", function (e) {
    e.preventDefault();
    showSlides((slideIndex -= 1), slides);
  });
};

const nextBtn = document.querySelector(".nextBtn");
if (nextBtn) {
  nextBtn.addEventListener("click", function (e) {
    e.preventDefault();
    showSlides((slideIndex += 1), slides);
  });
};
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

    const setLanguage = () => {

  const headerLang = document.querySelectorAll('.headerLang');

  headerLang.forEach((link) => {
    
      link.addEventListener('click', function() {
        
        let url = window.location.href.split('?')[0];
        let lang = link.getAttribute('data-lang');
          setCookie('lang', lang, {'max-age': 3600});
          location.href = url + '?lang=' + lang;

          return false;
      })
  });
};


setLanguage();

const getCookie = (name) => {

  let matches = document.cookie.match(new RegExp(
    "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
  ));

  return matches ? decodeURIComponent(matches[1]) : undefined;
};

const setCookie = (name, value, options = {}) => {

  options = {
    path: '/',
    ...options
  };

  if (options.expires instanceof Date) {
    options.expires = options.expires.toUTCString();
  }

  let updatedCookie = encodeURIComponent(name) + "=" + encodeURIComponent(value);

  for (let optionKey in options) {
    updatedCookie += "; " + optionKey;
    let optionValue = options[optionKey];
    if (optionValue !== true) {
      updatedCookie += "=" + optionValue;
    }
  }

  document.cookie = updatedCookie;
};

const deleteCookie = (name) => {
  setCookie(name, "", {
    'max-age': -1
  })
};