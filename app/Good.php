<?php

namespace App;
use App\Category;
use App\Good_Category;
use App\Goodimg;
use Illuminate\Database\Eloquent\Model;

class Good extends Model
{
    protected $table = 'good';
    protected $fillable = [];

    static function getGoodsByCategoryPseudo($pseudo){
        $Categories = (new Category())->select('id', 'name')->where('pseudo', $pseudo)->get();
        $id = $Categories[0]->id;

        $good_ids = (new Good_Category())->select('good_id')->where('category_id', $id)->get()->toArray();

        $goods = (new Good())->select('id', 'name', 'pseudo', 'mini_text', 'price')->whereIn('id', array_flatten($good_ids))->inRandomOrder()->get();

        $newArr = [];
        foreach($goods as $value){
            if(mb_strlen($value['mini_text'], 'utf-8')>200){
                $value['mini_text'] = mb_substr(strip_tags($value['mini_text']),0,200,'UTF-8').'.222..';
            }
            $value['imgArr'] = Goodimg::getImgByGoodId($value['id']);
            $value['price'] = floatval($value['price']);
            $newArr[] = $value;
        }

        return $newArr;
    }
}
