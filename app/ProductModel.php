<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Request;

class ProductModel extends Model
{


  protected $primaryKey = 'id';
  protected $table = 'product';
  protected $fillable = array('id', 'name', 'slug', 'status', 'page_title', 'meta_keywords', 'meta_description', 'image', 'thumbnail_image', 'short_description', 'description', 'views_count', 'category_id', 'sub_cate_id', 'downloads', 'relevant_product', 'meta_other', 'layout', 'sub_text', 'type', 'tag', 'product_code', 'brand', 'new', 'stock', 'price', 'hsn_code', 'sale', 'sorting', 'search_text', 'cut_price', 'description2', 'description3', 'locations', 'available_centre', 'available_home_collection');


  public function category_data()
  {
    return $this->hasOne('App\ProductCategoryModel', 'id', 'category_id');
  } //end 

  public function brand_data()
  {
    return $this->hasOne('App\ProductCategoryModel', 'id', 'brand');
  } //end 



  static function category_names($cat_ids)
  {

    $category_name = '';

    $select_ids_array = explode(',', $cat_ids);

    foreach ($select_ids_array as $cat_id) {
      $cat_data = ProductCategoryModel::find($cat_id);

      if ($cat_data) {

        if ($category_name) {
          $category_name .= ',' . $cat_data->name;
        } else {
          $category_name .= $cat_data->name;
        }
      }
    }

    return $category_name;
  } //end 





  public function color_data()
  {
    return $this->hasOne('App\AttributesOptionModel', 'id', 'color');
  } //end 





  public static function catPds($cid)
  {
    $return_data = ProductModel::where("category_id", $cid)->where('status', '1')->get();
    return $return_data;
  }




  public static function filterLink($filter_key, $filte_value, $filte_type)
  {

    $search_url = '';
    foreach ($_GET as $key => $value) {
      if ($filter_key != $key) {
        $search_url .= $key . '=' . $value . '&';
        // echo $key . " : " . $value . "<br />\r\n";
      }
    }

    if ($filte_type == "add") {
      $search_url .= $filter_key . '=' . $filte_value;
    }

    if ($search_url) {
      return $current_filter_url = Request::url() . '?' . $search_url;
    } else {
      return $current_filter_url = Request::url();
    }
  }




  public static function PriceVariantHtml($variant_sku)
  {

    $variant_data = ProductVariantModel::where("sku", $variant_sku)->first();
    $price = $variant_data->price;

    $price_html = '<div class="price price-change-div"><i class="fa fa-inr" aria-hidden="true"></i> ' . number_format($variant_data->price, 2) . '</div>';

    if (!$price) {
      $product_id = $variant_data->product_id;
      $product_data = ProductModel::find($product_id);
      $price_html = '<div class="price price-change-div"><i class="fa fa-inr" aria-hidden="true"></i> ' . number_format($product_data->price, 2) . '</div>';
    }

    if ($variant_data->offer_price > 0 && $variant_data->price > $variant_data->offer_price) {
      $price_html = '<div class="price-off"><i class="fa fa-inr" aria-hidden="true"></i>  ' . number_format($variant_data->price, 2) . '/-</div>
                    <div class="price price-change-div"><i class="fa fa-inr" aria-hidden="true"></i> ' . number_format($variant_data->offer_price, 2) . '</div>';
    }
    return $price_html;
  }


  public static function PriceVariantFinal($variant_sku)
  {
    $variant_data = ProductVariantModel::where("sku", $variant_sku)->first();
    $price = $variant_data->price;

    if (!$price) {
      $product_id = $variant_data->product_id;
      $product_data = ProductModel::find($product_id);
      $price = $product_data->price;
    }




    if ($variant_data->offer_price > 0 && $variant_data->price > $variant_data->offer_price) {
      $price = $variant_data->offer_price;
    }
    return $price;
  }



  public static function PriceHtml($pid)
  {
    $product_data = ProductModel::find($pid);
    // $price_html='<div class="inr-bx">INR '.number_format($product_data->price).'</div>';


    $price_html = '<div class="inr-bx"><i class="fa fa-inr" aria-hidden="true"></i> N/A</div>';
    if ($product_data->price > 0) {
      $price_html = '<div class="inr-bx"><i class="fa fa-inr" aria-hidden="true"></i> ' . number_format($product_data->price, 2) . '</div>';
    }

    $variant_data = ProductVariantModel::where("product_id", $pid)->orderBy('price', 'asc')->first();
    if (isset($variant_data->price) && $variant_data->price > 0) {
      $price_html = '<div class="inr-bx"><i class="fa fa-inr" aria-hidden="true"></i> ' . number_format($variant_data->price, 2) . '</div>';
    }


    if (isset($variant_data->offer_price) && $variant_data->price > $variant_data->offer_price) {
      $price_html = '<div class="price-off"><i class="fa fa-inr" aria-hidden="true"></i>  ' . number_format($variant_data->price, 2) . '/-</div>
                    <div class="price price-change-div"><i class="fa fa-inr" aria-hidden="true"></i> ' . number_format($variant_data->offer_price, 2) . '</div>';
    }

    /*
                    if($product_data->special_price>0 && $product_data->price>$product_data->special_price){
                      
                       $price_html='<div class="inr-bx"><span>INR '.number_format($product_data->price).'</span> INR '.number_format($product_data->special_price).'</div>';
                        
                    }*/
    return $price_html;
  }

  public static function PriceFinal($pid)
  {
    $product_data = ProductModel::find($pid);
    $price = $product_data->price;
    /*
                        if($product_data->special_price>0 && $product_data->price>$product_data->special_price){
                            $price=$product_data->special_price;
                        }*/
    return $price;
  }


  public static function Url($pid)
  {
    $product_data = ProductModel::find($pid);
    $url = '';
    if ($product_data) {
      $url = 'product/' . $product_data->slug;
    }
    return $url;
  }

  // not use this function
  public static function Varient($pid, $type)
  {
    $product_data = ProductVariantModel::where("product_id", $pid)->first();
    $price = $product_data->price;
    if ($product_data->special_price > 0 && $product_data->price > $product_data->special_price) {
      $price = $product_data->special_price;
    }
    return $price;
  }

  // function PercentOffer
  public static function PercentOffer($pid)
  {
    $product_data = ProductModel::find($pid);

    $percent = 0;
    if ($product_data->special_price > 0 && $product_data->price > $product_data->special_price) {
      $percent = 100 - ($product_data->special_price * 100 / $product_data->price);
    }
    return $percent;
  }


  public static function SizesHtml($pid)
  {

    $html_output = '';
    $product_variants = ProductVariantModel::where("product_id", $pid)->where("status", 1)->orderBy('sorting', 'asc')->get();
    if ($product_variants) {
      $html_output .= ' <div class="pr-size">
                   
                    <div class="txt">Size</div>';
      $count = 0;
      foreach ($product_variants as $product_variant) {
        $count++;
        $html_output .= '<span>' . $product_variant->title . '</span>';
        if ($count == 5) {
          $html_output .= '..';
          break;
        }
      }
      $html_output .= '</div>';
    }

    return $html_output;
  }



  public static function productGallery($product_data, $type)
  {

    $html_output = '';

    $product_gallerys = ProductGalleryModel::where("product_id", $product_data->id)->where('status', 1)->orderBy('sorting', 'asc')->get();

    foreach ($product_gallerys as $row) {

      $html_output .= '<div class="item"><img src="' . $row->image_path . '" alt="' . $row->title . '"></div>';
    }


    return $html_output;
  }
}//end 
