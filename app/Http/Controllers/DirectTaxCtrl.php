<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LeadershipModel;
use App\PratcieModel;
use DB;

class DirectTaxCtrl extends Controller
{
    public function index($slug)
    {
        $pageData = PratcieModel::where('slug', $slug)->first();

        $peoples = LeadershipModel::where('status', 1)->orderBy('id', 'desc');
        $peoples = LeadershipModel::getFilterPeople($peoples);
        $peoples = $peoples->get();

        if ($pageData) {

            $page_array = [
                'id' => $pageData->$slug,
                'name' => $pageData->name,
                'slug' => $pageData->slug,
                'sub_text' => $pageData->sub_text,
                'description' => $pageData->description,
                'feature_content' => $pageData->feature_content,
                'image' => $pageData->image,
                'title' => $pageData->page_title ? $pageData->page_title : $pageData->name,
                'meta_keywords' => $pageData->meta_keywords,
                'meta_description' => $pageData->meta_description,
                'body_class' => $pageData->$slug,
                'meta_other' => $pageData->meta_other,
                'image_alt' => $pageData->image_alt,
                'parent_slug' => $pageData->$slug,
                'peoples' => $peoples
            ];
        } else {
            return CmspageCtrl::pageNotFound();
        }

        return response()->view('direct-tax', $page_array, 200);
    }
}
