<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SectorModel extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'sectors';
    protected $fillable = array('name', 'slug', 'sub_text', 'description', 'image1', 'image2', 'title1', 'title2', 'sorting', 'status', 'page_title', 'meta_keywords', 'meta_description', 'meta_other');
}
