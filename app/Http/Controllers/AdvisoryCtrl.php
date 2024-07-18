<?php

namespace App\Http\Controllers;

use App\PratcieModel;
use Illuminate\Http\Request;
use App\ServicesModel;
use App\LeadershipModel;
use DB;

class AdvisoryCtrl extends Controller
{
    public function index($slug)
    {

        $pageData = ServicesModel::where('slug', $slug)->first();
        $explorePractices = PratcieModel::select('id', 'name')->where('status', 1)->orderBy('name', 'asc')->get();
        $peoples = LeadershipModel::where('status', 1)->orderBy('id', 'desc');
        $peoples = LeadershipModel::getFilterPeople($peoples);
        $peoples = $peoples->get();
        if ($pageData) {
            $why_lks_datas = json_decode($pageData->why_lks, true) ?: [];
            $page_array = [
                'id' => 'advisory',
                'name' => $pageData->name,
                'slug' => $pageData->slug,
                'image' => $pageData->image,
                'sub_text' => $pageData->sub_text,
                'description' => $pageData->description,
                'why_lks_datas' => $why_lks_datas,
                'title' => $pageData->page_title ? $pageData->page_title : $pageData->name,
                'meta_keywords' => $pageData->meta_keywords,
                'meta_description' => $pageData->meta_description,
                'body_class' => 'advisory',
                'meta_other' => $pageData->meta_other,
                'image_alt' => $pageData->image_alt,
                'parent_slug' => 'advisory',
                'explorePractices' => $explorePractices,
                'peoples' => $peoples

            ];
        } else {
            return CmspageCtrl::pageNotFound();
        }

        return response()->view('advisory', $page_array, 200);
    }
}
