<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServicesModel extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'services';
    protected $fillable = array('name', 'slug', 'sub_text', 'description', 'image', 'title1', 'why_lks', 'sorting', 'status', 'page_title', 'meta_keywords', 'meta_description', 'meta_other');
}
