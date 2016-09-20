/**
 * Created by sislex on 18.09.16.
 */
import {HttpClient} from 'aurelia-http-client';

export class Categories {
    private categories: Array = [];
    constructor(){
        let http = new HttpClient();

        http.get('http://arenda/getCategories')
            .then(data => {
                console.log(JSON.parse(data.response));
                this.categories = JSON.parse(data.response);
            });
    }

}