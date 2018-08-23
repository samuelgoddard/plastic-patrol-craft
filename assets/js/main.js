// Widget
import scrollspy from 'widgets/scrollspy';
import smoothScrollInternalLinks from 'widgets/smoothScrollInternalLinks';
import scrollreveal from 'widgets/scrollreveal';
import lightbox from 'widgets/lightbox';

import svg4everybody from 'svg4everybody';

const init = () => {

  const APP = window.APP || {};

    document.documentElement.classList.remove('js-loading');
    document.documentElement.classList.add('js-loaded');

    svg4everybody();

    APP.widgets = {
      scrollspy: scrollspy(),
      smoothScrollInternalLinks: smoothScrollInternalLinks(),
      scrollreveal: {
        slideInLeft: scrollreveal('.reveal-slide-in-left', 'left'),
        slideInRight: scrollreveal('.reveal-slide-in-right', 'right'),
      },
      lightbox: lightbox(),
    };

};



window.addEventListener('DOMContentLoaded', init);
