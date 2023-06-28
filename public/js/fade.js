document.addEventListener("DOMContentLoaded", function() {
    const illusionsContainer = document.querySelector(".illusions");
  
    if (illusionsContainer) {
      const illusionElements = illusionsContainer.getElementsByClassName("illusion");
      
      function animateIllusions(index) {
        if (index < illusionElements.length) {
          const currentElement = illusionElements[index];
          
          const app = new PIXI.Application({ transparent: true });
          const sprite = PIXI.Sprite.from(currentElement.href);
          
          app.stage.addChild(sprite);
          
          setTimeout(function() {
            currentElement.style.opacity = 1;
            app.destroy(true);
            animateIllusions(index + 1);
          }, 400); // Adjust the delay time (in milliseconds) to control the timing of appearance
          
        }
      }
      
      animateIllusions(0);
    }
  });
  