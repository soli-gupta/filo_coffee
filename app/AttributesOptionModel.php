<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AttributesOptionModel extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'attributes_option';
    protected $fillable = array('attributes_id','name','status','sorting','value','value2','slug');
  

  public function attribute_data()
	{
		return $this->hasOne('App\AttributesModel','id','attributes_id');
	}//end state


	  public static function name($id)
			{
				$name='';
				$AttributesOptionData=AttributesOptionModel::find($id);
				if($AttributesOptionData){
					$name=$AttributesOptionData->name;
				}
				return $name;
				//{{ App\AttributesOptionModel::name($data_row->case_type) }}
			}//end 

			  public static function name_by_code($slug)
				{
					$name=$slug;
					$AttributesOptionData=AttributesOptionModel::where("slug",$slug)->first();
					if($AttributesOptionData){
						$name=$AttributesOptionData->name;
					}
					return $name;
					//{{ App\AttributesOptionModel::name($data_row->case_type) }}
				}//end 

			  public static function comma_separated_values($comma_separated_values)
				{

					$name='';
					$count=1;
				   foreach(explode(",",$comma_separated_values) as $val){
				   		if($count==1){
							$name.=AttributesOptionModel::name_by_code($val); 
				   		} else{
				   			$name.=', '.AttributesOptionModel::name_by_code($val);
				   		}
		          		
		          		$count++;
		          }
				
					return $name;
					//{{ App\AttributesOptionModel::name($data_row->case_type) }}
				}//end 

				


			public static function value1($id)
			{
				$name='';
				$AttributesOptionData=AttributesOptionModel::find($id);
				if($AttributesOptionData){
					$name=$AttributesOptionData->value;
				}
				return $name;
				//{{ App\AttributesOptionModel::name($data_row->case_type) }}
			}//end 

			public static function value2($id)
			{
				$name='';
				$AttributesOptionData=AttributesOptionModel::find($id);
				if($AttributesOptionData){
					$name=$AttributesOptionData->value2;
				}
				return $name;
				//{{ App\AttributesOptionModel::name($data_row->case_type) }}
			}//end 
   
}
