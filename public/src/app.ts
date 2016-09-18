import { autoinject } from 'aurelia-framework';
import { EventAggregator } from 'aurelia-event-aggregator';
import { Router } from 'aurelia-router';

@autoinject
export class App {
  constructor(
      public router: Router,
      private ea: EventAggregator
  ) {
    this.router.configure(config => {
      config.options.pushState = true;
      config.map([
        {route: [''], moduleId: './Catalog/Index/Index', name: 'home',  nav: true},
        {route: ['logIn'], moduleId: './Catalog/Index/Index'},
      ]).mapUnknownRoutes({ redirect: '' });
    });
  }
}
