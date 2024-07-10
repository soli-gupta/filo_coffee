<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CmspageModel;
use App\LocationModel;
use App\LeadershipModel;
use App\PratcieModel;
use Illuminate\Support\Facades\Request as Input;
use DB;

class PeopleCtrl extends Controller
{

    public function index(Request $request)
    {

        $pageData = CmspageModel::where('slug', 'people')->first();
        $peoples = LeadershipModel::where('status', 1);

        $alpha_key = $request->people ? $request->people : 'A';
        $name = $request->name;
        $location = $request->location;
        $practice = $request->practice;

        if ($alpha_key) {
            $peoples = $peoples->where('name', 'LIKE', $alpha_key . '%');
        }

        if ($request->name) {
            $peoples->where('name', 'LIKE', $name . '%');
        }

        if ($request->location) {
            $peoples->where('location', $location);
        }

        if ($request->practice) {
            $peoples->where('practice', $practice);
        }

        $peoples = $peoples->orderBy('sorting', 'asc')->get();

        $people_count = $peoples->count();

        $practices = PratcieModel::where('status', 1)->get();
        $locations = LocationModel::where('status', 1)->orderBy('sorting', 'asc')->get();

        if ($pageData) {
            $page_array = [
                'id' => 'people',
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
                'body_class' => 'people',
                'meta_other' => $pageData->meta_other,
                'image_alt' => $pageData->image_alt,
                'parent_slug' => 'people',
                'people_count' => $people_count,
                'peoples' => $peoples,
                'practices' => $practices,
                'locations' => $locations

            ];
        } else {
            return CmspageCtrl::pageNotFound();
        }

        return response()->view('people', $page_array, 200);
    }
}
