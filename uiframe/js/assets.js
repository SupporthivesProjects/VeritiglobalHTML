/* =============================================================
   VERITI GLOBAL  ·  assets.js
   Single source of truth for every image and icon on the site.

   Every <img data-asset="heroImage"> on any page resolves its src
   from the map below, so a path only ever changes in one place.

   ---------------------------------------------------------------
   BEFORE YOU BUILD
   ---------------------------------------------------------------
   The assets/ folder ships EMPTY. Export the files from the Figma
   file's dev mode and drop them in. ASSETS.md lists every file with
   the Figma node it comes from and the pages it appears on.

   LOCAL REVIEW FALLBACK
   ---------------------------------------------------------------
   Until those files exist the images will 404. So that opening this
   folder straight from disk still shows a complete page, any local
   asset that fails to load falls back to its Figma CDN URL, but ONLY
   when the page is served from file://, localhost or 127.0.0.1.

   On any real host there is no fallback: a missing asset stays
   visibly missing, which is what you want in staging and production.
   Each fallback logs a warning naming the file, so the console doubles
   as your outstanding-exports list.

   Set USE_FIGMA_PREVIEW to true to force the CDN everywhere. The CDN
   URLs expire roughly 7 days after export, so that is a preview
   convenience and never a shipping state.
   ============================================================= */

window.VGAssets = (function () {
  'use strict';

  var USE_FIGMA_PREVIEW = false;

  /* Production. Files live in assets/. */
  var LOCAL = {
    texture:        'assets/hero-paper-texture.png',
    heroImage:      'assets/hero-open-book.png',
    principlesImg:  'assets/principles-architecture.png',
    proofImg:       'assets/proof-manuscript.png',
    logoMark:       'assets/logo-mark.svg',
    footerLogoMark: 'assets/logo-mark-cream.svg',
    cornerMark:     'assets/icon-registration-mark.svg',
    plusMark:       'assets/icon-plus-eyebrow.svg',
    cardPlus:       'assets/icon-plus-feature.svg',
    arrowWhite:     'assets/icon-arrow-right-white.svg',
    arrowInk:       'assets/icon-arrow-right-ink.svg',
    globe:          'assets/icon-globe.svg',
    check:          'assets/icon-check-circle.svg',
    compass:        'assets/icon-compass-rose.svg',
    chevron:        'assets/icon-chevron-down.svg',
    mastercard:     'assets/payment-mastercard.svg'
  };

  /* Preview only. Expires ~7 days from export. Never ship with this on. */
  var FIGMA_PREVIEW = {
    texture:        'https://www.figma.com/api/mcp/asset/1ff5c62f-3fee-4a33-bc23-e72b06e68a95.png',
    heroImage:      'https://www.figma.com/api/mcp/asset/25654550-55e8-4e86-974f-f7d1e93c05a4.png',
    principlesImg:  'https://www.figma.com/api/mcp/asset/10408265-54bf-4508-8c73-caba44725125.png',
    proofImg:       'https://www.figma.com/api/mcp/asset/b7e1a7c0-bb61-4034-9046-d416f160917e.png',
    logoMark:       'https://www.figma.com/api/mcp/asset/7dcf3fe7-b2d5-4971-b928-ef2a8b3f1ce8.svg',
    footerLogoMark: 'https://www.figma.com/api/mcp/asset/e229a140-cd83-4537-a797-efe551117760.svg',
    cornerMark:     'https://www.figma.com/api/mcp/asset/30ff3d95-23c9-440e-9408-f054687baaf9.svg',
    plusMark:       'https://www.figma.com/api/mcp/asset/b8090596-10ac-4ef8-a614-ea2f28a2f59c.svg',
    cardPlus:       'https://www.figma.com/api/mcp/asset/1ae340d5-b94b-4731-a2cf-7b1561bdaeaa.svg',
    arrowWhite:     'https://www.figma.com/api/mcp/asset/a89762d4-36cf-4a4e-8fb0-0f170bb4a027.svg',
    arrowInk:       'https://www.figma.com/api/mcp/asset/964e99eb-80ec-4c7f-ac1f-e8c4633d3a05.svg',
    globe:          'https://www.figma.com/api/mcp/asset/21d772c1-3d27-489f-bed8-3a4a44d1342f.svg',
    check:          'https://www.figma.com/api/mcp/asset/0125b3ca-a3c5-4a3c-b31c-f72b08f6cc67.svg',
    compass:        'https://www.figma.com/api/mcp/asset/930f55b6-8d11-4c7e-a54d-5f14c14385bd.svg',
    chevron:        'https://www.figma.com/api/mcp/asset/4049f91d-0efb-48c2-8ded-23915d5c6a14.svg',
    mastercard:     'https://www.figma.com/api/mcp/asset/37f6f899-45c6-480e-9f4b-acc59083589c.svg'
  };

  var MAP = USE_FIGMA_PREVIEW ? FIGMA_PREVIEW : LOCAL;

  /* Reviewing off disk or off a local server, not a real host. */
  var IS_LOCAL_REVIEW =
    location.protocol === 'file:' ||
    location.hostname === 'localhost' ||
    location.hostname === '127.0.0.1' ||
    location.hostname === '';

  var warned = false;

  function hydrate(root) {
    root = root || document;
    Array.prototype.forEach.call(root.querySelectorAll('[data-asset]'), function (el) {
      var key = el.getAttribute('data-asset');
      var url = MAP[key];
      if (!url) { return; }

      if (IS_LOCAL_REVIEW && !USE_FIGMA_PREVIEW && FIGMA_PREVIEW[key]) {
        el.addEventListener('error', function onErr() {
          el.removeEventListener('error', onErr);
          if (!warned) {
            warned = true;
            console.warn(
              '[VGAssets] assets/ is empty, so missing files are falling back to the ' +
              'Figma CDN for local review only. Export the real files per ASSETS.md. ' +
              'This fallback never runs on a real host.'
            );
          }
          console.warn('[VGAssets] not exported yet: ' + LOCAL[key]);
          el.src = FIGMA_PREVIEW[key];
        });
      }

      el.src = url;
    });
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', function () { hydrate(); });
  } else {
    hydrate();
  }

  return { map: MAP, get: function (k) { return MAP[k]; }, hydrate: hydrate };
})();
