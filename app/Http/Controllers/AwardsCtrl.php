<?php

namespace App\Http\Controllers;

use App\AwardsModel;
use Illuminate\Http\Request;
use App\CmspageModel;
use App\LeadershipModel;

class AwardsCtrl extends Controller
{
    public function index()
    {

        $peoples = LeadershipModel::where('status', 1)->orderBy('id', 'desc');
        $peoples = LeadershipModel::getFilterPeople($peoples);
        $peoples = $peoples->get();

        $pageData = CmspageModel::where('slug', 'awards')->first();
        $years = AwardsModel::getYears();
        $awards = AwardsModel::where('status', 1)->orderBy('year', 'desc')->get()->groupBy('year');;
        if ($pageData) {
            $page_array = [
                'id' => 'awards',
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
                'body_class' => 'awards',
                'meta_other' => $pageData->meta_other,
                'image_alt' => $pageData->image_alt,
                'parent_slug' => 'awards',
                'years' => $years,
                'awards' => $awards,
                'peoples' => $peoples
            ];
        } else {
            return CmspageCtrl::pageNotFound();
        }

        return response()->view('awards', $page_array, 200);
    }
}
