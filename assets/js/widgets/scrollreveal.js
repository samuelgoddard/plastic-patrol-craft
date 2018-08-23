import ScrollReveal from 'scrollreveal'

export default (selector = '.reveal-slide-in-right', origin = 'right') => ScrollReveal({ reset: true }).reveal(selector, {
  delay: 120,
  duration: 700,
  interval: 16 * 10,
  origin: origin,
  distance: '150%',
  easing: 'ease-out',
  opacity: 0,
});
