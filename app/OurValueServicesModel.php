<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OurValueServicesModel extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'our_value_services';
    protected $fillable = array('id', 'name', 'short_description', 'description', 'author_name', 'sorting', 'status');
}
