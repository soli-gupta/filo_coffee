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


                 
			  
			         <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Attribute</label>
                  <div class="col-sm-10">
                    <input type="text" required="" class="form-control get_url_name" id="name" name="name" value="<?php echo isset($data_row['name'])?$data_row['name']:'';?>">
                  </div>
                </div>
				
				
				      <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Sorting</label>
                  <div class="col-sm-10">
                    <input type="text"  class="form-control" id="sorting" name="sorting" value="<?php echo isset($data_row['sorting'])?$data_row['sorting']:'';?>">
                  </div>
                </div>



  				
  			


           <div class="form-group hide">
                  <label for="inputEmail3" class="col-sm-2 control-label">Type</label>        
                  <div class="col-sm-10">                       
                  <select name="type" class="form-control select" >
                  <option value=""></option>          
                        @foreach ( Config::get('constants.CONS_ATTRIBUTE_TYPE_ARRAY')  as $key =>$val)
                            <?php 
                              $selected='';
                              if(isset($data_row['type']) && $data_row['type']==$key){
                                $selected='selected';
                              }elseif(old('type')==$key){
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
           


            <?php if(isset($data_row['attributes_id']) && $data_row['attributes_id']==4){?> 
              <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Select Color</label>
                  <div class="col-sm-10">
                    <input type="color" class="form-control" id="value" name="value" value="<?php echo isset($data_row['value'])?$data_row['value']:'';?>">
                    <p>Color Code #FF0000 
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