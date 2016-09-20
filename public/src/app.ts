import { autoinject } from 'aurelia-framework';
import { Router } from 'aurelia-router';

@autoinject
export class App {
  message: string = 'Doc Loader';
  constructor(
      public router: Router
  ) {
    this.router.configure(config => {
      config.options.pushState = true;
      config.map([
        {route: [''], moduleId: './Catalog/Index/Index', nav: true},
        {route: ['/catalog'], moduleId: './Catalog/Catalog/Catalog', nav: true},
      ]).mapUnknownRoutes({ redirect: '/pages' });
    });
  }
}