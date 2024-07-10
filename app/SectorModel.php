<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SectorModel extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'sectors';
    protected $fillable = array('name', 'sorting', 'status');
}
