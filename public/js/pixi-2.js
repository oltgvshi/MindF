      // Create a PixiJS application
      const app = new PIXI.Application({
        width: window.innerWidth,
        height: window.innerHeight,
        backgroundColor: '#000',
      });

      // Add the PixiJS canvas to the HTML document
      const divElement = document.querySelector('div.illusion-image');
      divElement.appendChild(app.view);

      // Calculate the radius of the spiral container
      const maxRadius = Math.min(app.renderer.width, app.renderer.height) * 0.4;

      // Create a container for the spiral
      const spiralContainer = new PIXI.Container();
      spiralContainer.x = app.renderer.width / 2;
      spiralContainer.y = app.renderer.height / 2;
      app.stage.addChild(spiralContainer);

      // Create the spiral shape
      const spiral = new PIXI.Graphics();
      spiralContainer.addChild(spiral);

      // Configure the spiral parameters
      const numTurns = 25;
      const segments = 1500;
      const lineColor = 0xffffff;
      const lineWidth = 13;

      // Draw the spiral
      spiral.lineStyle(lineWidth, lineColor);

      for (let i = 0; i <= segments; i++) {
        const t = (i / segments) * numTurns * Math.PI * 2;
        const radius = (i / segments) * maxRadius * 3;

        const x = Math.cos(t) * radius;
        const y = Math.sin(t) * radius;

        spiral.lineTo(x, y);
      }

      // Animate the spiral
      app.ticker.add(() => {
        spiralContainer.rotation += 0.4;
      });