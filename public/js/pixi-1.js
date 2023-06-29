const app = new PIXI.Application({ background: '#ede6c8', resizeTo: window });

const divElement = document.querySelector('div.illusion-image');
divElement.appendChild(app.view);

const container = new PIXI.Container();
app.stage.addChild(container);

let backgroundSprite;
let wheelSprite;
let rotated = false;

async function init() {
  const backgroundTexture = await PIXI.Assets.load('/storage/pixi/background.png');
  const wheelTexture = await PIXI.Assets.load('/storage/pixi/wheel.png');

  // create sprites from the loaded textures
  backgroundSprite = PIXI.Sprite.from(backgroundTexture);
  wheelSprite = PIXI.Sprite.from(wheelTexture);

  // center the anchor point of each sprite
  backgroundSprite.anchor.set(0.5);
  wheelSprite.anchor.set(0.5);

  // add the background sprite to the container
  container.addChild(backgroundSprite);

  // add the wheel sprite to the container
  container.addChild(wheelSprite);

  centerContainer();
  setupInteraction();
}

// Call the async function
init();

function centerContainer() {
  container.x = app.screen.width / 2;
  container.y = app.screen.height / 2;
}

function setupInteraction() {
  app.view.addEventListener('click', handleClick);
}

function handleClick() {
  rotated = !rotated; // Toggle the rotated state

  const targetRotation = rotated ? -Math.PI / 6 : 0; // Calculate the target rotation based on the rotated state

  const rotationSpeed = 0.02; // Adjust the rotation speed to your preference

  // Animate the rotation using PIXI's ticker
  app.ticker.add(rotate);

  function rotate() {
    const diff = targetRotation - wheelSprite.rotation;

    if (Math.abs(diff) <= rotationSpeed) {
      // Snap to the target rotation when it's close enough
      wheelSprite.rotation = targetRotation;
      app.ticker.remove(rotate);
    } else {
      // Gradually rotate towards the target rotation
      wheelSprite.rotation += rotationSpeed * Math.sign(diff);
    }
  }
}

function resizeHandler() {
  app.renderer.resize(window.innerWidth, window.innerHeight);
  centerContainer();
}

window.addEventListener('resize', resizeHandler);
