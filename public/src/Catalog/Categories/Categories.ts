/**
 * Created by sislex on 18.09.16.
 */
import {autoinject } from 'aurelia-router';
import {HttpClient} from 'aurelia-http-client';

@autoinject
export class categoriesCustomElement {
    private categories: Array = [];
    constructor(
        public http: HttpClient
    ){
        this.http.get('http://arenda/getCategories')
            .then(data => {
                //console.log(JSON.parse(data.response));
                this.categories = JSON.parse(data.response);
            });
    }

}