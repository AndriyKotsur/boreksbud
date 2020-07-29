
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