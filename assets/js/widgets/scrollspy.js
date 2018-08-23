import NavScrollSpy from 'nav-scroll-spy';

export default () => new NavScrollSpy({
    currentClass: 'is--active',
    offset: 100,
  }).init();
