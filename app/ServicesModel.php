<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServicesModel extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'services';
    protected $fillable = array('name', 'slug', 'sub_text', 'description', 'image1', 'image2', 'title1', 'title2', 'sorting', 'status');
}
