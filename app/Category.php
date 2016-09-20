<?php

namespace App;
//use Symfony\Component\HttpFoundation\Response;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';
    protected $fillable = [];

    static function getCategory(){
        $Category = new Category;
        $items = $Category->select('id', 'category_id', 'name')->get();

//        dd($items[0]);



        return $Category->getChildren($items, 17);
    }

    public function getChildren($arr, $category_id){
        $result = [];
        foreach($arr as $value){
            if($value['category_id'] == $category_id){
                $array['item'] = $value;
                $array['children'] = $this->getChildren($arr, $value['id']);
                $result[] = $array;
            }
        }

        return $result;
    }
}
