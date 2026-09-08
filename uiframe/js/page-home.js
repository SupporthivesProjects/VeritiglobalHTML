/* =============================================================
   VERITI GLOBAL  ·  page-home.js
   Homepage-only behaviour. Currently one thing: the proofreader's
   correction in the closing section.

   The strike-through and the handwritten "proofed" are positioned in
   JS against the live bounding box of the word "checked", so they stay
   correct at any viewport width and after the webfont swaps in. Do not
   replace this with hardcoded offsets; the heading reflows.

   Markup it expects:
     .ms-head        the positioning context
     #msWord         the word being struck out
     #msStrike       the red rule
     #msProofed      the handwritten correction
   ============================================================= */

(function () {
  'use strict';

  var doc = document;
  var head = doc.querySelector('.ms-head');
  var word = doc.getElementById('msWord');
  var strike = doc.getElementById('msStrike');
  var proofed = doc.getElementById('msProofed');
  if (!head || !word || !strike || !proofed) { return; }

  function place() {
    var hb = head.getBoundingClientRect();
    var wb = word.getBoundingClientRect();
    if (!wb.width) { return; }

    var left = wb.left - hb.left;

    strike.style.left = (left - 4) + 'px';
    strike.style.width = (wb.width + 8) + 'px';
    strike.style.top = (wb.top - hb.top + wb.height * 0.58) + 'px';

    proofed.style.left = (left + wb.width * 0.58) + 'px';
    proofed.style.top = (wb.top - hb.top - wb.height * 0.72) + 'px';
    proofed.style.marginLeft = (-proofed.offsetWidth / 2) + 'px';
  }

  var t;
  window.addEventListener('resize', function () {
    clearTimeout(t);
    t = setTimeout(place, 120);
  });

  if (doc.fonts && doc.fonts.ready) {
    doc.fonts.ready.then(function () { place(); setTimeout(place, 200); });
  } else {
    window.addEventListener('load', place);
  }
  doc.addEventListener('vg:preloader-done', place);
  setTimeout(place, 600);
})();
