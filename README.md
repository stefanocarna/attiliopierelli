# Attilio Pierelli - Sito Web Statico

Archivio e portfolio artistico dello scultore **Attilio Pierelli** (1924–2013).

Questo repository contiene la versione statica del sito web, convertita dall'originaria implementazione PHP in puro HTML5/CSS3/JavaScript, senza alcuna dipendenza da interpreti server-side (PHP o database).

---

## 🚀 Requisiti

- **Node.js** (versione 18 o superiore - testato su Node v23)
- Nessuna dipendenza esterna da installare (`build-static.mjs` utilizza esclusivamente API standard di Node.js).

---

## 🛠️ Comandi disponibili

Nel terminale, all'interno della cartella di progetto:

### 1. Compilare il sito statico
```bash
npm run build
```
Questo comando:
- Sincronizza e ripristina le immagini storiche e le texture di background da `assets/bkp/` a `assets/_app/img/`.
- Calcola le dimensioni native delle immagini (sostituendo la funzione PHP `getimagesize()`) per PhotoSwipe.
- Compila `index.php` e le 31 pagine di `ita/*.php` in file statici `.html`.
- Genera la cartella pronta per il deployment: `dist/`.

### 2. Anteprima locale
```bash
npm run preview
# oppure
npm start
```
Avvia un server statico locale su [http://localhost:3000](http://localhost:3000) per navigare il sito esattamente come apparirà online.

---

## 📁 Struttura del Progetto

```text
attiliopierelli/
├── index.html              # Landing page interattiva (cubo 3D)
├── ita/                    # 31 pagine del sito in italiano (.html)
├── assets/
│   ├── _app/               # CSS, JS, font, immagini e media
│   └── bkp/                # Archivio storico degli asset
├── scripts/
│   └── build-static.mjs    # Script di build ed esportazione statica (Node.js)
├── dist/                   # Output di produzione pronto per l'hosting (creato da npm run build)
├── .github/workflows/
│   └── deploy.yml          # Azione automatica per il deploy su GitHub Pages
└── package.json            # Script di esecuzione
```

---

## 🌐 Pubblicazione su GitHub Pages

Il repository include già una GitHub Action (`.github/workflows/deploy.yml`).
Per attivare la pubblicazione automatica:
1. Vai su GitHub: **Settings** -> **Pages**.
2. Sotto **Build and deployment** > **Source**, seleziona **GitHub Actions**.
3. Ad ogni push sui branch `static-site` o `main`, il sito verrà compilato e pubblicato automaticamente su `https://stefanocarna.github.io/attiliopierelli/` (o sul tuo dominio personalizzato).
