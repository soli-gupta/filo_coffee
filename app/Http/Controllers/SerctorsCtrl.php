<?php

namespace App\Http\Controllers;

use App\SectorServiceModel;
use Illuminate\Http\Request;
use App\SectorModel;
use App\LeadershipModel;
use DB;

class SerctorsCtrl extends Controller
{
    public function index($sector_slug)
    {
        $pageData = SectorModel::where('slug', $sector_slug)->first();

        $peoples = LeadershipModel::where('status', 1)->orderBy('id', 'desc');
        $peoples = LeadershipModel::getFilterPeople($peoples);
        $peoples = $peoples->get();

        if ($pageData) {
            $exploreSectors = SectorModel::select('id', 'name', 'slug')->where('id', '!=', $pageData->id)->where('status', 1)->get();
            $sectorsServices = SectorServiceModel::where('sector_id', $pageData->id)->where('status', 1)->get();

            $page_array = [
                'id' => 'sector',
                'name' => $pageData->name,
                'slug' => $pageData->slug,
                'sub_text' => $pageData->sub_text,
                'description' => $pageData->description,
                'image1' => $pageData->image1,
                'image2' => $pageData->image2,
                'title1' => $pageData->title1,
                'title2' => $pageData->title2,
                'body_class' => 'sector',
                'title' => $pageData->page_title ? $pageData->page_title : $pageData->name,
                'meta_keywords' => $pageData->meta_keywords,
                'meta_description' => $pageData->meta_description,
                'meta_other' => $pageData->meta_other,
                'image_alt' => $pageData->image_alt,
                'parent_slug' => 'sector',
                'exploreSectors' => $exploreSectors,
                'sectorsServices' => $sectorsServices,
                'peoples' => $peoples
            ];
        } else {
            return CmspageCtrl::pageNotFound();
        }

        return response()->view('manufacturing', $page_array, 200);
    }
}
