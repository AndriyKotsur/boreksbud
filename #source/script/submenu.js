
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
  