<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CmspageModel;
use App\CmsBannerModel;
use App\MediaGalleryModel;
use DB;

class HomepageCtrl extends Controller
{
    public function homepage()
    {
        $banner_videos = CmsBannerModel::where('status', 1)->where('type', '1')->orderBy('sorting', 'asc')->get();
        $whats_news = CmsBannerModel::where('status', 1)->where('type', '2')->orderBy('sorting', 'asc')->get();
        $short_about = CmsBannerModel::where('status', 1)->where('type', '3')->first();
        $services = CmsBannerModel::where('status', 1)->where('type', '4')->first();
        $accolades_and_awards = CmsBannerModel::where('status', 1)->where('type', '5')->first();
        $grow_with_us = CmsBannerModel::where('status', 1)->where('type', '6')->first();
        $scancode = CmsBannerModel::where('status', 1)->where('type', '7')->first();
        $stay_in_loop = CmsBannerModel::where('status', 1)->where('type', '8')->first();

        $pageData = CmspageModel::where('slug', 'home')->first();
        if ($pageData) {
            $page_array = [
                'id' => 'homepage',
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
                'body_class' => 'homepage',
                'meta_other' => $pageData->meta_other,
                'image_alt' => $pageData->image_alt,
                'parent_slug' => 'homepage',
                'banner_videos' => $banner_videos,
                'whats_news' => $whats_news,
                'short_about' => $short_about ? $short_about : '',
                'services' => $services,
                'accolades_and_awards' => $accolades_and_awards,
                'grow_with_us' => $grow_with_us,
                'scancode' => $scancode,
                'stay_in_loop' => $stay_in_loop
            ];
        } else {
            return CmspageCtrl::pageNotFound();
        }

        return response()->view('home_page', $page_array, 200);
    }
}
