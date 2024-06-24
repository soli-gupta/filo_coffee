@extends('admin.layouts.template_admin')


@section('content')

<?php 
$categorys=App\ProductCategoryModel::orderBy('name', 'asc')->get();
?>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
     

        <div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Selected - <b>{{ count($_POST['ids'])}}</b></h3>
              <h3 class="box-title"> and IDs - {{ implode(",",$_POST['ids'])}}</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
        <form class="form-horizontal" method="POST" action="<?php echo url(ADMIN_FOLDER);?>/<?php echo $page_name;?>/massaction" enctype="multipart/form-data">
             {{ csrf_field() }}
            

              <div class="box-body">

              <input type="hidden" name="formAction2" id="formAction2" value="<?php echo $_POST['formAction2'];?>-post">
              {{ csrf_field() }}
             
              <?php 
              
              foreach($_POST['ids'] as $id){?>
            <input type="hidden" required="" name="ids[]" value="{{$id}}">
            <?php } ?>


            <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Category</label>        
                  <div class="col-sm-10">                       
                  <select name="category_id[]" class="form-control select2" required multiple >
                   <option value=""></option>                 
                        @foreach ($categorys  as $row)
                          
                                <option value="<?php echo $row->id;?>" >
                               {{$row['name']}} - {{$row->type_data->name}}
                                </option>
                    @endforeach 
                   </select>
                  </div>
            </div>
               


                
              

                <input type="hidden" name="submit_type" id="submit_type" value="1">
                <div class="box-footer pull-right">         
                <button type="submit" class="btn btn-primary" onclick="actionType(1)">Save</button>
                  <button type="reset" class="btn btn-default ">Reset</button>
                <button type="button" class="btn btn-default" onclick="javascript:location.href='<?php echo url(ADMIN_FOLDER);?>/<?php echo $page_name;?>'">Back</button>

                   
                  

              </div>



              </div>
              <!-- /.box-body -->


      </div>
      </div>
      <!-- /.row (main row) -->
</div>
    </section>





    @endsection

