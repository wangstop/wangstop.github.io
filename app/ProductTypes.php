<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductTypes extends Model
{

    protected $table='product_types';

    public function product_data()
    {
        // 1對多連到News_img的newid對sort大到小排序
        return $this->hasMany('App\products','type_id')->orderBy('sort','desc');
    }

    protected $fillable = [
        'id','types','sort',
    ];
}
