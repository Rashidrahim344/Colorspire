import fs from 'fs';
import { PNG } from 'pngjs';

const buf = fs.readFileSync('C:/Users/ORI STUDIO LIMITED/.gemini/antigravity-ide/brain/6d1e24f3-6104-4455-9fa0-64ff150b9a3e/.user_uploaded/media_1788555038343.png');
const png = PNG.sync.read(buf);

for (let y = 22; y <= 72; y++) {
  let line = '';
  for (let x = 118; x < 300; x++) {
    const idx = (png.width * y + x) << 2;
    const a = png.data[idx + 3];
    const r = png.data[idx];
    if (a > 100 && r < 100) {
      line += '#';
    } else {
      line += ' ';
    }
  }
  console.log(`${y.toString().padStart(2, ' ')}: ${line}`);
}
