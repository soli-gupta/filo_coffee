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
                    <!-- CONS_PRODUCT_CATEGORY -->

                    <div class="box-body">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Category</label>
                            <div class="col-sm-10">
                                <select name="cate_id" class="form-control nospecial  " required>
                                    <option value=""></option>
                                    @foreach ($category_type as $category)
                                    <?php
                                    $selected = '';
                                    if (isset($data_row['cate_id']) && $data_row['cate_id'] == $category->id) {
                                        $selected = 'selected';
                                    } elseif (old('cate_id') == $category->id) {
                                        $selected = 'selected';
                                    }
                                    ?>
                                    <option value="<?php echo $category->id; ?>" {{ $selected }}>
                                        <?php echo $category->name; ?>
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Sub Category Name</label>
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
                            <label for="inputEmail3" class="col-sm-2 control-label">Sorting</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control " id="sorting" name="sorting" value="{{ (isset($data_row->sorting))?$data_row->sorting:old('sorting') }}">
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



                        <div class="box-header with-border hide">
                            <h3 class="box-title">SEO </h3>
                        </div>
                        <br>
                        <div class="form-group hide">
                            <label for="inputEmail3" class="col-sm-2 control-label">Page Title</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control " id="page_title" name="page_title" value="{{ (isset($data_row->page_title))?$data_row->page_title:old('page_title') }}">

                            </div>
                        </div>

                        <div class="form-group hide">
                            <label for="inputEmail3" class="col-sm-2 control-label">Meta Keywords</label>

                            <div class="col-sm-10">
                                <textarea class="form-control" id="meta_keywords" name="meta_keywords">{{ (isset($data_row->meta_keywords))?$data_row->meta_keywords:old('meta_keywords') }}</textarea>

                            </div>
                        </div>

                        <div class="form-group hide ">
                            <label for="inputEmail3" class="col-sm-2 control-label">Meta Description</label>

                            <div class="col-sm-10">
                                <textarea class="form-control" id="meta_description" name="meta_description">{{ (isset($data_row->meta_description))?$data_row->meta_description:old('meta_description') }}</textarea>
                            </div>
                        </div>


                        <div class="form-group hide">
                            <label for="inputEmail3" class="col-sm-2 control-label">Meta Other</label>

                            <div class="col-sm-10">
                                <textarea class="form-control" id="meta_other" name="meta_other">{{ (isset($data_row->meta_other))?$data_row->meta_other:old('meta_other') }}</textarea>
                            </div>
                        </div>


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
            </div>
        </div>
        <!-- /.row (main row) -->
    </div>
</section>
@endsection