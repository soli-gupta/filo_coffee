<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CmspageModel;
use App\LeadershipModel;
use DB;

class WhoWeAreCtrl extends Controller
{
    public function index()
    {
        $peoples = LeadershipModel::where('status', 1)->orderBy('id', 'desc');
        $peoples = LeadershipModel::getFilterPeople($peoples);
        $peoples = $peoples->get();

        $pageData = CmspageModel::where('slug', 'who-we-are')->first();

        if ($pageData) {
            $page_array = [
                'id' => 'who-we-are',
                'name' => $pageData->name,
                'sub_text' => $pageData->sub_text,
                'title' => $pageData->page_title ? $pageData->page_title : $pageData->name,
                'meta_keywords' => $pageData->meta_keywords,
                'meta_description' => $pageData->meta_description,
                'slug' => $pageData->slug,
                'content' => $pageData->content1,
                'content2' => $pageData->content2,
                'content3' => $pageData->content3,
                'image' => $pageData->image,
                'image_mobile' => $pageData->image_mobile,
                'body_class' => 'who-we-are',
                'meta_other' => $pageData->meta_other,
                'image_alt' => $pageData->image_alt,
                'parent_slug' => 'who-we-are',
                'peoples' => $peoples

            ];
        } else {
            return CmspageCtrl::pageNotFound();
        }
        return response()->view('who-we-are', $page_array, 200);
    }
}
