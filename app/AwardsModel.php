<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class AwardsModel extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'awards';
    protected $fillable = array('id', 'name', 'year', 'image', 'show_home', 'status');


    static public function getYears()
    {
        // Get the current year
        $currentYear = Carbon::now()->year;

        // Get the year from 9 years ago
        $startYear = $currentYear - 9;
        $years = range($currentYear, $startYear);
        return $years;
    }
}
