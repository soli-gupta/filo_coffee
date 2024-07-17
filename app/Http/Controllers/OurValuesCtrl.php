<?php

namespace App\Http\Controllers;

use App\OurValueServicesModel;
use Illuminate\Http\Request;
use App\CmspageModel;
use App\CmsBannerModel;
use App\LeadershipModel;
use DB;

class OurValuesCtrl extends Controller
{
    public function index()
    {

        $pageData = CmspageModel::where('slug', 'our-value')->first();

        $peoples = LeadershipModel::where('status', 1)->orderBy('id', 'desc');
        $peoples = LeadershipModel::getFilterPeople($peoples);
        $peoples = $peoples->get();

        $ourValueServices = OurValueServicesModel::where('status', 1)->orderBy('sorting', 'asc')->get();
        if ($pageData) {
            $page_array = [
                'id' => 'our-value',
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
                'body_class' => 'our-value',
                'meta_other' => $pageData->meta_other,
                'image_alt' => $pageData->image_alt,
                'parent_slug' => 'our-value',
                'peoples' => $peoples,
                'ourValueServices' => $ourValueServices

            ];
        } else {
            return CmspageCtrl::pageNotFound();
        }

        return response()->view('our-value', $page_array, 200);
    }
}
