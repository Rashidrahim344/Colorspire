import fs from 'fs';

// Read super-text.svg
const superSvg = fs.readFileSync('super-text.svg', 'utf8');
const pathMatch = superSvg.match(/<path d="([^"]+)"/);
if (!pathMatch) {
  console.error('Path not found');
  process.exit(1);
}
const textD = pathMatch[1];

// Let's scale the gold icon from 542 to 768:
// 768 / 542 = 1.41697417
const scale = 768 / 542;

// Also let's extract the base64 of media_1788555038343.png so it works without relative path issues
const pngBuf = fs.readFileSync('C:/Users/ORI STUDIO LIMITED/.gemini/antigravity-ide/brain/6d1e24f3-6104-4455-9fa0-64ff150b9a3e/.user_uploaded/media_1788555038343.png');
const base64Png = 'data:image/png;base64,' + pngBuf.toString('base64');

const html = `<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Logo Comparison</title>
<style>
  body { background: #e2e8f0; font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif; padding: 40px; }
  .card { background: white; padding: 24px; margin-bottom: 24px; border-radius: 12px; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.1); width: fit-content; }
  .card.dark { background: #0f172a; }
  .overlay-container { position: relative; width: 600px; height: 192px; border: 1px dashed #94a3b8; }
  .overlay-container img, .overlay-container svg { position: absolute; top: 0; left: 0; width: 600px; height: 192px; }
</style>
</head>
<body>
  <h2>1. Original Uploaded PNG (rendered at 600x192)</h2>
  <div class="card">
    <img src="${base64Png}" width="600" height="192" style="display:block;" />
  </div>

  <h2>2. New Traced SVG Vector (viewBox 0 0 2400 768)</h2>
  <div class="card">
    <svg viewBox="0 0 2400 768" width="600" height="192" fill="none" style="display:block;">
      <!-- Gold Icon -->
      <g transform="scale(${scale})">
        <path
          fill="#e5aa16"
          d="M540.692 379.366c-.181 89.292-71.547 161.581-159.522 161.581l-217.279 0c-90.516 0-163.889-74.475-163.889-166.346l0-208.257c0-91.871 73.373-166.346 163.889-166.346l212.872 0c90.403 0 163.732 74.302 163.889 166.058.023 14.088.04 23.099.04 23.099l-186.881 0 187.081 189.886-.201 0 0 .326Zm-358.491-342.789l0 467.791 134.119-136.127c2.822-2.864 6.647-4.473 10.64-4.473l177.609 0-322.368-327.191Z"
        ></path>
      </g>
      <!-- Text -->
      <path fill="#1e293b" fill-rule="evenodd" d="${textD}"></path>
    </svg>
  </div>

  <h2>3. Dark Mode SVG Preview</h2>
  <div class="card dark">
    <svg viewBox="0 0 2400 768" width="600" height="192" fill="none" style="display:block;">
      <g transform="scale(${scale})">
        <path
          fill="#e5aa16"
          d="M540.692 379.366c-.181 89.292-71.547 161.581-159.522 161.581l-217.279 0c-90.516 0-163.889-74.475-163.889-166.346l0-208.257c0-91.871 73.373-166.346 163.889-166.346l212.872 0c90.403 0 163.732 74.302 163.889 166.058.023 14.088.04 23.099.04 23.099l-186.881 0 187.081 189.886-.201 0 0 .326Zm-358.491-342.789l0 467.791 134.119-136.127c2.822-2.864 6.647-4.473 10.64-4.473l177.609 0-322.368-327.191Z"
        ></path>
      </g>
      <path fill="#f8fafc" fill-rule="evenodd" d="${textD}"></path>
    </svg>
  </div>

  <h2>4. Exact Pixel Alignment Overlay (Red SVG vector over Original PNG)</h2>
  <div class="card">
    <div class="overlay-container">
      <img src="${base64Png}" />
      <svg viewBox="0 0 2400 768" fill="none" style="opacity: 0.7;">
        <path fill="#ef4444" fill-rule="evenodd" d="${textD}"></path>
      </svg>
    </div>
  </div>
</body>
</html>`;

fs.writeFileSync('compare-test.html', html);
console.log('compare-test.html created successfully!');
