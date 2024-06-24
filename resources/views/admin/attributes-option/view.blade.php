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
             <input type="hidden" required="" name="id" value="<?php echo isset($data_row['id'])?$data_row['id']:'';?>">

              <div class="box-body">


                   <div class="form-group" style="<?php echo isset($data_row['id'])?'display:none1':'';?>">
                  <label for="inputEmail3" class="col-sm-2 control-label">Attribute Master</label>        
                  <div class="col-sm-10">                       
                  <select name="attributes_id" class="form-control select" required  >  
                  <option value=""></option>        
                        @foreach ($attributes  as $val)
                            <?php 
                              $selected='';
                              if(isset($data_row['attributes_id']) && $data_row['attributes_id']==$val->id){
                                $selected='selected';
                              }elseif(old('attributes_id')==$val->id){
                                 $selected='selected';
                              } 
                            ?>
                <option value="{{ $val->id }}"   {{ $selected }}  >
                 {{ $val->name}}
                </option>
                    @endforeach 
                   </select>
                  </div>
            </div>
          
                 
			  
			         <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Option Name</label>
                  <div class="col-sm-10">
                    <input type="text" required="" class="form-control get_url_name" id="name" name="name" value="<?php echo isset($data_row['name'])?$data_row['name']:'';?>">
                  </div>
                </div>
				
        <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Slug/Url</label>
                  <div class="col-sm-10">
                    <input type="text" required="" class="form-control" id="slug" name="slug" value="{{ (isset($data_row->slug))?$data_row->slug:old('slug') }}">
                  </div>
                </div>
				
				    <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Sorting</label>
                  <div class="col-sm-10">
                    <input type="text"  class="form-control" id="sorting" name="sorting" value="<?php echo isset($data_row['sorting'])?$data_row['sorting']:'';?>">
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
           


            <?php if(isset($data_row['attributes_id']) && ($data_row['attributes_id']==14)){?> 
          


                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label"> Thumbnail</label>
                  <div class="col-sm-10">
          <?php if(isset($data_row['value']) && $data_row['value']!=''){?>
                    <img src="{{ URL::asset('/') }}<?php echo $data_row['value'];?>" height="100px">
          <br/> Delete <input type="checkbox" name="value_delete" value="1">
          <?php } ?>
         
           <input type="file" name="value" id="value" accept="image/jpeg,image/gif,image/x-png,.mp4">
         
                  </div>
                </div>

              <?php } ?>


              

                <input type="hidden" name="submit_type" id="submit_type" value="1">
                <div class="box-footer pull-right">         
                <button type="submit" class="btn btn-primary" onclick="actionType(1)">Save</button>
                <button type="submit" class="btn bg-olive " onclick="actionType(2)">Save and Countinue</button>  

                  <button type="reset" class="btn btn-default ">Reset</button>
                   <button type="button" class="btn btn-default" onclick="javascript:location.href='<?php echo url(ADMIN_FOLDER);?>/<?php echo $page_name;?>'">Back</button>

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