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

  backgroundSprite = PIXI.Sprite.from(backgroundTexture);
  wheelSprite = PIXI.Sprite.from(wheelTexture);

  backgroundSprite.anchor.set(0.5);
  wheelSprite.anchor.set(0.5);

  container.addChild(backgroundSprite);

  container.addChild(wheelSprite);

  centerContainer();
  setupInteraction();
}

init();

function centerContainer() {
  container.x = app.screen.width / 2;
  container.y = app.screen.height / 2;
}

function setupInteraction() {
  app.view.addEventListener('click', handleClick);
}

function handleClick() {
  rotated = !rotated;

  const targetRotation = rotated ? -Math.PI / 6 : 0; 

  const rotationSpeed = 0.015 ;

  app.ticker.add(rotate);

  function rotate() {
    const diff = targetRotation - wheelSprite.rotation;

    if (Math.abs(diff) <= rotationSpeed) {

      wheelSprite.rotation = targetRotation;
      app.ticker.remove(rotate);
    } else {
      wheelSprite.rotation += rotationSpeed * Math.sign(diff);
    }
  }
}

function resizeHandler() {
  app.renderer.resize(window.innerWidth, window.innerHeight);
  centerContainer();
}

window.addEventListener('resize', resizeHandler);
