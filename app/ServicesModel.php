<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServicesModel extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'services';
    protected $fillable = array('name', 'sorting', 'status');
}
