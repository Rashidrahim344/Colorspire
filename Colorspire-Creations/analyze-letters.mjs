import fs from 'fs';
import { PNG } from 'pngjs';

const buf = fs.readFileSync('C:/Users/ORI STUDIO LIMITED/.gemini/antigravity-ide/brain/6d1e24f3-6104-4455-9fa0-64ff150b9a3e/.user_uploaded/media_1788555038343.png');
const png = PNG.sync.read(buf);

// Find columns with black pixels in top half (y: 20 to 46) and bottom half (y: 47 to 72)
function getRowStats(minY, maxY) {
  const colCounts = new Array(png.width).fill(0);
  for (let y = minY; y <= maxY; y++) {
    for (let x = 0; x < png.width; x++) {
      const idx = (png.width * y + x) << 2;
      const a = png.data[idx + 3];
      const r = png.data[idx];
      const g = png.data[idx + 1];
      const b = png.data[idx + 2];
      // dark pixel
      if (a > 100 && r < 100 && g < 100 && b < 100) {
        colCounts[x]++;
      }
    }
  }

  // print segments where colCounts > 0
  const segments = [];
  let inSeg = false;
  let start = 0;
  for (let x = 0; x < png.width; x++) {
    if (colCounts[x] > 0 && !inSeg) {
      inSeg = true;
      start = x;
    } else if (colCounts[x] === 0 && inSeg) {
      inSeg = false;
      segments.push({ start, end: x - 1, width: x - start });
    }
  }
  if (inSeg) segments.push({ start, end: png.width - 1, width: png.width - start });
  return segments;
}

console.log('Line 1 (COLORSPIRE):');
console.log(getRowStats(20, 46));

console.log('Line 2 (CREATIONS):');
console.log(getRowStats(47, 72));
