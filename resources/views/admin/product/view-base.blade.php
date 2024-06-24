@extends('admin.layouts.template_admin')


@section('content')
<?php
use App\ProductCategoryModel;

?>
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
     

        <div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">General Details</h3>
            </div>
            <!-- /.box-header -->




            <!-- form start -->
        <form class="form-horizontal" method="POST" action="<?php echo url(ADMIN_FOLDER);?>/<?php echo $page_name;?>/save" enctype="multipart/form-data">
             {{ csrf_field() }}

             <input type="hidden" required="" name="id" value="{{ (isset($data_row->id))?$data_row->id:'' }}">

              <div class="box-body">




             

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Product Name</label>
                  <div class="col-sm-10">
                    <input type="text" required="" class="form-control nospecial   get_url_name" id="name" name="name" value="{{ (isset($data_row->name))?$data_row->name:old('name') }}">
                  </div>
                </div>

                <div class="form-group hide">
                  <label for="inputEmail3" class="col-sm-2 control-label">Product Short Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control nospecial   " id="sub_text" name="sub_text" value="{{ (isset($data_row->sub_text))?$data_row->sub_text:old('sub_text') }}">
                  </div>
                </div>  


               

      



           

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Slug</label>
                  <div class="col-sm-10">
                    <input type="text" required="" class="form-control nospecial   put_url_key" id="slug" name="slug" value="{{ (isset($data_row->slug))?$data_row->slug:old('slug') }}">
                  </div>
                </div> 


                  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Buy Link</label>
                  <div class="col-sm-10">
                    <input type="url" class="form-control nospecial   " id="buy_link" name="buy_link" value="{{ (isset($data_row->buy_link))?$data_row->buy_link:old('buy_link') }}" required="">
                  </div>
                </div>  


                

              <div class="form-group hide">
                  <label for="inputEmail3" class="col-sm-2 control-label">Type</label>        
                  <div class="col-sm-10">                       
                  <select name="type" class="form-control nospecial  " required  > 
                        @foreach ($types_rows  as $row)
                            <?php 
                              $selected='';
                              if(isset($data_row['type']) && $data_row['type']==$row->slug){
                                $selected='selected';
                              }elseif(old('type')==$row->slug){
                                 $selected='selected';
                              } 
                            ?>
                <option value="<?php echo $row->slug;?>"   {{ $selected }}  >
                <?php echo $row->name;?>
                </option>
                    @endforeach 
                   </select>
                  </div>
            </div>

            

                <div class="form-group hide">
                  <label for="inputEmail3" class="col-sm-2 control-label">Product Code</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control nospecial   " id="product_code" name="product_code" value="{{ (isset($data_row->product_code))?$data_row->product_code:old('product_code') }}">
                  </div>
                </div> 

             


                <?php /*

                  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Brand</label>
                  <div class="col-sm-10">
                    <input type="text" required="" class="form-control nospecial   " id="brand" name="brand" value="{{ (isset($data_row->brand))?$data_row->brand:old('brand') }}">
                  </div>
                </div>

             <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Brand</label>        
                  <div class="col-sm-10">                       
                  <select name="brand" class="form-control nospecial  " required  >  
                   <option value=""></option>               
                        @foreach ($brands  as $row)
                            <?php 
                              $selected='';
                              if(isset($data_row['brand']) && $data_row['brand']==$row->id){
                                $selected='selected';
                              }elseif(old('brand')==$row->id){
                                 $selected='selected';
                              } 
                            ?>
                <option value="<?php echo $row->id;?>"   {{ $selected }}  >
                <?php echo $row->name;?>
                </option>
                    @endforeach 
                   </select>
                  </div>
            </div>  
            */?>


           <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Category</label>        
                  <div class="col-sm-10">                       
                  <select name="category_id" class="form-control nospecial  " required  >
                   <option value=""></option>                 
                        @foreach ($categorys  as $category)
                            <?php 
                              $selected='';
                              if(isset($data_row['category_id']) && $data_row['category_id']==$category->id){
                                $selected='selected';
                              }elseif(old('category_id')==$category->id){
                                 $selected='selected';
                              } 
                            ?>
                <option value="<?php echo $category->id;?>"   {{ $selected }}  >
                <?php echo $category->name;?>
                </option>
                    @endforeach 
                   </select>
                  </div>
            </div>

             <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Sorting</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control nospecial   " id="sorting" name="sorting" value="{{ (isset($data_row->sorting))?$data_row->sorting:old('sorting') }}">
                  </div>
                </div>  



             
<?php /*
   <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Color</label>        
                  <div class="col-sm-10">                       
                  <select name="color" class="form-control nospecial  " required  >  
                   <option value=""></option>               
                        @foreach ($colors  as $row)
                            <?php 
                              $selected='';
                              if(isset($data_row['color']) && $data_row['color']==$row->slug){
                                $selected='selected';
                              }elseif(old('color')==$row->slug){
                                 $selected='selected';
                              } 
                            ?>
                <option value="<?php echo $row->slug;?>"   {{ $selected }}  >
                {{ $row->name}} ({{ $row->slug }})
                </option>
                    @endforeach 
                   </select>
                  </div>
            </div>



               <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Color Code</label>
                  <div class="col-sm-10">
                    <input type="text"  class="form-control nospecial   " id="color" name="color" value="{{ (isset($data_row->color))?$data_row->color:old('color') }}">
                  </div>
              </div> 


               <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Color Name</label>
                  <div class="col-sm-10">
                    <input type="text"  class="form-control nospecial   " id="color_name" name="color_name" value="{{ (isset($data_row->color_name))?$data_row->color_name:old('color_name') }}">
                  </div>
              </div> 

            
               <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Gender</label>
                  <div class="col-sm-10">
                    <input type="text" required="" class="form-control nospecial   " id="gender" name="gender" value="{{ (isset($data_row->gender))?$data_row->gender:old('gender') }}">
                  </div>
                </div> 
              <?php /*
             <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Gender</label>        
                  <div class="col-sm-10">                       
                  <select name="gender" class="form-control nospecial   " required  > 
                  <option value=""></option>         
                        @foreach ($gender_rows  as $row)
                            <?php 
                              $selected='';
                              if(isset($data_row['gender']) && $data_row['gender']==$row->slug){
                                $selected='selected';
                              }elseif(old('gender')==$row->slug){
                                 $selected='selected';
                              } 
                            ?>
                <option value="<?php echo $row->slug;?>"   {{ $selected }}  >
               {{ $row->name}} ({{ $row->slug }})
                </option>
                    @endforeach 
                   </select>
                  </div>
            </div>
           
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">HSN Code</label>
                  <div class="col-sm-10">
                    <input type="text" required="" class="form-control nospecial   " id="hsn_code" name="hsn_code" value="{{ (isset($data_row->hsn_code))?$data_row->hsn_code:old('hsn_code') }}">
                  </div>
                </div> 

                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">MFG name</label>
                  <div class="col-sm-10">
                    <input type="text" required="" class="form-control nospecial   " id="mfg_name" name="mfg_name" value="{{ (isset($data_row->mfg_name))?$data_row->mfg_name:old('mfg_name') }}">
                  </div>
                </div> 
               
               <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">MFG name</label>        
                  <div class="col-sm-10">                       
                  <select name="mfg_name" class="form-control nospecial   " required  >  
                  <option value=""></option>         
                        @foreach ($mfg_rows  as $row)
                            <?php 
                              $selected='';
                              if(isset($data_row['mfg_name']) && $data_row['mfg_name']==$row->slug){
                                $selected='selected';
                              }elseif(old('mfg_name')==$row->slug){
                                 $selected='selected';
                              } 
                            ?>
                <option value="<?php echo $row->slug;?>"   {{ $selected }}  >
                {{ $row->name}} ({{ $row->slug }})
                </option>
                    @endforeach 
                   </select>
                  </div>
            </div>
          

               

               <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Sole</label>
                  <div class="col-sm-10">
                    <input type="text" required="" class="form-control nospecial   " id="sole" name="sole" value="{{ (isset($data_row->sole))?$data_row->sole:old('sole') }}">
                  </div>
              </div> 
*/?>
              <?php /*
               <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Material</label>        
                  <div class="col-sm-10">                       
                  <select name="material" class="form-control nospecial  "  >
                  <option value=""></option>          
                        @foreach ($materials  as $row)
                            <?php 
                              $selected='';
                              if(isset($data_row['material']) && $data_row['material']==$row->id){
                                $selected='selected';
                              }elseif(old('material')==$row->id){
                                 $selected='selected';
                              } 
                            ?>
                <option value="<?php echo $row->id;?>"   {{ $selected }}  >
                <?php echo $row->name;?>
                </option>
                    @endforeach 
                   </select>
                  </div>
            </div>

            <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Sole</label>        
                  <div class="col-sm-10">                       
                  <select name="sole" class="form-control nospecial  " required >  
                   <option value=""></option>               
                        @foreach ($soles  as $row)
                            <?php 
                              $selected='';
                              if(isset($data_row['sole']) && $data_row['sole']==$row->id){
                                $selected='selected';
                              }elseif(old('sole')==$row->id){
                                 $selected='selected';
                              } 
                            ?>
                <option value="<?php echo $row->id;?>"   {{ $selected }}  >
                <?php echo $row->name;?>
                </option>
                    @endforeach 
                   </select>
                  </div>
            </div>

  */?>




                <?php /*
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Category</label>        
                  <div class="col-sm-10"> 

                    <?php
                     $category_id_ids_array=array();
        if(isset($data_row['category_id'])){
          $category_id_ids_array=explode(',',$data_row['category_id']);        
        }  

        ?>

                <select name="category_id[]" class="form-control nospecial   select select2"  required >
        
                           <option value=""></option>
                           <?php foreach ($categorys as $key => $category) { ?>
                             <option value="<?php echo $category->id;?>"  <?php echo (in_array($category->id,$category_id_ids_array))?'selected':'';?>>
                              <?php 

                              if($category->parent_id!=''){                              
                               if(isset(ProductCategoryModel::where('id',$category->parent_id)->first()->name)){
                               echo ProductCategoryModel::where('id',$category->parent_id)->first()->name;
                               echo ' ';
                              } 
                            }

                              echo $category->name;
                            ?> </option>
                       
                        <?php } ?>
                   </select>
                  </div>
            </div> */?>



          
           

            <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Available</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control nospecial   " id="available" name="available"  required="" value="{{ (isset($data_row->available))?$data_row->available:'1 Kg' }}">
                  </div>
                </div> 

                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Quality 1</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control nospecial   " id="quality_1" name="quality_1"  required="" value="{{ (isset($data_row->quality_1))?$data_row->quality_1:old('quality_1') }}">
                  </div>
                </div>  


                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Quality 2</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control nospecial   " id="quality_2" name="quality_2" required="" value="{{ (isset($data_row->quality_2))?$data_row->quality_2:old('quality_2') }}">
                  </div>
                </div>  


                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Quality 3</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control nospecial   " id="quality_3" name="quality_3" required="" value="{{ (isset($data_row->quality_3))?$data_row->quality_3:old('quality_3') }}">
                  </div>
                </div>  

                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Quality 4</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control nospecial   " id="quality_4" name="quality_4" required="" value="{{ (isset($data_row->quality_4))?$data_row->quality_4:old('quality_4') }}">
                  </div>
                </div>  

                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Quality 5</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control nospecial   " id="quality_5" name="quality_5"  required="" value="{{ (isset($data_row->quality_5))?$data_row->quality_5:old('quality_5') }}">
                  </div>
                </div>  




                
             <div class="form-group hide">
                  <label for="inputEmail3" class="col-sm-2 control-label">Status</label>        
                  <div class="col-sm-10">                       
                  <select name="status" class="form-control nospecial   select" required  >          
                        @foreach ( Config::get('constants.CONS_STATUS_ARRAY')  as $key =>$val)
                            <?php 
                              $selected='';
                              if(isset($data_row['status']) && $data_row['status']==$key){
                                $selected='selected';
                              }elseif(old('status')==$key){
                                 $selected='selected';
                              } 
                            ?>
                <option value="{{ $key }}"   {{ $selected }}  >
                 {{ $val }}
                </option>
                    @endforeach 
                   </select>
                  </div>
            </div>


         
    
             <div class="form-group hide">
                  <label for="inputEmail3" class="col-sm-2 control-label">New</label>        
                  <div class="col-sm-10">                       
                  <select name="new" class="form-control nospecial   select" required  >          
                        @foreach ( Config::get('constants.CONS_YES_NO_ARRAY')  as $key =>$val)
                            <?php 
                              $selected='';
                              if(isset($data_row['new']) && $data_row['new']==$key){
                                $selected='selected';
                              }elseif(old('new')==$key){
                                 $selected='selected';
                              } 
                            ?>
                <option value="{{ $key }}"   {{ $selected }}  >
                 {{ $val }}
                </option>
                    @endforeach 
                   </select>
                  </div>
            </div>

             <div class="form-group hide">
                  <label for="inputEmail3" class="col-sm-2 control-label">Sale</label>        
                  <div class="col-sm-10">                       
                  <select name="sale" class="form-control nospecial  " required  >          
                        @foreach ( Config::get('constants.CONS_YES_NO_ARRAY')  as $key =>$val)
                            <?php 
                              $selected='';
                              if(isset($data_row['sale']) && $data_row['sale']==$key){
                                $selected='selected';
                              }elseif(old('sale')==$key){
                                 $selected='selected';
                              } 
                            ?>
                <option value="{{ $key }}"   {{ $selected }}  >
                 {{ $val }}
                </option>
                    @endforeach 
                   </select>
                  </div>
            </div>

          





            <div class="form-group hide">
                  <label for="inputEmail3" class="col-sm-2 control-label">Stock Status</label>        
                  <div class="col-sm-10">          
                  <select name="stock" class="form-control nospecial   select" required  >   
                   
                        @foreach ( Config::get('constants.CONS_STOCK_ARRAY')  as $key =>$val)
                            <?php 
                              $selected='';
                              if(isset($data_row['stock']) && $data_row['stock']==$key){
                                $selected='selected';
                              }
                            ?>
                <option value="{{ $key }}"   {{ $selected }}  >
                 {{ $val }}
                </option>
                    @endforeach 
                   </select>
                  </div>
            </div>




        


                  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Main Image</label>
                  <div class="col-sm-10">
         <?php if(isset($data_row['image']) && $data_row['image']!=''){?>

  <a href="{{ STATIC_PUBLIC_URL }}<?= $data_row['image']; ?>" data-lightbox="{{ $data_row->id}}" data-title="Image">
      <img src="{{ STATIC_PUBLIC_URL }}<?php echo $data_row['image'];?>" height="70px">
  </a>

 <br/> Delete <input type="checkbox" name="image_delete" value="1">
          <?php } ?>
           <input type="file" name="image" id="image" accept="image/jpeg,image/gif,image/x-png">
         <!-- <p class="help-block">Image Size : 604 x 460 </p> -->
                  </div>
                </div>





    <!-- 
     
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Menu Thumbnail Image</label>
                  <div class="col-sm-10">
      <?php if(isset($data_row['thumbnail_image']) && $data_row['thumbnail_image']!=''){?>
                    <img src="{{ URL::asset('/') }}<?php echo $data_row['thumbnail_image'];?>" height="100px">
          <br/> Delete <input type="checkbox" name="thumbnail_image_delete" value="1">
          <?php } ?>
        <input type="file" name="thumbnail_image" id="thumbnail_image" accept="image/jpeg,image/gif,image/x-png">
         <p class="help-block">Image Size :</p>
                  </div>
                </div>


         <div class="form-group hide">
                  <label for="inputEmail3" class="col-sm-2 control-label">Banner Image</label>
                  <div class="col-sm-10">
      <?php if(isset($data_row['banner']) && $data_row['banner']!=''){?>
                    <img src="{{ URL::asset('/') }}<?php echo $data_row['banner'];?>" height="100px">
          <br/> Delete <input type="checkbox" name="banner_delete" value="1">
          <?php } ?>
        <input type="file" name="banner" id="banner" accept="image/jpeg,image/gif,image/x-png">
         <p class="help-block">Image Size :</p>
                  </div>
                </div>


               <div class="form-group hide">
                  <label for="inputEmail3" class="col-sm-2 control-label">Banner Mobile Image</label>
                  <div class="col-sm-10">
      <?php if(isset($data_row['banner_mobile']) && $data_row['banner_mobile']!=''){?>
                    <img src="{{ URL::asset('/') }}<?php echo $data_row['banner_mobile'];?>" height="100px">
          <br/> Delete <input type="checkbox" name="banner_mobile_delete" value="1">
          <?php } ?>
        <input type="file" name="banner_mobile" id="banner_mobile" accept="image/jpeg,image/gif,image/x-png">
         <p class="help-block">Image Size :</p>
                  </div>
                </div>


                             <div class="form-group hide">
                  <label for="inputEmail3" class="col-sm-2 control-label">Plate Dish/Back Image</label>
                  <div class="col-sm-10">
      <?php if(isset($data_row['back_image']) && $data_row['back_image']!=''){?>
                    <img src="{{ URL::asset('/') }}<?php echo $data_row['back_image'];?>" height="100px">
          <br/> Delete <input type="checkbox" name="back_image_delete" value="1">
          <?php } ?>
        <input type="file" name="back_image" id="back_image" accept="image/jpeg,image/gif,image/x-png">
         <p class="help-block">Image Size :</p>
                  </div>
                </div>
 -->



                 




      <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Short Description</label>

                  <div class="col-sm-10">
                  <textarea class="form-control nospecial   summernote111" id="short_description" name="short_description">{{ (isset($data_row->short_description))?$data_row->short_description:old('short_description') }}</textarea>       


                </div>
        </div>  

        <?php /*


                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Description</label>

                  <div class="col-sm-10">
                  <textarea class="form-control nospecial   summernote" id="description" name="description">{{ (isset($data_row->description))?$data_row->description:old('description') }}</textarea>       


                  </div>
                </div>


                */?>



               


          <?php
                     $tag_ids_array=array();
        if(isset($data_row['tag'])){
          $tag_ids_array=explode(',',$data_row['tag']);        
        }  

        ?>
            <div class="form-group hide">
                  <label for="inputEmail3" class="col-sm-2 control-label">Tags</label>        
                  <div class="col-sm-10">                       
                  <select name="tag[]" class="form-control nospecial   select2"  multiple="" >
                  <option value=""></option>          
                        @foreach ($tags  as $row)
                            <?php 
                              $selected='';
                              if(isset($data_row['tag']) && in_array($row['id'],$tag_ids_array)){
                                $selected='selected';
                              }elseif(old('tag')==$row->id){
                                 $selected='selected';
                              } 
                            ?>
                          
                <option value="<?php echo $row->id;?>"   {{ $selected }}  >
                <?php echo $row->name;?>
                </option>
                    @endforeach 
                   </select>
                  </div>
            </div>
                
          
   <div class="box-header with-border">






                
     

                

       <div class="box-header with-border">
              <h3 class="box-title">SEO</h3>
            </div>

              <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Page Title</label>
                  <div class="col-sm-10">
                    <input type="text" required="" class="form-control nospecial   " id="page_title" name="page_title" value="{{ (isset($data_row->page_title))?$data_row->page_title:old('page_title') }}">
                  </div>
                </div>

                             

                 

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Meta Keywords</label>

                  <div class="col-sm-10">
                  <textarea class="form-control nospecial  " id="meta_keywords" name="meta_keywords">{{ (isset($data_row->meta_keywords))?$data_row->meta_keywords:old('meta_keywords') }}</textarea>       


                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Meta Description</label>

                  <div class="col-sm-10">
                  <textarea class="form-control nospecial  " id="meta_description" name="meta_description">{{ (isset($data_row->meta_description))?$data_row->meta_description:old('meta_description') }}</textarea>       


                  </div>
                </div>


                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Meta Other</label>

                  <div class="col-sm-10">
                  <textarea class="form-control nospecial  " id="meta_other" name="meta_other">{{ (isset($data_row->meta_other))?$data_row->meta_other:old('meta_other') }}</textarea>       


                  </div>
                </div>
            
             	

             	<div class="box-header with-border hide" >
              <h3 class="box-title">Design</h3>
            </div>

                 <div class="form-group hide" >
                  <label for="inputEmail3" class="col-sm-2 control-label">Product Layout(Enter only when need new layout)</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control nospecial  " id="layout" name="layout" value="{{ (isset($data_row->layout))?$data_row->layout:old('layout') }}">
                  </div>
                </div>


               
               

                
            <div class="box-header with-border hide" >
              <h3 class="box-title">Relevant Product</h3>
            </div>

                <div class="form-group hide" >
                  <label for="inputEmail3" class="col-sm-2 control-label">Relevant Products</label>
                  <div class="col-sm-10">                   
        <select name="relevant_product[]" class="form-control nospecial   select select2" multiple style="height:200px;">
        <?php
          $relevant_product_ids_array=array();
        if(isset($data_row['relevant_product'])){
          $relevant_product_ids_array=explode(',',$data_row['relevant_product']);        
        }       
         foreach($relevant_products as $relevant_product){  ?>
            <option value="<?php echo $relevant_product['id'];?>" <?php echo (in_array($relevant_product['id'],$relevant_product_ids_array))?'selected':'';?>><?php echo $relevant_product['name'];?></option>
          <?php } ?>
          </select>
                  </div>
                </div>







                <input type="hidden" name="submit_type" id="submit_type" value="1">
                <div class="box-footer pull-right">         
                <button type="submit" class="btn btn-primary" onclick="actionType(1)">Save</button>
                <button type="submit" class="btn bg-olive " onclick="actionType(2)">Save and Continue</button>  

                  <button type="reset" class="btn btn-default ">Reset</button>
                   <button type="button" class="btn btn-default" onclick="javascript:location.href='<?php echo url(ADMIN_FOLDER);?>/<?php echo $page_name;?>'">Back</button>

                    <?php if(isset($data_row['id']) && $data_row['id']!=''){?>
                    <button type="submit" class="btn bg-red " onclick="actionType(3)" >Delete</button>
                    <?php } ?>
                  

              </div>



              </div>
              <!-- /.box-body -->
  </form>


      </div>
      </div>
      <!-- /.row (main row) -->
</div>
    </section>



<!-- variant image-->


 <?php  /* if(isset($data_row->id)){?>
<!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
     

        <div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title"><b>Variants Product</b></h3>
            </div>

            <div class="box-header with-border">
               <h3 class="box-title">Total <?php echo count($ProductVariant_rows);?> records.</h3>
              <a class="btn btn-primary" href="<?php echo url(ADMIN_FOLDER);?>/product-variant/new/{{ $data_row->id }}">Add new Variant</a>
            </div>


            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr>
                  <th>ID</th>
                  <th>Size(Name)</th>                
                  <th>SKU</th> 
                  <th>QTY</th> 
                   <th>Price</th>  
                   <th>Offer Price</th>  
                   <th>Batch No</th>  
                   <th>Sorting</th>  

                             
                       
                  
                  <th>Status</th>                  
                  <th>Created At</th>
                  <th>Updated At</th>
                  <th>Action</th>
                  
                </tr>
                @foreach ($ProductVariant_rows as $variant_row)
                <tr>
                  <td> {{ $variant_row->id }}</td>
                  <td> {{ $variant_row->title }}</td>
                  <td> {{ $variant_row->sku }}</td>
                  <td> {{ $variant_row->qty }}</td>
                  <td> {{ $variant_row->price }}</td>
                  <td> {{ $variant_row->offer_price }}</td>
                  
                 
                  <td> {{ $variant_row->batch_no }}</td>
                <td> {{ $variant_row->sorting }}</td>

                  
                 
                   <td><span class="label label-<?php echo ($variant_row->status=='1')?'success':'danger';?>">
                   {{ Config::get('constants.CONS_STATUS_ARRAY')[$variant_row->status] }}</span></td>
                  <td>{{ $variant_row->created_at->format('F j, Y') }}</td>
                   
                   <td>{{ $variant_row->updated_at->format('F j, Y') }}</td>
                    
                  <td>
                  <a href="<?php echo url(ADMIN_FOLDER);?>/product-variant/view/<?php echo $variant_row->id;?>" class="btn bg-olive ">View</a>
                  <a href="<?php echo url(ADMIN_FOLDER);?>/product-variant?delete=<?php echo $variant_row->id;?>" class="btn bg-red  " onclick="return confirm('Are you sure you want to delete {{$variant_row->title}}?');">Delete</a>
                  </td>
               </tr>
               @empty

               <tr>
                <td colspan="9" align="center">
                      <p class="no-data">No data found</p>
                 <td>
               </tr>
                @endforelse

               

              </tbody></table>
            </div>    
          </div>
        </div>
      </div>
    </section>

<?php } ?>




<!-- gallery image-->

 <?php if(isset($data_row->id)){ ?>



    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
     

        <div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title"><b>Gallery</b></h3>
            </div>

            <div class="box-header with-border">
               <h3 class="box-title">Total <?php echo count($ProductGallery_rows);?> records.</h3>
              <a class="btn btn-primary" href="<?php echo url(ADMIN_FOLDER);?>/product-gallery/new/{{ $data_row->id }}">Add new</a>
            </div>


            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr>
                  <th>ID</th>
                  <th>Title</th>                
                  <th>Image</th>                
                  <th>Sorting</th>                
                  
                  <th>Status</th>                  
                  <th>Created At</th>
                  <th>Updated At</th>
                  <th>Action</th>
                  
                </tr>
                @foreach ($ProductGallery_rows as $data_row)
                <tr>
                  <td> {{ $data_row->id }}</td>
                  <td> {{ $data_row->title }}</td>

                  <td> <?php if($data_row['image_path']){?>
                    <img src="{{ URL::asset('/') }}<?php echo $data_row['image_path'];?>" height="100px">
                    <?php } ?>
                  
                  </td>
                 
              
                  
                  <td> {{ $data_row->sorting }}</td>
               
                      <td><span class="label label-<?php echo ($data_row->status=='1')?'success':'danger';?>">
                   {{ Config::get('constants.CONS_STATUS_ARRAY')[$data_row->status] }}</span></td>
                  <td>{{ $data_row->created_at->format('F j, Y') }}</td>
                   
                   <td>{{ $data_row->updated_at->format('F j, Y') }}</td>
                    
                  <td>
                  <a href="<?php echo url(ADMIN_FOLDER);?>/product-gallery/view/<?php echo $data_row->id;?>" class="btn bg-olive ">View</a>
                  <a href="<?php echo url(ADMIN_FOLDER);?>/product-gallery?delete=<?php echo $data_row->id;?>" class="btn bg-red  " onclick="return confirm('Are you sure you want to delete {{$data_row->title}}?');">Delete</a>
                  </td>
               </tr>
               @empty

               <tr>
                <td colspan="9" align="center">
                      <p class="no-data">No data found</p>
                 <td>
               </tr>
                @endforelse

               

              </tbody></table>
            </div>    
          </div>
        </div>
      </div>
    </section>

<?php } ?>


<textarea>
  <ul class="bullets">
<li>Heading </li>
<li>Heading2</li> 
 </ul>
</textarea>

*/?>




    @endsection