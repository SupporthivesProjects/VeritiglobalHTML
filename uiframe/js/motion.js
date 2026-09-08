/* =============================================================
   VERITI GLOBAL  ·  motion.js
   Scroll reveal + text write-in engine.

   This is the file to reuse on every page of the site. It has no
   page-specific knowledge and needs no configuration: include it,
   include css/motion.css, and mark up the page with data attributes.

   ---------------------------------------------------------------
   MARKUP API
   ---------------------------------------------------------------

   data-reveal="fade"     Block fades and rises 22px when it enters
                          the viewport. Use for images, cards, panels,
                          button rows, footer columns.

   data-reveal="write"    Block reveals nothing itself, but unlocks the
                          write-in of any [data-write] inside it, and
                          draws in any .rule inside it. Use on headings,
                          copy blocks and table-like rows.

   data-write             On a text element INSIDE a [data-reveal] block.
                          Splits to characters and writes them in one by
                          one, each flashing from red to its final colour
                          so it reads as ink being laid down.
                          Use for headings only.

   data-write="word"      Same, but splits to words instead of characters
                          and skips the colour flash. Use for body copy.
                          Characters on a long paragraph looks frantic.

   .rule                  A 1px divider inside a [data-reveal] block.
                          Draws in left to right. Add .rule--heavy for 2px
                          ink, .rule--v for a vertical divider.

   .lazyimg               Image fades in on load. Pair with
                          loading="lazy" decoding="async".

   style="--sd:140ms"     Stagger delay on any [data-reveal] block. Use to
                          cascade siblings, e.g. three footer columns at
                          80 / 160 / 240ms.

   ---------------------------------------------------------------
   EXAMPLE
   ---------------------------------------------------------------

   <div class="chapter" data-reveal="write">
     <span class="rule rule--heavy"></span>
     <div class="row"><span class="no">CHAPTER 06</span></div>
     <span class="rule" style="--sd:120ms"></span>
   </div>

   <div class="sec-head" data-reveal="write">
     <h2 class="h2" data-write>Your heading here.</h2>
     <p class="note" data-write="word">Your body copy here.</p>
   </div>

   <div class="card" data-reveal="fade" style="--sd:140ms"> ... </div>

   ---------------------------------------------------------------
   NOTES FOR WHOEVER PICKS THIS UP
   ---------------------------------------------------------------

   * Splitting is deferred. Text is only broken into spans once its
     section is within 600px of the viewport, so a long page does not
     build thousands of spans upfront. Do not move this to load time.

   * Nested markup survives splitting. The walker recurses through
     elements, so <span class="it">intact.</span> inside a heading keeps
     its own colour. Add class="no-split" to any element that must be
     left alone.

   * Every reveal fires once. Elements are unobserved after revealing.

   * prefers-reduced-motion: everything is split and revealed
     immediately, no transitions. Handled here and in motion.css.

   * If you inject content after load (a filter, a tab, an AJAX list),
     call VGMotion.refresh(containerElement) to observe the new nodes.

   * Do not put data-reveal on a whole <section>. A tall section clears
     its trigger line long before its lower rows are on screen, so
     everything fires at once. Mark up the individual blocks.

   * data-reveal-after="preloader" hands ownership of a block to the
     preloader, so the hero writes itself in after the book closes
     instead of on page load. If the preloader is not running on that
     page (inner page, or reduced motion) this engine reveals the block
     normally, so the attribute is always safe to leave in place.
   ============================================================= */

window.VGMotion = (function () {
  'use strict';

  var doc = document;
  var REDUCED = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  var SUPPORTED = 'IntersectionObserver' in window;

  /* Tuning. Step is the per-unit delay, cap stops long paragraphs crawling. */
  var TIMING = {
    charStep: 15, charCap: 900,
    wordStep: 17, wordCap: 620
  };

  var prepObserver = null;
  var revealObserver = null;

  /* When the preloader is running it owns [data-reveal-after] blocks and
     releases them itself. Otherwise this engine treats them normally. */
  var preloaderRunning = doc.documentElement.classList.contains('pl-on');
  function claimedByPreloader(el) {
    return preloaderRunning && el.hasAttribute('data-reveal-after');
  }

  /* -----------------------------------------------------------
     Split an element's text into animatable units.
     Words are wrapped so they never break mid-word across lines.
     ----------------------------------------------------------- */
  function splitText(el) {
    if (el.getAttribute('data-split')) { return; }
    el.setAttribute('data-split', '1');

    var mode = el.getAttribute('data-write') === 'word' ? 'word' : 'char';
    var units = [];

    (function walk(node) {
      Array.prototype.slice.call(node.childNodes).forEach(function (child) {
        if (child.nodeType === 3) {
          var text = child.textContent;
          if (!text || !text.trim()) { return; }
          var frag = doc.createDocumentFragment();
          text.split(/(\s+)/).forEach(function (part) {
            if (!part) { return; }
            if (/^\s+$/.test(part)) { frag.appendChild(doc.createTextNode(part)); return; }
            var w = doc.createElement('span');
            w.className = 'w';
            if (mode === 'word') {
              w.textContent = part;
              w.setAttribute('data-u', '');
              units.push(w);
            } else {
              Array.from(part).forEach(function (ch) {
                var c = doc.createElement('span');
                c.className = 'c';
                c.textContent = ch;
                w.appendChild(c);
                units.push(c);
              });
            }
            frag.appendChild(w);
          });
          node.replaceChild(frag, child);
        } else if (child.nodeType === 1 && child.tagName !== 'BR' &&
                   !child.classList.contains('no-split')) {
          walk(child);
        }
      });
    })(el);

    var step = mode === 'word' ? TIMING.wordStep : TIMING.charStep;
    var cap  = mode === 'word' ? TIMING.wordCap  : TIMING.charCap;
    units.forEach(function (u, i) {
      u.style.setProperty('--d', Math.min(i * step, cap) + 'ms');
    });
  }

  function prepare(scope) {
    if (scope.hasAttribute && scope.hasAttribute('data-write')) { splitText(scope); }
    Array.prototype.forEach.call(scope.querySelectorAll('[data-write]'), splitText);
  }

  function revealNow(el) {
    prepare(el);
    requestAnimationFrame(function () { el.classList.add('is-in'); });
  }

  /* -----------------------------------------------------------
     Observe a subtree. Safe to call repeatedly: already-revealed
     elements are skipped, already-split text is skipped.
     ----------------------------------------------------------- */
  function refresh(root) {
    root = root || doc;

    var targets = Array.prototype.filter.call(
      root.querySelectorAll('[data-reveal]'),
      function (el) { return !el.classList.contains('is-in') && !claimedByPreloader(el); }
    );

    if (REDUCED || !SUPPORTED) {
      prepare(root);
      targets.forEach(function (el) { el.classList.add('is-in'); });
      return;
    }

    Array.prototype.forEach.call(root.querySelectorAll('section, footer'), function (s) {
      prepObserver.observe(s);
    });
    targets.forEach(function (el) { revealObserver.observe(el); });
  }

  function init() {
    if (!REDUCED && SUPPORTED) {
      /* Split a screen and a half ahead of the viewport. */
      prepObserver = new IntersectionObserver(function (entries) {
        entries.forEach(function (e) {
          if (!e.isIntersecting) { return; }
          prepare(e.target);
          prepObserver.unobserve(e.target);
        });
      }, { rootMargin: '600px 0px' });

      revealObserver = new IntersectionObserver(function (entries) {
        entries.forEach(function (e) {
          if (!e.isIntersecting) { return; }
          revealNow(e.target);
          revealObserver.unobserve(e.target);
        });
      }, { threshold: 0, rootMargin: '0px 0px -10% 0px' });

      /* Anything in the last screenful never clears the -10% trigger
         line, so sweep the remainder once the page bottoms out. */
      window.addEventListener('scroll', function () {
        if (window.scrollY + window.innerHeight < doc.body.scrollHeight - 4) { return; }
        Array.prototype.forEach.call(doc.querySelectorAll('[data-reveal]:not(.is-in)'), function (el) {
          if (claimedByPreloader(el)) { return; }
          revealNow(el);
          revealObserver.unobserve(el);
        });
      }, { passive: true });
    }

    /* Image fade-in. */
    Array.prototype.forEach.call(doc.querySelectorAll('.lazyimg'), function (img) {
      if (img.complete && img.naturalWidth) { img.classList.add('is-loaded'); return; }
      img.addEventListener('load',  function () { img.classList.add('is-loaded'); });
      img.addEventListener('error', function () { img.classList.add('is-loaded'); });
    });

    refresh(doc);
  }

  if (doc.readyState === 'loading') {
    doc.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }

  return {
    refresh: refresh,
    reveal: revealNow,   /* force a single block to reveal now */
    split: splitText,    /* force a single [data-write] to split now */
    timing: TIMING,      /* mutate before first reveal to retune globally */
    reduced: REDUCED
  };
})();
