<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SectorServiceModel extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'sector_service_data';
    protected $fillable = array('name', 'sector_id', 'name', 'sub_text', 'image_icon', 'image', 'practices', 'status');
}
