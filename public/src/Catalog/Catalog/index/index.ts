/**
 * Created by sislex on 18.09.16.
 */
import {autoinject } from 'aurelia-router';
import {HttpClient} from 'aurelia-http-client';

@autoinject
export class Catalog {
    private goods: Array = [];

    constructor(
        public http: HttpClient
    ){}

    activate(urlObj, routeObj){
        let url = 'http://arenda/getGoodsByCategoryPseudo/' + urlObj.pseudo;
        this.http.get(url)
            .then(data => {
                this.goods = JSON.parse(data.response);
                console.log(this.goods[1].imgArr);
            });
    }
}