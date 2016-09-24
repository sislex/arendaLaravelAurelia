/**
 * Created by sislex on 18.09.16.
 */
import { Router, RouterConfiguration, autoinject } from 'aurelia-router';

@autoinject
export class Catalog {
    public router:Router;
    //constructor(){
    //    console.log(123);
    //
    //}

    configureRouter(config: RouterConfiguration, router: Router) {
        config.map([
            {route: ['', '/:pseudo'], moduleId: './index/index', nav: true, name: 'home'},
        ]);
        this.router = router;
        console.log(router);
    }
}