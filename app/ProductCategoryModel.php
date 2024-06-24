<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductCategoryModel extends Model
{


    protected $primaryKey = 'id';
    protected $table = 'product_category';
    protected $fillable = array('id', 'name', 'slug', 'status', 'sorting');

    public function type_data()
    {
        return $this->hasOne('App\AttributesOptionModel', 'id', 'type');
    } //end 


    public static function getCatUrlById($cat_id)
    {
        $url = 'category/';
        if (ProductCategoryModel::find($cat_id)) {
            $parent_id = ProductCategoryModel::where('id', $cat_id)->first()->parent_id;

            if ($parent_id) {
                $parent_cat = ProductCategoryModel::find($parent_id);
                $url .= $parent_cat->slug;

                if ($parent_id == 8) {
                    $cat = ProductCategoryModel::where('id', $cat_id)->where('status', '1')->first();
                    $url .= '/' . $cat->slug;
                }
            } else {

                $cat = ProductCategoryModel::where('id', $cat_id)->where('status', '1')->first();
                $url .= $cat->slug;
            }
        }
        return url($url);

        //{{App\ProductCategoryModel::getCatUrlById(7)}}
    }
}//end Block
