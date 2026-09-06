import fs from 'fs';
import { PNG } from 'pngjs';
import potrace from 'potrace';

const buf = fs.readFileSync('C:/Users/ORI STUDIO LIMITED/.gemini/antigravity-ide/brain/6d1e24f3-6104-4455-9fa0-64ff150b9a3e/.user_uploaded/media_1788555038343.png');
const src = PNG.sync.read(buf);

const scale = 8;
const dstW = src.width * scale;
const dstH = src.height * scale;
const dst = new PNG({ width: dstW, height: dstH });

// Extract ONLY the dark text, with 8x bilinear interpolation on alpha
for (let dy = 0; dy < dstH; dy++) {
  const sy = dy / scale;
  const y0 = Math.floor(sy);
  const y1 = Math.min(src.height - 1, y0 + 1);
  const fy = sy - y0;

  for (let dx = 0; dx < dstW; dx++) {
    const sx = dx / scale;
    const x0 = Math.floor(sx);
    const x1 = Math.min(src.width - 1, x0 + 1);
    const fx = sx - x0;

    // Helper to get dark text alpha at (x, y)
    function getTextAlpha(x, y) {
      const idx = (src.width * y + x) << 2;
      const r = src.data[idx];
      const g = src.data[idx + 1];
      const b = src.data[idx + 2];
      const a = src.data[idx + 3];
      // Gold icon is on left (x < 110)
      if (x < 110) return 0;
      if (r > 150 && g > 100 && b < 100) return 0;
      return a;
    }

    const a00 = getTextAlpha(x0, y0);
    const a10 = getTextAlpha(x1, y0);
    const a01 = getTextAlpha(x0, y1);
    const a11 = getTextAlpha(x1, y1);

    const aTop = a00 * (1 - fx) + a10 * fx;
    const aBot = a01 * (1 - fx) + a11 * fx;
    const alpha = aTop * (1 - fy) + aBot * fy;

    const dIdx = (dstW * dy + dx) << 2;
    // Potrace looks for black pixels (< threshold)
    if (alpha > 120) {
      dst.data[dIdx] = 0;
      dst.data[dIdx + 1] = 0;
      dst.data[dIdx + 2] = 0;
      dst.data[dIdx + 3] = 255;
    } else {
      dst.data[dIdx] = 255;
      dst.data[dIdx + 1] = 255;
      dst.data[dIdx + 2] = 255;
      dst.data[dIdx + 3] = 255;
    }
  }
}

const dstBuf = PNG.sync.write(dst);
fs.writeFileSync('super-text.png', dstBuf);
console.log('Wrote super-text.png');

potrace.trace(dstBuf, {
  threshold: 128,
  turdSize: 4,
  optTolerance: 0.15,
  alphaMax: 1.0,
}, (err, svg) => {
  if (err) throw err;
  fs.writeFileSync('super-text.svg', svg);
  console.log('Traced super-text.svg generated!');
});
