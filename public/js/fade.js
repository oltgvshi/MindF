document.addEventListener("DOMContentLoaded", function() {
  const illusionsContainer = document.querySelector(".illusions");

  if (illusionsContainer) {
    const illusionElements = illusionsContainer.getElementsByClassName("illusion");

    function animateIllusions(index) {
      if (index < illusionElements.length) {
        const currentElement = illusionElements[index];

        const sprite = new Image();
        sprite.src = currentElement.href;

        const app = {
          stage: {
            addChild: function(child) {
              currentElement.appendChild(child);
            }
          },
          destroy: function(removeView) {
            currentElement.removeChild(sprite);
            if (removeView) {
              currentElement.style.opacity = 0;
            }
          }
        };

        setTimeout(function() {
          currentElement.style.opacity = 1;
          animateIllusions(index + 1);
        }, 200); // Adjust the delay time (in milliseconds) to control the timing of appearance
      }
    }

    animateIllusions(0);
  }
});
