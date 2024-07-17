<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\BlogCommentModel;

class BlogPostModel extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'blog_post';
    protected $fillable = array('id', 'name', 'slug', 'status', 'page_title', 'meta_keywords', 'meta_description', 'posted_by', 'posted_date', 'sorting', 'image', 'short_description', 'description', 'views_count', 'image2');

    public static function getPostUrl($post_slug)
    {

        $blog_url = url('/blog') . '/' . $post_slug;
        return $blog_url;
    }

    public static function getPostPrv($post_id)
    {
        $post_data = "";
        $previous_id = BlogPostModel::where('status', 1)->where('id', '<', $post_id)->max('id');
        if ($previous_id) {
            $post_data = BlogPostModel::where('status', 1)->where('id', $previous_id)->first();
        }
        return $post_data;
    }

    public static function getPostNaxt($post_id)
    {
        $post_data = "";
        $next_id = BlogPostModel::where('status', 1)->where('id', '>', $post_id)->min('id');

        if ($next_id) {
            $post_data = BlogPostModel::where('status', 1)->where('id', $next_id)->first();
        }


        return $post_data;
    }
}//end Block
