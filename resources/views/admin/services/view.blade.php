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
                    <input type="hidden" required="" name="id" value="<?php echo isset($data_row['id']) ? $data_row['id'] : ''; ?>">

                    <div class="box-body">

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Service Name</label>
                            <div class="col-sm-10">
                                <input type="text" required="" class="form-control" id="name" name="name" value="<?php echo isset($data_row['name']) ? $data_row['name'] : ''; ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Slug</label>
                            <div class="col-sm-10">
                                <input type="text" required="" class="form-control put_url_key" id="slug" name="slug" value="{{ (isset($data_row->slug))?$data_row->slug:old('slug') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Sub Text</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="summernote" name="sub_text">{{ (isset($data_row->sub_text))?$data_row->sub_text:old('sub_text') }}</textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Description</label>
                            <div class="col-sm-10">
                                <textarea class="form-control summernote" id="description" name="description">{{ (isset($data_row->description))?$data_row->description:old('description') }}</textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Upload Image</label>
                            <div class="col-sm-10">
                                <?php if (isset($data_row['image']) && $data_row['image'] != '') { ?>

                                    <a href="{{ STATIC_PUBLIC_URL_STORAGE }}<?= $data_row['image']; ?>" data-lightbox="{{ $data_row->id}}" data-title="Image">
                                        <img src="{{ STATIC_PUBLIC_URL_STORAGE }}<?php echo $data_row['image']; ?>" height="70px">
                                    </a>

                                    <br /> Delete <input type="checkbox" name="image_delete" value="1">
                                <?php } ?>
                                <input type="file" name="image" id="image" accept="image/*">
                                <!-- <p class="help-block">Image Size :1720 X 550 </p> -->
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Why LKS</label>
                            <div class="col-sm-10">
                                <div id="advisory_services_fields">
                                    @if(isset($advisory_services) && $advisory_services)
                                    @foreach($advisory_services as $key => $value)
                                    <div class="textarea-wrapper" id="textarea_wrapper_{{$key}}">
                                        <textarea class="form-control" name="why_lks[]" id="why_lks_{{$key}}">{{$value}}</textarea>
                                        @if($key > 0) <!-- Show remove button for additional fields -->
                                        <button type="button" class="btn btn-danger" onclick="removeAdvisoryService({{$key}})">Remove</button>
                                        @endif
                                    </div>
                                    @endforeach
                                    @endif
                                    @if(empty($advisory_services))
                                    <div class="textarea-wrapper" id="textarea_wrapper_0">
                                        <textarea class="form-control" name="why_lks[]" id="why_lks_0"></textarea>
                                    </div>
                                    @endif
                                </div>
                                <button type="button" class="btn btn-success" onclick="addAdvisoryService()">Add More</button>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Sorting</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="sorting" name="sorting" value="<?php echo isset($data_row['sorting']) ? $data_row['sorting'] : ''; ?>">
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
                        <!-- SEO Content -->
                        <div class="box-header with-border">
                            <h3 class="box-title">SEO</h3>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Page Title</label>
                            <div class="col-sm-10">
                                <input type="text" required="" class="form-control " id="page_title" name="page_title" value="{{ (isset($data_row->page_title))?$data_row->page_title:old('page_title') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Meta Keywords</label>

                            <div class="col-sm-10">
                                <textarea class="form-control" id="meta_keywords" name="meta_keywords">{{ (isset($data_row->meta_keywords))?$data_row->meta_keywords:old('meta_keywords') }}</textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Meta Description</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="meta_description" name="meta_description">{{ (isset($data_row->meta_description))?$data_row->meta_description:old('meta_description') }}</textarea>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Meta Other</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="meta_other" name="meta_other">{{ (isset($data_row->meta_other))?$data_row->meta_other:old('meta_other') }}</textarea>
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
<script type="text/javascript">
    var advisoryServiceCounter = '{{isset($advisory_services) ? count($advisory_services) ? : 1 : 1}}';
    var maxFields = 4;

    function addAdvisoryService() {
        if (advisoryServiceCounter < maxFields) {
            var newField = '<div class="textarea-wrapper" id="textarea_wrapper_' + advisoryServiceCounter + '">' +
                '<textarea class="form-control" name="why_lks[]" id="why_lks_' + advisoryServiceCounter + '"></textarea>' +
                '<button type="button" class="btn btn-danger" onclick="removeAdvisoryService(' + advisoryServiceCounter + ')">Remove</button>' +
                '</div>';
            $('#advisory_services_fields').append(newField);
            advisoryServiceCounter++;
        } else {
            alert('You can only add up to ' + maxFields + ' fields.');
        }
    }

    function removeAdvisoryService(id) {
        $('#textarea_wrapper_' + id).remove();
        advisoryServiceCounter--;
    }
</script>
@endpush