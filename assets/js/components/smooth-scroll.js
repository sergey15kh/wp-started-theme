export default function initSmoothScroll() {
  const links = document.querySelectorAll('a[href^="#"]:not([href="#"])');

  links.forEach(link => {
    link.addEventListener('click', function (e) {
      const href = this.getAttribute('href');
      const targetId = href.slice(1);
      const target = document.getElementById(targetId);

      if (target) {
        e.preventDefault();
        target.scrollIntoView({ behavior: 'smooth' });
      }
    });
  });
}
