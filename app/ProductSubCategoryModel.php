<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductSubCategoryModel extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'product_sub_category';
    protected $fillable = array('id', 'cate_id', 'name', 'slug', 'status', 'sorting');
}//end Block
