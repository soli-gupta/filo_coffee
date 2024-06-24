@extends('admin.layouts.template_admin')


@section('content')

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
     

        <div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Details</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
        <form class="form-horizontal" method="POST" action="<?php echo url(ADMIN_FOLDER);?>/<?php echo $page_name;?>/save" enctype="multipart/form-data">
             {{ csrf_field() }}

             <input type="hidden" required="" name="product_id" value="{{ $product_id }}">


             <input type="hidden" required="" name="id" value="{{ (isset($data_row->id))?$data_row->id:'' }}">


              <div class="box-body">








                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Title</label>
                  <div class="col-sm-10">
                    <input type="text" required="" class="form-control" id="title" name="title" value="{{ (isset($data_row->title))?$data_row->title:old('title') }}">
                  </div>
                </div>
                  

                <div class="form-group" style="display: none">
                  <label for="inputEmail3" class="col-sm-2 control-label">Description</label>

                  <div class="col-sm-10">
                  <textarea class="form-control summernote2" id="description" name="description">{{ (isset($data_row->description))?$data_row->description:old('description') }}</textarea>       


                  </div>
                </div>
              


                  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Image</label>
                  <div class="col-sm-10">
          <?php if(isset($data_row['image_path']) && $data_row['image_path']!=''){?>
                    <img src="{{ URL::asset('/') }}<?php echo $data_row['image_path'];?>" height="100px">
          <br/> Delete <input type="checkbox" name="image_delete" value="1">
          <?php } ?>
          
           <input type="file" name="image_path" id="image_path" accept="image/jpeg,image/gif,image/x-png">
         <p class="help-block">Image Size : </p>
                  </div>
                </div>

               
                
             <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Status</label>        
                  <div class="col-sm-10">                       
                  <select name="status" class="form-control select" required  >          
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



<!--
              <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Video</label>        
                  <div class="col-sm-10">                       
                  <select name="type" class="form-control select" required  >          
                        @foreach ( Config::get('constants.CONS_YES_NO_ARRAY')  as $key =>$val)
                            <?php 
                              $selected='';
                              if(isset($data_row['type']) && $data_row['type']==$key){
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
            
        
              <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Video Url(Youtube)</label>
                  <div class="col-sm-10">
                    <input type="url" class="form-control" id="video_url" name="video_url" value="{{ (isset($data_row->video_url))?$data_row->video_url:old('video_url') }}">
                    <p class="help-block">Youtube link  Ex. https://www.youtube.com/watch?v=yAoLSRbwxL8 </p>
                  </div>
                </div>


-->



                  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Sorting</label>
                  <div class="col-sm-10">
                    <input type="number" required="" class="form-control" id="sorting" name="sorting" value="{{ (isset($data_row->sorting))?$data_row->sorting:1 }}">
                </div>

                 




                <input type="hidden" name="submit_type" id="submit_type" value="1">
                <div class="box-footer pull-right">         
                <button type="submit" class="btn btn-primary" onclick="actionType(1)">Save</button>
                <button type="submit" class="btn bg-olive " onclick="actionType(2)">Save and Continue</button>  

                  <button type="reset" class="btn btn-default ">Reset</button>
                   <button type="button" class="btn btn-default" onclick="javascript:location.href='<?php echo url(ADMIN_FOLDER).'/product/view/'.$product_id;?>'">Back</button>

                    <?php if(isset($data_row['id']) && $data_row['id']!=''){?>
                    <button type="submit" class="btn bg-red " onclick="actionType(3)" >Delete</button>
                    <?php } ?>
                  

              </div>



              </div>
              <!-- /.box-body -->


      </div>
      </div>
      <!-- /.row (main row) -->
</div>
    </section>









    @endsection