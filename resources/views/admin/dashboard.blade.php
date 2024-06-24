@extends('admin.layouts.template_admin')


@section('content')
<?php
$admin_modules_array = explode(',', Auth::user()->admin_modules);
?>
<!-- Main content -->
<section class="content">
  <h1></h1>
  <div class="row clearfix">
    <!-- /.col -->
    <a href="<?php echo ADMIN_URL; ?>/product-category">
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon"><i class="">
              <img src="{{ URL::asset('assets/admin')}}/dist/img/product-category.svg" width="50">
            </i></span>

          <div class="info-box-content">
            <span class="info-box-text">Total Product Category</span>
            <span class="info-box-number">{{ number_format(App\ProductCategoryModel::count())}}</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
    </a>
    <!-- /.col -->

    <!-- fix for small devices only -->
    <div class="clearfix visible-sm-block"></div>

    <a href="<?php echo ADMIN_URL; ?>/product">
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon"><i class="">
              <img src="{{ URL::asset('assets/admin')}}/dist/img/product-icon.svg" width="50">
            </i></span>

          <div class="info-box-content">
            <span class="info-box-text">Total Products</span>
            <span class="info-box-number">{{ number_format(App\ProductModel::count())}}</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
    </a>
    <!-- /.col -->

    <!-- /.row (main row) -->

</section>


@endsection