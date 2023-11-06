    // get elements by ID
    // trigger button for dropdown
    const plants = document.getElementById('plantsDropdownBtn')
    // dropdown menu
    const dropdownMenu = document.getElementById('plantsDropdownMenu')
    // icon
    const plantsIcon = document.getElementById('plantsDown')

    let plantsIsOpen = false;

    const handlePlantsDropdown = () => {
      plants.addEventListener('click', () => {
        if (plantsIsOpen) {
          // If the dropdown is open, close it
          plantsIsOpen = false;
          dropdownMenu.classList.remove('h-auto', 'block');
          dropdownMenu.classList.add('h-0', 'hidden');
          plantsIcon.classList.remove('bx-chevron-down')
          plantsIcon.classList.add('bx-chevron-right')
        } else {
          // If the dropdown is closed, open it
          plantsIsOpen = true;
          dropdownMenu.classList.remove('h-0', 'hidden');
          dropdownMenu.classList.add('h-auto', 'block');
          plantsIcon.classList.remove('bx-chevron-right')
          plantsIcon.classList.add('bx-chevron-down')
        }
      })
    }
    handlePlantsDropdown();