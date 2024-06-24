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
        <form class="form-horizontal" method="POST" action="<?php echo url(ADMIN_FOLDER); ?>/<?php echo $page_name; ?>/save" enctype="multipart/form-data">
          {{ csrf_field() }}

          <input type="hidden" required="" name="id" value="{{ (isset($data_row->id))?$data_row->id:'' }}">

          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Category</label>
            <div class="col-sm-10">
              <select name="category_id" id="category_id" class="form-control nospecial  " required>
                <option value=""></option>
                @foreach ($categorys as $category)
                <?php
                $selected = '';
                if (isset($data_row['category_id']) && $data_row['category_id'] == $category->id) {
                  $selected = 'selected';
                } elseif (old('category_id') == $category->id) {
                  $selected = 'selected';
                }
                ?>
                <option value="<?php echo $category->id; ?>" {{ $selected }} data-prvncid="{{ $category->id }}">
                  <?php echo $category->name; ?>
                </option>
                @endforeach
              </select>
            </div>
          </div>

          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Sub Category</label>
            <div class="col-sm-10">
              <select name="sub_cate_id" id="sub_cate_id" class="form-control nospecial">
                <option value="">Select Sub Category</option>
                <?php if (isset($subcategories) && $subcategories) { ?>
                  @foreach ($subcategories as $subcategory)
                  <?php
                  $selected = '';
                  if (isset($data_row->sub_cate_id) && $data_row->sub_cate_id == $subcategory->id) {
                    $selected = 'selected';
                  } elseif (old('sub_cate_id') == $subcategory->id) {
                    $selected = 'selected';
                  }
                  ?>
                  <option value="{{ $subcategory->id }}" {{ $selected }}>
                    {{ $subcategory->name }}
                  </option>
                  @endforeach
                <?php } ?>

              </select>
            </div>
          </div>

          <div class="box-body">
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
              <div class="col-sm-10">
                <input type="text" required="" class="form-control get_url_name" id="name" name="name" value="{{ (isset($data_row->name))?$data_row->name:old('name') }}">
              </div>
            </div>

            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Slug</label>
              <div class="col-sm-10">
                <input type="text" required="" class="form-control put_url_key" id="slug" name="slug" value="{{ (isset($data_row->slug))?$data_row->slug:old('slug') }}">
              </div>
            </div>

            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Short Description</label>
              <div class="col-sm-10">
                <textarea class="form-control " id="short_description" name="short_description">{{ (isset($data_row->short_description))?$data_row->short_description:old('short_description') }}</textarea>
              </div>
            </div>

            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Price</label>
              <div class="col-sm-10">
                <input type="text" required="" class="form-control" id="price" name="price" value="{{ (isset($data_row->price))?$data_row->price:old('price') }}">
              </div>
            </div>

            <div class="form-group hide">
              <label for="inputEmail3" class="col-sm-2 control-label">Sorting</label>
              <div class="col-sm-10">
                <input type="text" class="form-control " id="sorting" name="sorting" value="{{ (isset($data_row->sorting))?$data_row->sorting:old('sorting') }}">
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

            <div class="box-header with-border">
              <input type="hidden" name="submit_type" id="submit_type" value="1">
              <div class="box-footer pull-right">
                <button type="submit" class="btn btn-primary" onclick="actionType(1)">Save</button>
                <button type="submit" class="btn bg-olive " onclick="actionType(2)">Save and Continue</button>

                <button type="reset" class="btn btn-default ">Reset</button>
                <button type="button" class="btn btn-default" onclick="javascript:location.href='<?php echo url(ADMIN_FOLDER); ?>/<?php echo $page_name; ?>'">Back</button>

                <?php if (isset($data_row['id']) && $data_row['id'] != '') { ?>
                  <button type="submit" class="btn bg-red " onclick="actionType(3)">Delete</button>
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
@endsection

@push('admin-after-scripts')
<script type="text/javascript">
  jQuery(function() {
    $('#category_id').on('change', function() {
      var category_id = $(this).find(':selected').data('prvncid');
      //  alert('Selected Category ID: ' + category_id); // Optional: for debugging

      $.ajax({
        url: "{{ url('/admin/get-sub-category') }}",
        type: "GET",
        data: {
          category_id: category_id,
          _token: '{{ csrf_token() }}'
        },
        dataType: 'json',
        success: function(data) {
          $('#sub_cate_id').find('option').remove().end();
          $('#sub_cate_id').append($('<option>', {
            value: '',
            text: 'Select Sub Category'
          }));
          $.each(data, function(key, value) {
            $('#sub_cate_id').append($('<option>', {
              value: value.id,
              text: value.name
            }));
          });
        },
        error: function(xhr, status, error) {
          console.log('AJAX Error: ', status, error); // Optional: for debugging
        }
      });
    });
  });
</script>
@endpush