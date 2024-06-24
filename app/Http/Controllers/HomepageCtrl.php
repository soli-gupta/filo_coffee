<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CmspageModel;
use App\CmsBannerModel;
use App\MediaGalleryModel;
use App\ProductModel;
use App\ProductCategoryModel;
use App\ProductSubCategoryModel;
use DB;

class HomepageCtrl extends Controller
{
    public function homepage()
    {
        $items = ProductModel::where('status', '1')->orderBy('sorting', 'asc')->get();
        $item_categories = ProductCategoryModel::where('status', '1')->orderBy('sorting', 'asc')->get();
        $filo_stories = CmsBannerModel::where('status', 1)->where('type', '1')->orderBy('sorting', 'asc')->first();
        $contact_addresses = CmsBannerModel::where('status', 1)->where('type', '2')->orderBy('sorting', 'asc')->first();
        $opening_hours = CmsBannerModel::where('status', 1)->where('type', '3')->orderBy('sorting', 'asc')->first();
        $galleries = MediaGalleryModel::where('status', 1)->orderBy('sorting', 'asc')->get();

        $categoryDataArray = [];
        foreach ($item_categories as $category) {

            $productsNoSubcategory = ProductModel::where('category_id', $category->id)
                ->whereNull('sub_cate_id')
                ->get();
            $subcategories = ProductSubCategoryModel::where('cate_id', $category->id)->get();
            $subcategoriesData = [];

            foreach ($subcategories as $subcategory) {
                $products = ProductModel::where('sub_cate_id', $subcategory->id)->get();
                $subcategoriesData[] = [
                    'subcategory' => $subcategory,
                    'products' => $products
                ];
            }

            $categoryDataArray[] = [
                'item_category' => $category,
                'products_no_subcategory' => $productsNoSubcategory,
                'subcategories' => $subcategoriesData
            ];
        }

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
                'items' => $items,
                'itemsByCategory' => $categoryDataArray,  // Changed to match the Blade template
                'item_categories' => $item_categories,
                'filo_stories' => $filo_stories,
                'contact_addresses' => $contact_addresses ? $contact_addresses->description : '',
                'opening_hours' => $opening_hours ? $opening_hours->description : '',
                'galleries' => $galleries,
            ];
        } else {
            return CmspageCtrl::pageNotFound();
        }

        return response()->view('home_page', $page_array, 200);
    }
}
