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
        <form class="form-horizontal" method="POST" action="<?php echo url(ADMIN_FOLDER); ?>/<?php echo $page_name; ?>/save" enctype="multipart/form-data">
          {{ csrf_field() }}
          <input type="hidden" required="" name="id" value="{{ (isset($data_row->id))?$data_row->id:'' }}">

          <div class="box-body">

            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Title</label>
              <div class="col-sm-10">
                <input type="text" required="" class="form-control" id="title" name="title" value="{{ (isset($data_row->title))?$data_row->title:old('title') }}">
              </div>
            </div>

            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Image</label>
              <div class="col-sm-10">
                <?php if (isset($data_row['image_path']) && $data_row['image_path'] != '') { ?>
                  <a href="{{ STATIC_PUBLIC_URL_STORAGE }}<?= $data_row['image_path']; ?>" data-lightbox="{{ $data_row->id}}" data-title="Image">
                    <img src="{{ STATIC_PUBLIC_URL_STORAGE }}<?php echo $data_row['image_path']; ?>" height="70px">
                  </a>
                  <br /> Delete <input type="checkbox" name="image_delete" value="1">
                <?php } ?>

                <input type="file" name="image_path" id="image_path" accept="image/jpeg,image/gif,image/x-png">

              </div>
            </div>

            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Status</label>
              <div class="col-sm-10">
                <select name="status" class="form-control select" required>

                  @foreach ( Config::get('constants.CONS_STATUS_ARRAY') as $key =>$val)
                  <?php
                  $selected = '';
                  if (isset($data_row['status']) && $data_row['status'] == $key) {
                    $selected = 'selected';
                  } elseif (old('status') == $key) {
                    $selected = 'selected';
                  }
                  ?>
                  <option value="{{ $key }}" {{ $selected }}>
                    {{ $val }}
                  </option>
                  @endforeach
                </select>
              </div>
            </div>

            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Sorting</label>
              <div class="col-sm-10">
                <input type="number" class="form-control" id="sorting" name="sorting" value="{{ (isset($data_row->sorting))?$data_row->sorting:old('sorting') }}">
              </div>
            </div>

            <input type="hidden" name="submit_type" id="submit_type" value="1">
            <div class="box-footer pull-right">
              <button type="submit" class="btn btn-primary" onclick="actionType(1)">Save</button>
              <button type="submit" class="btn bg-olive " onclick="actionType(2)">Save and Countinue</button>

              <button type="reset" class="btn btn-default ">Reset</button>
              <button type="button" class="btn btn-default" onclick="javascript:location.href='<?php echo url(ADMIN_FOLDER); ?>/<?php echo $page_name; ?>'">Back</button>

              <?php if (isset($data_row['id']) && $data_row['id'] != '') { ?>
                <button type="submit" class="btn bg-red " onclick="actionType(3)">Delete</button>
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