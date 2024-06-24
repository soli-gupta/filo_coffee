<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CmsBannerModel extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'cms_banner';
    protected $fillable = array('id', 'title', 'image_path', 'image_path_mobile', 'sorting', 'type', 'link_url', 'sub_text', 'status', 'description');

    public function brand_data()
    {
        return $this->belongsTo('App\ProductCategoryModel', 'brand_id', 'id');
    }
}
