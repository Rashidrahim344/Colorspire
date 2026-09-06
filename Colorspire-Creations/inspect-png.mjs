import fs from 'fs';
import { PNG } from 'pngjs';
import potrace from 'potrace';

const filePath = 'C:/Users/ORI STUDIO LIMITED/.gemini/antigravity-ide/brain/6d1e24f3-6104-4455-9fa0-64ff150b9a3e/.user_uploaded/media_1788555038343.png';
const buffer = fs.readFileSync(filePath);

const png = PNG.sync.read(buffer);
console.log(`PNG loaded: ${png.width}x${png.height}`);

// Analyze colors
let minDarkX = Infinity, maxDarkX = -Infinity, minDarkY = Infinity, maxDarkY = -Infinity;
let minGoldX = Infinity, maxGoldX = -Infinity, minGoldY = Infinity, maxGoldY = -Infinity;

// Separate into text-only bitmap and icon-only bitmap for tracing
const textPng = new PNG({ width: png.width, height: png.height });
const iconPng = new PNG({ width: png.width, height: png.height });

for (let y = 0; y < png.height; y++) {
  for (let x = 0; x < png.width; x++) {
    const idx = (png.width * y + x) << 2;
    const r = png.data[idx];
    const g = png.data[idx + 1];
    const b = png.data[idx + 2];
    const a = png.data[idx + 3];

    // default transparent
    textPng.data[idx] = 255;
    textPng.data[idx + 1] = 255;
    textPng.data[idx + 2] = 255;
    textPng.data[idx + 3] = 0;

    iconPng.data[idx] = 255;
    iconPng.data[idx + 1] = 255;
    iconPng.data[idx + 2] = 255;
    iconPng.data[idx + 3] = 0;

    if (a > 20) {
      // Check if yellowish or dark
      // Gold: r > 180, g > 130, b < 100
      if (r > 150 && g > 100 && b < 100) {
        minGoldX = Math.min(minGoldX, x);
        maxGoldX = Math.max(maxGoldX, x);
        minGoldY = Math.min(minGoldY, y);
        maxGoldY = Math.max(maxGoldY, y);

        // Fill icon as black for tracing
        iconPng.data[idx] = 0;
        iconPng.data[idx + 1] = 0;
        iconPng.data[idx + 2] = 0;
        iconPng.data[idx + 3] = a;
      } else {
        // Dark text
        minDarkX = Math.min(minDarkX, x);
        maxDarkX = Math.max(maxDarkX, x);
        minDarkY = Math.min(minDarkY, y);
        maxDarkY = Math.max(maxDarkY, y);

        // Fill text as black on white for potrace
        textPng.data[idx] = 0;
        textPng.data[idx + 1] = 0;
        textPng.data[idx + 2] = 0;
        textPng.data[idx + 3] = a;
      }
    }
  }
}

console.log('Gold icon bounds:', { minGoldX, maxGoldX, minGoldY, maxGoldY });
console.log('Dark text bounds:', { minDarkX, maxDarkX, minDarkY, maxDarkY });

// Trace text using potrace
const textBuffer = PNG.sync.write(textPng);
potrace.trace(textBuffer, { threshold: 128 }, (err, svg) => {
  if (err) throw err;
  fs.writeFileSync('traced-text.svg', svg);
  console.log('Traced text SVG generated!');
});
