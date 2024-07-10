<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LeadershipModel extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'leadership';
    protected $fillable = array('id', 'name', 'slug', 'designation', 'practice', 'location', 'short_description', 'description', 'image', 'sorting', 'status');
}
