
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