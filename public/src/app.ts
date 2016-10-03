import { AppRouter, autoinject } from 'aurelia-router';

@autoinject
export class App {
  constructor(
      public router: AppRouter
  ) {
    this.router.configure(config => {
      config.options.pushState = true;
      config.map([
        {route: [''], moduleId: './Catalog/Index/Index', nav: true},
        {route: ['/spectehnika'], moduleId: './Catalog/Catalog/Catalog', nav: true},
      ]).mapUnknownRoutes({ redirect: '/spectehnika' });
    });
  }
}