<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="noindex">
<meta name="color-scheme" content="light dark">
<title>Tu app PHP está publicada</title>
<style>
:root{--bg:#f4f4f2;--card:#fafaf9;--edge:#e4e4e7;--text:#3f3f46;--heading:#18181b;--shadow:0 1px 2px rgba(24,24,27,.04),0 24px 48px -28px rgba(24,24,27,.28)}
@media (prefers-color-scheme:dark){:root{--bg:#000;--card:#111113;--edge:#262626;--text:#a8a8a8;--heading:#fff;--shadow:0 1px 2px rgba(0,0,0,.4),0 24px 48px -28px rgba(0,0,0,.8)}}
*{box-sizing:border-box}
html,body{margin:0}
body{min-height:100vh;display:flex;align-items:center;justify-content:center;padding:24px 16px;background:var(--bg);color:var(--text);font:16px/1.6 ui-sans-serif,system-ui,-apple-system,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif;-webkit-font-smoothing:antialiased}
main{width:100%;max-width:520px;background:var(--card);border:1px solid var(--edge);border-radius:16px;box-shadow:var(--shadow);padding:40px 36px;text-align:center}
.logo{display:block;width:168px;height:auto;margin:0 auto 32px;color:var(--heading)}
h1{margin:0 0 12px;color:var(--heading);font-size:clamp(22px,5.4vw,28px);line-height:1.25;font-weight:700;letter-spacing:-.015em;text-wrap:balance}
p{margin:0}
@media (max-width:480px){main{padding:32px 22px}.logo{width:148px;margin-bottom:28px}}
</style>
</head>
<body>
<main>
<svg class="logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 590.57 122.21" role="img" aria-label="Full Hosting"><g fill="currentColor"><path d="M170.82,34.55h38.36v10.08h-26.39v15.16h24.78v9.93h-24.78v24.68h-11.97v-59.86Z"/><path d="M253.27,81.05c0,6.51.09,11.04.18,13.35h-11.55c-.26-1.37-.35-3.29-.43-5.43-2.79,4.73-6.83,6.22-12.44,6.22-9.04,0-13.97-5.67-13.97-15.85v-29.09h11.8v27.12c0,4.76,1.69,8.05,6.56,8.05s7.96-3.07,7.96-11v-24.17h11.89v30.8Z"/><path d="M263.6,94.4v-60.26h3.12c4.83,0,8.75,3.92,8.75,8.75v51.51h-11.87Z"/><path d="M285.78,94.4v-60.26h3.12c4.83,0,8.75,3.92,8.75,8.75v51.51h-11.87Z"/><path d="M317.09,34.55h6.23v24.94h34.42v-24.94h6.23v59.86h-6.23v-29.4h-34.42v29.4h-6.23v-59.86Z"/><path d="M414.72,72.34c0,12.42-6.99,23.12-20.25,23.12-12.2,0-19.69-9.75-19.69-23s7.18-23.06,20.16-23.06c11.93,0,19.78,9.14,19.78,22.94ZM380.88,72.42c0,10.09,5.26,17.88,13.93,17.88s13.81-7.3,13.81-17.87-4.92-17.9-13.99-17.9-13.75,7.57-13.75,17.89Z"/><path d="M426.71,82.07c1.39,5.3,5.21,8.45,11.7,8.45,7.2,0,10.08-3.23,10.08-7.73s-2.07-6.81-11.25-9.03c-11.9-2.88-14.62-6.49-14.62-12.37s4.57-12,15.13-12,15.28,6.29,15.92,12.48h-5.74c-.72-3.3-3.28-7.59-10.42-7.59s-9,3.41-9,6.63c0,3.7,1.97,5.54,10.38,7.56,12.82,3.07,15.71,7.3,15.71,13.86,0,7.87-6.32,13.11-16.34,13.11-10.65,0-16.25-5.49-17.43-13.38h5.88Z"/><path d="M465.57,50.44v-15.9h5.85v15.9h10.12v5.07h-10.12v27.28c0,4.63,1.05,7.16,5.16,7.16,1.2,0,2.92-.07,4.23-.45v4.71c-1.67.65-4,.8-5.96.8-6.18,0-9.28-3.15-9.28-10.3v-34.27Z"/><path d="M489.15,50.44h5.85v43.96h-5.85v-43.96Z"/><path d="M507.94,61.52c0-3.84,0-7.61-.09-11.08h5.71c.19,1.36.29,6.57.23,7.84,1.85-4.16,5.45-8.89,14.25-8.89,8.01,0,14.73,4.69,14.73,16.62v28.39h-5.85v-27.56c0-7.29-2.95-12.1-10.17-12.1-9.47,0-12.95,7.61-12.95,16.85v22.81h-5.85v-32.88Z"/><path d="M590.41,90.97c0,14.08-6.05,21.75-19.53,21.75-12.3,0-16.75-6.9-17.68-13.25h5.97c1.45,5.5,5.94,8.24,11.96,8.24,10.77,0,13.62-6.9,13.62-17.59v-4.11c-2.36,5.36-6.54,8.3-14.25,8.3-10.53,0-18.19-8.57-18.19-21.85,0-14.58,8.4-23.06,18.89-23.06,8.7,0,12.43,4.1,13.56,7.34.09-2.29.22-5.3.3-6.29h5.52c-.01,2.02-.16,8.5-.16,12.72v27.8ZM558.42,72.21c0,9.92,5.21,16.9,13.08,16.9,10.3,0,13.39-6.87,13.39-17.54s-3.1-16.98-13.12-16.98c-9.21,0-13.34,7.84-13.34,17.63Z"/><path d="M496.44,38.29c0,2.43-1.97,4.4-4.4,4.4s-4.4-1.97-4.4-4.4,1.97-4.4,4.4-4.4,4.4,1.97,4.4,4.4Z"/><path d="M61.11,0L0,61.11l61.11,61.1,61.1-61.1L61.11,0ZM43.49,60.11l-11.48,11.48-2.41-2.41,18.52-18.52-8.08-8.08,21.06-21.06,39.58,39.59-39.58,39.58-18.34-18.33,11.48-11.48-10.76-10.76Z"/></g></svg>
<h1>Tu app PHP está publicada</h1>
<p>Esta es una página de ejemplo. Reemplazala por tu propia app desde el panel de Cloud Apps.</p>
</main>
</body>
</html>
