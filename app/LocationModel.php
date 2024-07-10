<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LocationModel extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'locations';
    protected $fillable = array('name', 'sorting', 'status');
}
