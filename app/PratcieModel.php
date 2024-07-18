<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PratcieModel extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'practices';
    protected $fillable = array('name', 'slug', 'sub_text', 'description', 'image', 'feature_content', 'sorting', 'status', 'page_title', 'meta_keywords', 'meta_description', 'meta_other');
}
