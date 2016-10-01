<?php

namespace App;
use App\Category;
use App\Good_Category;
use Illuminate\Database\Eloquent\Model;

class Goodimg extends Model
{
    protected $table = 'goodimg';
    protected $fillable = [];

    static  function getImgByGoodId($good_id){
        $arr = Goodimg::select('id')->where('good_id', $good_id)->get()->toArray();
        return array_flatten($arr);
    }
}
