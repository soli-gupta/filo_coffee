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
                        <div class="form-group form-1 form-2 form-3 form-4 form-5 form-6 form-7">
                            <label for="inputEmail3" class="col-sm-2 control-label">Type</label>
                            <div class="col-sm-10">
                                <select id="type" name="type" class="form-control select" required>
                                    <option value=""></option>
                                    @foreach ( Config::get('constants.CONS_BANNER_TYPE_ARRAY') as $key =>$val)
                                    <?php
                                    $selected = '';
                                    if (isset($data_row['type']) && $data_row['type'] == $key) {
                                        $selected = 'selected';
                                    } elseif (old('type') == $key) {
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

                        <div class="form-group form-1 form-4 form-5 form-6 form-7">
                            <label for="inputEmail3" class="col-sm-2 control-label">Title</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control get_url_name" id="title" name="title" value="{{ (isset($data_row->title))?$data_row->title:old('title') }}">
                            </div>
                        </div>

                        <div class="form-group form-1  form-2 form-3 form-4 form-5 form-8 form-7">
                            <label for="inputEmail3" class="col-sm-2 control-label">Sub Text</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="sub_text" id="sub_text">{{ (isset($data_row->sub_text))?$data_row->sub_text:old('sub_text') }}</textarea>

                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Description</label>
                            <div class="col-sm-10">
                                <textarea class="form-control summernote" id="summernote" name="description">{{ (isset($data_row->description))?$data_row->description:old('description') }}</textarea>
                            </div>
                        </div>

                        <div class="form-group form-1 form-2">
                            <label for="inputEmail3" class="col-sm-2 control-label">Link Url</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="link_url" name="link_url" value="{{ (isset($data_row->link_url))?$data_row->link_url:old('link_url') }}">
                            </div>
                        </div>

                        <div class="form-group form-2">
                            <label for="inputEmail3" class="col-sm-2 control-label">Date</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="date" name="date" value="{{ (isset($data_row->date))?$data_row->date:old('date') }}">
                            </div>
                        </div>

                        <div class="form-group form-1 form-6 form-7">
                            <label for="inputEmail3" class="col-sm-2 control-label">Upload Image/Video</label>
                            <div class="col-sm-10">

                                <input type="file" class="form-control" id="image_path" name="image_path" accept="image/*,.mp4">
                                <p class="help-block">Image Size : 1980 × 791 px </p>
                                <?php if (isset($data_row['image_path']) && $data_row['image_path'] != '') {
                                    $video = strstr($data_row['image_path'], '.');
                                    if ($video == '.mp4') {
                                ?>
                                        <a target="_blank" href="{{ STATIC_PUBLIC_URL_STORAGE }}{{(isset($data_row->image_path))?$data_row->image_path:old('image_path') }}"> <img src="/assets/images/noun-video.svg" height="30px"></a>
                                    <?php } else { ?>
                                        <a href="{{ STATIC_PUBLIC_URL_STORAGE }}<?= $data_row['image_path']; ?>" data-lightbox="{{ $data_row->id}}" data-title="Image">
                                            <img src="{{ STATIC_PUBLIC_URL_STORAGE }}<?php echo $data_row['image_path']; ?>" height="70px">
                                        </a>
                                    <?php } ?>
                                    <p style="font-size: 12px;padding-top: 5px;"><?php echo substr($data_row['image_path'], strrpos($data_row['image_path'], '/') + 1) . "\n"; ?></p>
                                    Delete <input type="checkbox" name="image_path_delete" value="1">
                                <?php } ?>

                            </div>
                        </div>

                        <div class="form-group form-1 form-6">
                            <label for="inputEmail3" class="col-sm-2 control-label">Mobile Image/Video</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" id="image_path_mobile" name="image_path_mobile" accept="image/*,.mp4">
                                <p class="help-block">Image Size : 1980 × 791 px </p>
                                <?php if (isset($data_row['image_path_mobile']) && $data_row['image_path_mobile'] != '') {
                                    $video = strstr($data_row['image_path_mobile'], '.');
                                    if ($video == '.mp4') {
                                ?>
                                        <a target="_blank" href="{{ STATIC_PUBLIC_URL_STORAGE }}{{(isset($data_row->image_path_mobile))?$data_row->image_path_mobile:old('image_path_mobile') }}"> <img src="/assets/images/noun-video.svg" height="30px"></a>
                                    <?php } else { ?>
                                        <a href="{{ STATIC_PUBLIC_URL_STORAGE }}<?= $data_row['image_path_mobile']; ?>" data-lightbox="{{ $data_row->id}}" data-title="Image">
                                            <img src="{{ STATIC_PUBLIC_URL_STORAGE }}<?php echo $data_row['image_path_mobile']; ?>" height="70px">
                                        </a>
                                    <?php } ?>
                                    <p style="font-size: 12px;padding-top: 5px;"><?php echo substr($data_row['image_path_mobile'], strrpos($data_row['image_path_mobile'], '/') + 1) . "\n"; ?></p>
                                    Delete <input type="checkbox" name="image_path_mobile_delete" value="1">
                                <?php } ?>

                            </div>
                        </div>

                        <div class="form-group form-1 form-2 form-3 form-4 form-5 form-6 form-7">
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


                        <div class="form-group form-1 form-2">
                            <label for="inputEmail3" class="col-sm-2 control-label">Sorting</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="sorting" name="sorting" value="{{ (isset($data_row->sorting))?$data_row->sorting:'1' }}">
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
@push('admin-after-scripts')
<script>
    $(document).ready(function() {
        var type_val = $("#type").val();

        const el = document.getElementById('type');
        el.addEventListener('change', function handleChange(event) {

            $(".form-group").hide();
            var id = event.target.value;

            $(".form-" + id).show();
            if (event.target.value === '12') {
                box.style.display = 'block';
            } else {
                box.style.display = 'none';
            }

        });

        var type = "<?php echo  isset($data_row['type']) && $data_row['type'] ? $data_row['type'] : '' ?>";

        if (type) {
            $(".form-group").hide();
            $(".form-" + type).show();
        }
    });
</script>
@endpush