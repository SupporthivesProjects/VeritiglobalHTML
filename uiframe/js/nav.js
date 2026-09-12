/* =============================================================
   VERITI GLOBAL  ·  nav.js
   Sticky header state and the mobile menu. Load on every page.

   Expects the nav markup in partials/nav.html:
     #nav          the <header>
     #navToggle    the burger button
     #navLinks     the link list

   Nav items currently carry no href, so nothing navigates. Add the
   real hrefs when the routes exist; this file does not care either
   way and needs no change.
   ============================================================= */

(function () {
  'use strict';

  var nav = document.getElementById('nav');
  if (!nav) { return; }

  var toggle = document.getElementById('navToggle');
  var STUCK_AT = 60; /* px scrolled before the header takes its solid state */

  function onScroll() {
    nav.classList.toggle('is-stuck', window.scrollY > STUCK_AT);
  }
  window.addEventListener('scroll', onScroll, { passive: true });
  onScroll();

  if (!toggle) { return; }

  toggle.addEventListener('click', function () {
    var open = nav.classList.toggle('is-open');
    toggle.setAttribute('aria-expanded', String(open));
  });

  Array.prototype.forEach.call(document.querySelectorAll('#navLinks a'), function (a) {
    a.addEventListener('click', function () {
      nav.classList.remove('is-open');
      toggle.setAttribute('aria-expanded', 'false');
    });
  });
})();
