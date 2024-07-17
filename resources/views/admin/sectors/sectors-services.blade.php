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

                    <input type="hidden" required="" name="sector_id" value="{{ $sector_id }}">
                    <input type="hidden" required="" name="id" value="{{ (isset($data_row->id))?$data_row->id:'' }}">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
                            <div class="col-sm-10">
                                <!-- <input type="text" required="" class="form-control get_url_name" id="name" name="name" value="{{ (isset($data_row->name))?$data_row->name:old('name') }}"> -->
                                <textarea class="form-control summernote" required id="name" name="name">{{ (isset($data_row->name))?$data_row->name:old('name') }}</textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Short Description</label>
                            <div class="col-sm-10">
                                <textarea class="form-control summernote" required id="sub_text" name="sub_text">{{ (isset($data_row->sub_text))?$data_row->sub_text:old('sub_text') }}</textarea>

                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Image</label>
                            <div class="col-sm-10">
                                <?php if (isset($data_row['image']) && $data_row['image'] != '') { ?>

                                    <a href="{{ STATIC_PUBLIC_URL_STORAGE }}<?= $data_row['image']; ?>" data-lightbox="{{ $data_row->id}}" data-title="image">
                                        <img src="{{ STATIC_PUBLIC_URL_STORAGE }}<?php echo $data_row['image']; ?>" height="70px">
                                    </a>

                                    <br /> Delete <input type="checkbox" name="image_delete" value="1">
                                <?php } ?>
                                <input type="file" name="image" id="image" accept="image/jpeg,image/gif,image/x-png" required>
                                <!-- <p class="help-block">Image Size : 1280 × 720 </p> -->
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Image Icon</label>
                            <div class="col-sm-10">
                                <?php if (isset($data_row['image_icon']) && $data_row['image_icon'] != '') { ?>

                                    <a href="{{ STATIC_PUBLIC_URL_STORAGE }}<?= $data_row['image_icon']; ?>" data-lightbox="{{ $data_row->id}}" data-title="image_icon">
                                        <img src="{{ STATIC_PUBLIC_URL_STORAGE }}<?php echo $data_row['image_icon']; ?>" height="70px">
                                    </a>

                                    <br /> Delete <input type="checkbox" name="image_icon_delete" value="1">
                                <?php } ?>
                                <input type="file" name="image_icon" id="image_icon" accept=".svg" required>
                                <!-- <p class="help-block">Image Size : 1280 × 720 </p> -->
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Pratices</label>
                            <div class="col-sm-10">
                                <select name="practices[]" class="form-control nospecial   select select2" multiple style="height:200px;" required>
                                    <?php
                                    $practices_ids_array = array();
                                    if (isset($data_row['practices'])) {
                                        $practices_ids_array = explode(',', $data_row['practices']);
                                    }
                                    foreach ($pratices as $practices) {  ?>
                                        <option value="<?php echo $practices['id']; ?>" <?php echo (in_array($practices['id'], $practices_ids_array)) ? 'selected' : ''; ?>><?php echo $practices['name']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>

                        <!-- <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Sorting</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="sorting" name="sorting" value="{{ (isset($data_row->sorting))?$data_row->sorting:old('sorting') }}">
                            </div>
                        </div> -->

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

                        <!-- <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Upcoming Featured</label>
                            <div class="col-sm-10">
                                <input type="hidden" name="upcoming_feature" id="upcoming_feature" value="no">
                                <input type="checkbox" name="upcoming_feature" id="upcoming_feature" value="yes" {{isset($data_row->upcoming_feature) ? ($data_row->upcoming_feature ==  'yes'? ' checked' : '') : '' }}>
                            </div>
                        </div> -->

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
                </form>
                <!-- /.box-body -->
            </div>
        </div>
        <!-- /.row (main row) -->
    </div>
</section>

@endsection