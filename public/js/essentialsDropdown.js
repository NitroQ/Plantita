// JS FOR ESSENTIALS DROPDOWN
  
  
    // get elements by ID
    // trigger button for dropdown
    const essential = document.getElementById('essentialsDropdownBtn')
    // dropdown menu
    const essentialDropdownMenu = document.getElementById('essentialsDropdownMenu')
    // icon
    const essentialIcon = document.getElementById('essentialsDown')

    let essentialIsOpen = false;

    const handleEssentialsDropdown = () => {
      essential.addEventListener('click', () => {
        if (essentialIsOpen) {
          // If the dropdown is open, close it
          essentialIsOpen = false;
          essentialDropdownMenu.classList.remove('h-auto', 'block');
          essentialDropdownMenu.classList.add('h-0', 'hidden');
          essentialIcon.classList.remove('bx-chevron-down')
          essentialIcon.classList.add('bx-chevron-right')
        } else {
          // If the dropdown is closed, open it
          essentialIsOpen = true;
          essentialDropdownMenu.classList.remove('h-0', 'hidden');
          essentialDropdownMenu.classList.add('h-auto', 'block');
          essentialIcon.classList.remove('bx-chevron-right')
          essentialIcon.classList.add('bx-chevron-down')
        }
      })
    }
    handleEssentialsDropdown();