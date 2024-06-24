<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MediaGalleryModel extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'media_gallery';
    protected $fillable = array('id', 'title', 'image_path', 'sorting', 'status');
}
