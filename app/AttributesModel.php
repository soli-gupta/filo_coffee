<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AttributesModel extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'attributes';
    protected $fillable = array('name');
  
   
}
