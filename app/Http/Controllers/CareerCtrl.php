<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CmspageModel;
use App\CmsBannerModel;
use DB;

class CareerCtrl extends Controller
{
    public function index()
    {

        $pageData = CmspageModel::where('slug', 'career')->first();
        if ($pageData) {
            $page_array = [
                'id' => 'career',
                'name' => $pageData->name,
                'sub_text' => $pageData->sub_text,
                'title' => $pageData->page_title ? $pageData->page_title : $pageData->name,
                'meta_keywords' => $pageData->meta_keywords,
                'meta_description' => $pageData->meta_description,
                'slug' => $pageData->slug,
                'content' => $pageData->content1,
                'content2' => $pageData->content2,
                'image' => $pageData->image,
                'image_mobile' => $pageData->image_mobile,
                'body_class' => 'career',
                'meta_other' => $pageData->meta_other,
                'image_alt' => $pageData->image_alt,
                'parent_slug' => 'career',

            ];
        } else {
            return CmspageCtrl::pageNotFound();
        }

        return response()->view('career_page', $page_array, 200);
    }
}
