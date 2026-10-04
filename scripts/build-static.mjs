import fs from "fs";
import path from "path";
import http from "http";
import { fileURLToPath } from "url";

const __filename = fileURLToPath(import.meta.url);
const __dirname = path.dirname(__filename);
const rootDir = path.resolve(__dirname, "..");

// Map page names in /ita to backup asset directories in /assets/bkp
const bkpMap = {
  "ambiente-ipnotico": "_ipno",
  "antologia_critica": "_anthology",
  "articoli": "_articles",
  "barlumi": "_glimmer",
  "biografia": "_biography",
  "chiesa_iperspaziale": "_church",
  "dimensionalismo": "_dimensionalism",
  "forma-specularita": "_shape",
  "galleria": "_gallery",
  "gioielli": null,
  "home": "_home",
  "ipercubo": "_hypercube",
  "luce-geometria": "_light_geo",
  "luce-rifrazione": "_light",
  "movimento-specularita": "_motion",
  "museo": "_museum",
  "news": "_news",
  "nodi": "_nodes",
  "periodi": "_period",
  "riflessioni": "_reflection",
  "sitografia": null,
  "suono-specularita": "_sound",
  "superficie_cuspide": "_pinnacle",
  "teoria-universi": "_theory",
  "test": "_test",
  "valutazione_estetica": "_aesthetic",
};

// Pure Node.js image dimension reader (PNG, GIF, JPEG)
function getImageDimensions(filePath) {
  if (!fs.existsSync(filePath)) return null;
  try {
    const buf = fs.readFileSync(filePath);
    // PNG
    if (buf[0] === 0x89 && buf[1] === 0x50 && buf[2] === 0x4E && buf[3] === 0x47) {
      return { width: buf.readUInt32BE(16), height: buf.readUInt32BE(20) };
    }
    // GIF
    if (buf[0] === 0x47 && buf[1] === 0x49 && buf[2] === 0x46) {
      return { width: buf.readUInt16LE(6), height: buf.readUInt16LE(8) };
    }
    // JPEG
    if (buf[0] === 0xFF && buf[1] === 0xD8) {
      let offset = 2;
      while (offset < buf.length) {
        if (buf[offset] !== 0xFF) break;
        const marker = buf[offset + 1];
        if (marker === 0xD9 || marker === 0xDA) break;
        const len = buf.readUInt16BE(offset + 2);
        if ([0xC0, 0xC1, 0xC2, 0xC3, 0xC5, 0xC6, 0xC7, 0xC9, 0xCA, 0xCB, 0xCD, 0xCE, 0xCF].includes(marker)) {
          return { height: buf.readUInt16BE(offset + 5), width: buf.readUInt16BE(offset + 7) };
        }
        offset += 2 + len;
      }
    }
  } catch (err) {
    // Ignore read errors
  }
  return null;
}

// Global catalog of all files in assets directory for fallback searches
function catalogAssets(dir, map = {}) {
  if (!fs.existsSync(dir)) return map;
  for (const entry of fs.readdirSync(dir, { withFileTypes: true })) {
    const full = path.join(dir, entry.name);
    if (entry.isDirectory()) {
      catalogAssets(full, map);
    } else if (/\.(jpg|png|gif|jpeg|svg)$/i.test(entry.name)) {
      const key = entry.name.toLowerCase();
      if (!map[key]) map[key] = [];
      map[key].push(full);
    }
  }
  return map;
}

const globalAssetCatalog = catalogAssets(path.join(rootDir, "assets"));

// Restore missing images from backup into assets/_app/img
function restoreAssets() {
  console.log("--> Syncing background textures & assets...");

  // Copy common bkg textures
  const commonImgDir = path.join(rootDir, "assets/bkp/_common/img");
  const targetBkgDir = path.join(rootDir, "assets/_app/img/bkg");
  fs.mkdirSync(targetBkgDir, { recursive: true });

  if (fs.existsSync(commonImgDir)) {
    for (const f of fs.readdirSync(commonImgDir)) {
      const src = path.join(commonImgDir, f);
      const dest = path.join(targetBkgDir, f);
      if (!fs.existsSync(dest) && fs.statSync(src).isFile()) {
        fs.copyFileSync(src, dest);
      }
    }
  }

  // Scan all ita/*.php for image references
  const itaDir = path.join(rootDir, "ita");
  const files = fs.readdirSync(itaDir).filter(f => f.endsWith(".php") && !f.startsWith("_"));

  let restoredCount = 0;
  for (const file of files) {
    const pageName = file.replace(".php", "");
    const content = fs.readFileSync(path.join(itaDir, file), "utf8");

    const regex = /push(?:Image|PlainImage|Article|ArticleAddon)\s*\(\s*['"]([^'"]+)['"]/g;
    let match;
    while ((match = regex.exec(content)) !== null) {
      const imgName = match[1];
      const pageImgDir = path.join(rootDir, "assets/_app/img", pageName);
      const dqPath = path.join(pageImgDir, "dq", imgName);
      const lowPath = path.join(pageImgDir, "low", imgName);
      const thumbsPath = path.join(pageImgDir, "thumbs", imgName);

      if (!fs.existsSync(dqPath)) {
        let foundSource = null;
        const bkpFolder = bkpMap[pageName];
        if (bkpFolder) {
          const p1 = path.join(rootDir, "assets/bkp", bkpFolder, "img", imgName);
          const p2 = path.join(rootDir, "assets/bkp", bkpFolder, "images", imgName);
          if (fs.existsSync(p1)) foundSource = p1;
          else if (fs.existsSync(p2)) foundSource = p2;
        }

        if (!foundSource && globalAssetCatalog[imgName.toLowerCase()]) {
          foundSource = globalAssetCatalog[imgName.toLowerCase()][0];
        }

        if (foundSource && fs.existsSync(foundSource)) {
          fs.mkdirSync(path.join(pageImgDir, "dq"), { recursive: true });
          fs.mkdirSync(path.join(pageImgDir, "low"), { recursive: true });
          fs.mkdirSync(path.join(pageImgDir, "thumbs"), { recursive: true });

          fs.copyFileSync(foundSource, dqPath);
          if (!fs.existsSync(lowPath)) fs.copyFileSync(foundSource, lowPath);
          if (!fs.existsSync(thumbsPath)) fs.copyFileSync(foundSource, thumbsPath);
          restoredCount++;
        }
      }
    }
  }
  console.log(`--> Restored ${restoredCount} images from backup into assets/_app/img`);
}

// Tokenize PHP function arguments
function parsePhpArgs(argsStr) {
  const args = [];
  let i = 0;
  argsStr = argsStr.trim();
  while (i < argsStr.length) {
    while (i < argsStr.length && (argsStr[i] === " " || argsStr[i] === "\t" || argsStr[i] === "\n")) i++;
    if (i >= argsStr.length) break;

    if (argsStr[i] === "'" || argsStr[i] === '"') {
      const quote = argsStr[i++];
      let val = "";
      while (i < argsStr.length) {
        if (argsStr[i] === "\\" && i + 1 < argsStr.length) {
          val += argsStr[i + 1];
          i += 2;
        } else if (argsStr[i] === quote) {
          i++;
          break;
        } else {
          val += argsStr[i++];
        }
      }
      args.push(val);
    } else {
      let val = "";
      while (i < argsStr.length && argsStr[i] !== "," && argsStr[i] !== ")") {
        val += argsStr[i++];
      }
      val = val.trim();
      if (val === "true") args.push(true);
      else if (val === "false") args.push(false);
      else if (val === "null") args.push(null);
      else if (!isNaN(Number(val)) && val !== "") args.push(Number(val));
      else args.push(val);
    }

    while (i < argsStr.length && (argsStr[i] === " " || argsStr[i] === "\t" || argsStr[i] === "\n")) i++;
    if (argsStr[i] === ",") i++;
  }
  return args;
}

// Render PHP functions
function renderPushImage(pageDir, img, caption = "", thumb = true) {
  const pathPrefix = `../assets/_app/img/${pageDir}`;
  const ssrc = `${pathPrefix}/dq/${img}`;
  const msrc = `${pathPrefix}/low/${img}`;
  const tsrc = `${pathPrefix}/thumbs/${img}`;
  const src = thumb ? tsrc : ssrc;

  const realSsrc = path.join(rootDir, "assets/_app/img", pageDir, "dq", img);
  const realTsrc = path.join(rootDir, "assets/_app/img", pageDir, "thumbs", img);

  const dimSsrc = getImageDimensions(realSsrc);
  const dimTsrc = getImageDimensions(realTsrc) || dimSsrc;

  const width = dimSsrc ? dimSsrc.width : "";
  const height = dimSsrc ? dimSsrc.height : "";
  const tw = dimTsrc ? dimTsrc.width : "";
  const th = dimTsrc ? dimTsrc.height : "";

  const styleAttr = tw && th
    ? `style="max-width:${tw}px; max-height:${th}px; min-height: 128px;"`
    : `style="min-height: 128px;"`;

  return `<div class="card p-2 border-0">` +
    `<div class="thumb loading" ${styleAttr}>` +
    `<img class="card-img-top lozad thumb-image" ` +
    `src="${src}" ` +
    `data-ssrc="${ssrc}" ` +
    `data-msrc="${msrc}" ` +
    `data-w="${width}" ` +
    `data-h="${height}"/>` +
    `<span class="thumb-caption">${caption}</span>` +
    `</div>` +
    `</div>`;
}

function renderPushPlainImage(pageDir, img) {
  const src = `../assets/_app/img/${pageDir}/dq/${img}`;
  const realSrc = path.join(rootDir, "assets/_app/img", pageDir, "dq", img);
  const dims = getImageDimensions(realSrc);
  const styleAttr = dims ? `style="max-width:${dims.width}px; max-height:${dims.height}px;"` : "";

  return `<div class="thumb loading" ${styleAttr}>` +
    `<img class="card-img-top lozad thumb-image" src="${src}"/>` +
    `</div>`;
}

function renderPushTip(text) {
  return `<span data-toggle="tooltip" data-html="true" title="${text}"><b class="icon-note"></b></span>`;
}

function renderPushArticle(pageDir, img, title, author, place, date) {
  const imageHtml = renderPushImage(pageDir, img, title);
  return `<li><figure class="article">` +
    `${imageHtml}` +
    `<figcaption>` +
    `<h6 class="article-title">${title}</h6>` +
    `<h6 class="article-author">${author}</h6>` +
    `<h6 class="article-place">${place}</h6>` +
    `<h6 class="article-date">${date}</h6>` +
    `</figcaption>` +
    `</figure></li>`;
}

function renderPushArticleAddon(pageDir, img, title, number) {
  const caption = `[${number}] ${title}`;
  const imageHtml = renderPushImage(pageDir, img, caption);
  return `<li style="display: none;">${imageHtml}</li>`;
}

function renderPushCopyright(fixed = true) {
  const position = fixed ? "relative" : "absolute";
  return `<footer>` +
    `<p class="copyright">` +
    `<i>Il testo di questa pagina è distribuito sotto licenza <a rel="license" href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribuzione - Condividi allo stesso modo 3.0 Unported</a></i>` +
    `</p>` +
    `</footer>` +
    `<style>` +
    `.copyright {` +
    `  bottom: 0; position: ${position}; color: white; font-size: 1rem; display: block;` +
    `  text-align: center; background: rgba(0, 0, 0, .9); padding-top: .25rem; padding-bottom: .25rem;` +
    `  margin-bottom: 0; margin-top: 1rem; width: 100%; font-family: Segoe UI;` +
    `}` +
    `</style>`;
}

// Convert PHP includes and functions to static HTML
function compilePhpContent(rawContent, pageDir, isRootIndex = false) {
  let content = rawContent;

  // 1. Process PHP includes
  content = content.replace(/<\?php\s+(?:include|require)(?:_once)?\s+['"]([^'"]+)['"]\s*;?\s*\?>/g, (match, incPath) => {
    let fullPath;
    if (isRootIndex) {
      fullPath = path.resolve(rootDir, incPath);
    } else {
      fullPath = path.resolve(rootDir, "ita", incPath);
    }

    if (!fs.existsSync(fullPath)) {
      // Optional/missing includes like app/header.php or app/footer.php in contatti.php
      return "";
    }

    let incContent = fs.readFileSync(fullPath, "utf8");

    // Remove <?php require 'functions.php';?> from head.php
    incContent = incContent.replace(/<\?php\s+(?:include|require).*?functions\.php.*?\?>/g, "");

    // For index.html at root, update relative "../assets/" in head to "assets/"
    if (isRootIndex) {
      incContent = incContent.replace(/\.\.\/assets\//g, "assets/");
    }

    // In navbar (initPage.php), update clean URLs to .html links
    if (incPath.includes("initPage.php")) {
      // Clean up tab in sitografia
      incContent = incContent.replace(/href=["']sitografia\s*["']/g, 'href="sitografia.html"');
      // Replace href="page" with href="page.html" for known pages
      const knownPages = [
        "home", "biografia", "valutazione_estetica", "esposizioni",
        "periodi", "superficie_cuspide", "ipercubo", "test", "nodi",
        "chiesa_iperspaziale", "antologia_critica", "galleria", "articoli",
        "dimensionalismo", "museo", "gioielli", "news", "bibliografia",
        "emerografia", "sitografia", "videografia"
      ];
      for (const p of knownPages) {
        const regex = new RegExp(`href=["']${p}["']`, "g");
        incContent = incContent.replace(regex, `href="${p}.html"`);
      }
    }

    return compilePhpContent(incContent, pageDir, isRootIndex);
  });

  // 2. Process helper functions
  // pushImage(...)
  content = content.replace(/<\?php\s+pushImage\s*\((.*?)\)\s*;?\s*\?>/gs, (match, argsStr) => {
    const args = parsePhpArgs(argsStr);
    return renderPushImage(pageDir, args[0], args[1], args[2] !== undefined ? args[2] : true);
  });

  // pushPlainImage(...)
  content = content.replace(/<\?php\s+pushPlainImage\s*\((.*?)\)\s*;?\s*\?>/gs, (match, argsStr) => {
    const args = parsePhpArgs(argsStr);
    return renderPushPlainImage(pageDir, args[0]);
  });

  // pushTip(...)
  content = content.replace(/<\?php\s+pushTip\s*\((.*?)\)\s*;?\s*\?>/gs, (match, argsStr) => {
    const args = parsePhpArgs(argsStr);
    return renderPushTip(args[0]);
  });

  // pushArticle(...)
  content = content.replace(/<\?php\s+pushArticle\s*\((.*?)\)\s*;?\s*\?>/gs, (match, argsStr) => {
    const args = parsePhpArgs(argsStr);
    return renderPushArticle(pageDir, args[0], args[1], args[2], args[3], args[4]);
  });

  // pushArticleAddon(...)
  content = content.replace(/<\?php\s+pushArticleAddon\s*\((.*?)\)\s*;?\s*\?>/gs, (match, argsStr) => {
    const args = parsePhpArgs(argsStr);
    return renderPushArticleAddon(pageDir, args[0], args[1], args[2]);
  });

  // pushCopyright(...) or pushCopyleft(...)
  content = content.replace(/<\?php\s+pushCopy(?:right|left)\s*\((.*?)\)\s*;?\s*\?>/gs, (match, argsStr) => {
    const args = parsePhpArgs(argsStr);
    return renderPushCopyright(args[0] !== undefined ? args[0] : true);
  });

  // 3. Update any internal links in content
  content = content.replace(/href=["']cuspide["']/g, 'href="superficie_cuspide.html"');
  const internalPages = [
    "barlumi", "riflessioni", "forma-specularita", "suono-specularita",
    "movimento-specularita", "luce-rifrazione", "ambiente-ipnotico",
    "luce-geometria", "teoria-universi", "ipercubo", "nodi", "test"
  ];
  for (const ip of internalPages) {
    const r = new RegExp(`href=["']${ip}["']`, "g");
    content = content.replace(r, `href="${ip}.html"`);
  }

  // 4. Update index.html "entra" button to point to ita/home.html
  if (isRootIndex) {
    content = content.replace(/href=["']ita\/home["']/g, 'href="ita/home.html"');
  }

  return content;
}

// Copy directory recursively
function copyDirSync(src, dest) {
  fs.mkdirSync(dest, { recursive: true });
  for (const entry of fs.readdirSync(src, { withFileTypes: true })) {
    const srcPath = path.join(src, entry.name);
    const destPath = path.join(dest, entry.name);
    if (entry.isDirectory()) {
      copyDirSync(srcPath, destPath);
    } else {
      fs.copyFileSync(srcPath, destPath);
    }
  }
}

// Main build function
export function buildStaticSite() {
  console.log("=== Building Static Website for Attilio Pierelli ===");
  restoreAssets();

  // 1. Build root index.html
  console.log("--> Building index.html...");
  const rawIndex = fs.readFileSync(path.join(rootDir, "index.php"), "utf8");
  const compiledIndex = compilePhpContent(rawIndex, "index", true);
  fs.writeFileSync(path.join(rootDir, "index.html"), compiledIndex, "utf8");

  // 2. Build all ita/*.html pages
  const itaDir = path.join(rootDir, "ita");
  const itaFiles = fs.readdirSync(itaDir).filter(f => f.endsWith(".php") && !f.startsWith("_"));
  console.log(`--> Building ${itaFiles.length} pages in /ita...`);

  for (const file of itaFiles) {
    const pageName = file.replace(".php", "");
    const rawContent = fs.readFileSync(path.join(itaDir, file), "utf8");
    const compiled = compilePhpContent(rawContent, pageName, false);
    const targetHtml = path.join(itaDir, `${pageName}.html`);
    fs.writeFileSync(targetHtml, compiled, "utf8");

    // Also create clean URL directory: ita/<pageName>/index.html
    const cleanDir = path.join(itaDir, pageName);
    fs.mkdirSync(cleanDir, { recursive: true });
    const redirectHtml = `<!DOCTYPE html><html><head><meta charset="utf-8"><meta http-equiv="refresh" content="0; url=../${pageName}.html"><title>Redirecting...</title></head><body><script>window.location.replace("../${pageName}.html");</script></body></html>`;
    fs.writeFileSync(path.join(cleanDir, "index.html"), redirectHtml, "utf8");
  }

  // 3. Generate complete standalone /dist directory
  console.log("--> Generating standalone /dist directory...");
  const distDir = path.join(rootDir, "dist");
  if (fs.existsSync(distDir)) {
    fs.rmSync(distDir, { recursive: true, force: true });
  }
  fs.mkdirSync(distDir, { recursive: true });

  // Copy root index.html
  fs.copyFileSync(path.join(rootDir, "index.html"), path.join(distDir, "index.html"));

  // Copy ita HTML files
  const distIta = path.join(distDir, "ita");
  fs.mkdirSync(distIta, { recursive: true });
  for (const file of itaFiles) {
    const pageName = file.replace(".php", "");
    fs.copyFileSync(path.join(itaDir, `${pageName}.html`), path.join(distIta, `${pageName}.html`));
    const distCleanDir = path.join(distIta, pageName);
    fs.mkdirSync(distCleanDir, { recursive: true });
    fs.copyFileSync(path.join(itaDir, pageName, "index.html"), path.join(distCleanDir, "index.html"));
  }

  // Copy assets/_app to dist/assets/_app and assets/_common if needed
  fs.mkdirSync(path.join(distDir, "assets"), { recursive: true });
  if (fs.existsSync(path.join(rootDir, "assets/_app"))) {
    copyDirSync(path.join(rootDir, "assets/_app"), path.join(distDir, "assets/_app"));
  }
  if (fs.existsSync(path.join(rootDir, "assets/bkp/_common"))) {
    copyDirSync(path.join(rootDir, "assets/bkp/_common"), path.join(distDir, "assets/_common"));
  }

  console.log("=== Build Complete! ===");
  console.log("Static files generated in:");
  console.log("  - In-place: /index.html and /ita/*.html");
  console.log("  - Production dist: /dist/");
}

// Simple preview server
export function startPreviewServer(port = 3000) {
  const mimeTypes = {
    ".html": "text/html",
    ".css": "text/css",
    ".js": "text/javascript",
    ".png": "image/png",
    ".jpg": "image/jpeg",
    ".jpeg": "image/jpeg",
    ".gif": "image/gif",
    ".svg": "image/svg+xml",
    ".mp4": "video/mp4",
    ".woff": "font/woff",
    ".woff2": "font/woff2",
    ".ttf": "font/ttf",
    ".eot": "application/vnd.ms-fontobject",
  };

  const server = http.createServer((req, res) => {
    let reqUrl = req.url.split("?")[0];
    if (reqUrl === "/") reqUrl = "/index.html";

    let filePath = path.join(rootDir, "dist", reqUrl);

    // If requested path without extension exists with .html
    if (!fs.existsSync(filePath) && fs.existsSync(filePath + ".html")) {
      filePath = filePath + ".html";
    } else if (fs.existsSync(filePath) && fs.statSync(filePath).isDirectory()) {
      filePath = path.join(filePath, "index.html");
    }

    if (!fs.existsSync(filePath)) {
      res.writeHead(404, { "Content-Type": "text/plain" });
      res.end("404 Not Found");
      return;
    }

    const ext = path.extname(filePath).toLowerCase();
    const contentType = mimeTypes[ext] || "application/octet-stream";

    res.writeHead(200, { "Content-Type": contentType });
    fs.createReadStream(filePath).pipe(res);
  });

  server.listen(port, () => {
    console.log(`Preview server running at http://localhost:${port}`);
    console.log("Press Ctrl+C to stop.");
  });
}

// CLI handler
if (process.argv[1] === fileURLToPath(import.meta.url)) {
  if (process.argv.includes("--preview")) {
    buildStaticSite();
    startPreviewServer(3000);
  } else {
    buildStaticSite();
  }
}
