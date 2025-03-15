import initBurger from './components/burger.js';
import initModal from './components/modal.js';
import initAccordion from './components/accordion.js';
import initTabs from './components/tabs.js';
import initDropdown from './components/dropdown.js';
import initStickyHeader from './components/sticky-header.js';
import initSmoothScroll from './components/smooth-scroll.js';
import initThemeToggle from './components/theme-toggle';

document.addEventListener('DOMContentLoaded', () => {
  initBurger();
  initModal();
  initAccordion();
  initTabs();
  initDropdown();
  initStickyHeader();
  initSmoothScroll();
  initThemeToggle();
});
