  // Get references to the buttons
  const leftButton = document.getElementById('leftButton');
  const rightButton = document.getElementById('rightButton');

  // Add click event listeners to the buttons
  leftButton.addEventListener('click', scrollLeft);
  rightButton.addEventListener('click', scrollRight);

  // Scroll 381px to the left smoothly
  function scrollLeft() {
    window.scrollBy({
      left: -381,
      behavior: 'smooth'
    });
  }

  // Scroll 381px to the right smoothly
  function scrollRight() {
    window.scrollBy({
      left: 381,
      behavior: 'smooth'
    });
  }
