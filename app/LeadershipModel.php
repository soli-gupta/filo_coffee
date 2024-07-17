<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request as Input;

class LeadershipModel extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'leadership';
    protected $fillable = array('id', 'name', 'slug', 'designation', 'practice', 'location', 'short_description', 'description', 'image', 'sorting', 'status');

    public static function getFilterPeople($peoples)
    {
        $GET_DATA = Input::input();
        $alpha_key = isset($GET_DATA['people']) ? $GET_DATA['people'] : '';
        $name = isset($GET_DATA['name']) ? $GET_DATA['name'] : '';
        $location_search = isset($GET_DATA['location']) ? $GET_DATA['location'] : '';
        $practice = isset($GET_DATA['practice']) ? $GET_DATA['practice'] : '';

        if ($alpha_key) {
            $peoples = $peoples->where('name', 'LIKE', $alpha_key . '%');
        }

        if (isset($GET_DATA['name']) && $GET_DATA['name']) {
            $peoples->where('name', 'LIKE', $name . '%');
        }

        if (isset($GET_DATA['location']) && $GET_DATA['location']) {
            $peoples->where('location', $location_search);
        }

        if (isset($GET_DATA['practice']) && $GET_DATA['practice']) {
            $peoples->where('practice', $practice);
        }

        return $peoples;
    }
}
