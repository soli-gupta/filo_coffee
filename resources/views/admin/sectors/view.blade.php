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
                            <label for="inputEmail3" class="col-sm-2 control-label">Sector Name</label>
                            <div class="col-sm-10">
                                <input type="text" required="" class="form-control get_url_name" id="name" name="name" value="<?php echo isset($data_row['name']) ? $data_row['name'] : ''; ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Slug</label>
                            <div class="col-sm-10">
                                <input type="text" required="" class="form-control put_url_key" id="slug" name="slug" value="{{ (isset($data_row->slug))?$data_row->slug:old('slug') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Sub Text(Left Text)</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="summernote" name="sub_text">{{ (isset($data_row->sub_text))?$data_row->sub_text:old('sub_text') }}</textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Description(Right Text)</label>
                            <div class="col-sm-10">
                                <textarea class="form-control summernote" id="description" name="description">{{ (isset($data_row->description))?$data_row->description:old('description') }}</textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Upload Image 1</label>
                            <div class="col-sm-10">
                                <?php if (isset($data_row['image1']) && $data_row['image1'] != '') { ?>

                                    <a href="{{ STATIC_PUBLIC_URL_STORAGE }}<?= $data_row['image1']; ?>" data-lightbox="{{ $data_row->id}}" data-title="Image1">
                                        <img src="{{ STATIC_PUBLIC_URL_STORAGE }}<?php echo $data_row['image1']; ?>" height="70px">
                                    </a>

                                    <br /> Delete <input type="checkbox" name="image_delete" value="1">
                                <?php } ?>
                                <input type="file" name="image1" id="image1" accept="image/*,video/*">
                                <!-- <p class="help-block">Image Size :1720 X 550 </p> -->
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Upload Image 2</label>
                            <div class="col-sm-10">
                                <?php if (isset($data_row['image2']) && $data_row['image2'] != '') { ?>

                                    <a href="{{ STATIC_PUBLIC_URL_STORAGE }}<?= $data_row['image2']; ?>" data-lightbox="{{ $data_row->id}}" data-title="Image2">
                                        <img src="{{ STATIC_PUBLIC_URL_STORAGE }}<?php echo $data_row['image2']; ?>" height="70px">
                                    </a>

                                    <br /> Delete <input type="checkbox" name="image2_delete" value="1">
                                <?php } ?>
                                <input type="file" name="image2" id="image2" accept="image/*,video/*">
                                <!-- <p class="help-block">Image Size :1720 X 550 </p> -->
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Tite 1</label>
                            <div class="col-sm-10">
                                <input type="text" required="" class="form-control" id="title1" name="title1" value="{{ (isset($data_row->title1))?$data_row->title1:old('title1') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Tite 1</label>
                            <div class="col-sm-10">
                                <input type="text" required="" class="form-control" id="title2" name="title2" value="{{ (isset($data_row->title2))?$data_row->title2:old('title2') }}">
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
<?php if (isset($data_row->id)) { ?>

    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-12">
                <!-- Horizontal Form -->
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title"><b>Sector Services</b></h3>
                    </div>

                    <div class="box-header with-border">
                        <h3 class="box-title">Total <?php echo count($sectorServices); ?> records.</h3>
                        <a class="btn btn-primary" href="<?php echo url(ADMIN_FOLDER); ?>/sectors-services/new/{{ $data_row->id }}">Add Services</a>
                    </div>
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tbody>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                    <th>Action</th>

                                </tr>
                                @foreach ($sectorServices as $data_row)
                                <tr>
                                    <td> {{ $data_row->id }}</td>
                                    <td> {!! $data_row->name !!}</td>

                                    <td> <?php if ($data_row['image']) { ?>
                                            <img src="{{ STATIC_PUBLIC_URL_STORAGE }}<?php echo $data_row['image']; ?>" height="100px">
                                        <?php } ?>
                                    </td>

                                    <td><span class="label label-<?php echo $data_row->status == '1' ? 'success' : 'danger'; ?>">
                                            {{ Config::get('constants.CONS_STATUS_ARRAY')[$data_row->status] }}</span>
                                    </td>
                                    <td>{{ $data_row->created_at->format('F j, Y') }}</td>
                                    <td>{{ $data_row->updated_at->format('F j, Y') }}</td>
                                    <td>
                                        <a href="<?php echo url(ADMIN_FOLDER); ?>/sectors-services/view/<?php echo $data_row->id; ?>" class="btn bg-olive ">View</a>
                                        <a href="<?php echo url(ADMIN_FOLDER); ?>/sectors-services?delete=<?php echo $data_row->id; ?>" class="btn bg-red  " onclick="return confirm('Are you sure you want to delete {{ $data_row->name }}?');">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php } ?>
@endsection