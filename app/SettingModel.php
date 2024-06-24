<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SettingModel extends Model
{
	

	 protected $primaryKey = 'id';
    protected $table = 'web_setting';
    protected $fillable = array('id', 'name','slug','status','description');



     public static function getValue($slug)
            {	
            	$return_data="";
            	$post_data = SettingModel::where("status",1)->where('slug',$slug)->first();
            	if($post_data){            		
            		$return_data=$post_data->description;
            	}

				
				return $return_data;

           }

           


           public static function getNewOrderNumber()
            {   
                
                $post_data = SettingModel::find(2);
                $last_number=$post_data->description;
                $post_data->description=$last_number+1;
                $post_data->save();
                return $last_number;

           }


           public static function getNewInvoiceNumber()
            {   
                
                $post_data = SettingModel::find(10);
                $last_number=$post_data->description;
                $post_data->description=$last_number+1;
                $post_data->save();
                return $last_number;

           } 

           public static function getNewCustomerNumber()
            {   
                
                $post_data = SettingModel::find(3);
                $last_number=$post_data->description;
                $post_data->description=$last_number+1;
                $post_data->save();
                return $last_number;

           } 

   
                 public static function strToStandard($str)
                    { 
                     

      //$str="Let Your Collection AddOn With Formal Ballerinas From The House Of Maryjane. The Upper Of These Ballerinas Are Made Of Pu Material To Provide Ultimate Durability Balance. Front Bow & Stitching Made Product Stylish.";
                        $str=strtolower($str);
                        $str_array=explode('. ',$str);
                        $str2='';
                        foreach($str_array as $value){
                         
                          $value=str_replace(".","",$value);
                            if($value){
                            $str2.=ucfirst($value).'. ';
                          }
                        }

                
                return $str2;

                   }



}//end Block
