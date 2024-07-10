<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PratcieModel extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'practices';
    protected $fillable = array('name', 'sorting', 'status');
}
