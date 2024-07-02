@extends('admin.layouts.template_admin')


@section('content')

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">

                    <h3 class="box-title">Total <?php echo $data_rows->total(); ?> records.</h3> &nbsp;
                    <a class="btn btn-primary" href="<?php echo Request::url(); ?>/new">Add new</a> &nbsp;
                    <?php
                    $search_array = array();
                    $search_url = '';
                    foreach ($_GET as $key => $value) {
                        $search_array[$key] = $value;
                        $search_url .= $key . '=' . $value . '&';
                        // echo $key . " : " . $value . "<br />\r\n";
                    }
                    ?>
                    <a href="<?php echo Request::url(); ?>/export?<?php echo $search_url; ?>" class="btn btn-default">Export</i></a>
                </div>

                <!-- field filter-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="box">

                            <form class="form-horizontal" method="GET" action="<?php echo Request::url(); ?>">
                                <input type="hidden" name="search" value="field">
                                <div class=" box-header with-border flxBx">
                                    <h3 class="box-title" filter>Filters</h3>
                                    <?php if (isset($_GET['type'])) {
                                        echo '<a href="">' . $_GET['type'] . '</a>';
                                    }
                                    ?>
                                    <div class="col"> <a href="<?php echo Request::url(); ?>">
                                            <button class="btn btn-info" type="button">Clear Filter</button>
                                        </a> </div>

                                    <div class="col">
                                        <button class="btn  btn-primary " type="submit">Apply Filter</button>
                                    </div>
                                </div>

                                <div class="box-body">
                                    <div class="row filter-input">

                                        <div class="col-xs-3">
                                            <label> Type</label>
                                            <select name="type" id="type" class="form-control nospecial  ">
                                                <option value="">Select Type</option>

                                                @foreach(Config::get('constants.CONS_BANNER_TYPE_ARRAY') as $key=>$val):

                                                <option value="{{$key}}" {{ (isset($_GET['type']) && $_GET['type']==$key)?'selected="selected"':'' }}>{{$val}}</option>

                                                @endforeach

                                            </select>
                                        </div>

                                        <div class="col-xs-3">
                                            <label>Title</label>
                                            <input type="text" placeholder="Filter by Title" class="form-control nospecial  " id="title" name="title" placeholder="Title" value="<?php echo (isset($_GET['title'])) ? $_GET['title'] : ''; ?>">
                                        </div>

                                        <div class="col-xs-2">
                                            <label>Status</label>
                                            <select name="status" id="status" class="form-control nospecial  ">
                                                <option value="">Select Status</option>

                                                @foreach(Config::get('constants.CONS_STATUS_ARRAY') as $key=>$val):

                                                <option value="{{$key}}" {{ (isset($_GET['status']) && $_GET['status']==$key)?'selected="selected"':'' }}>{{$val}}</option>

                                                @endforeach

                                            </select>
                                        </div>

                                        @include('admin.component.filter_date')

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- end field filter-->

                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                <th>ID</th>
                                <th> Type</th>
                                <th>Title</th>
                                <th>Image/Video</th>
                                <th>Sorting</th>
                                <th>Status</th>
                                <th>Created At</th>
                                <th>UpdateD At</th>
                                <th>Action</th>

                            </tr>

                            @forelse ($data_rows as $data_row)
                            <tr>
                                <td> {{ $data_row->id }}</td>
                                <td>
                                    <?php if (isset(Config::get('constants.CONS_BANNER_TYPE_ARRAY')[$data_row->type])) {

                                        echo  Config::get('constants.CONS_BANNER_TYPE_ARRAY')[$data_row->type];
                                    }
                                    ?>
                                </td>
                                <td width="200px;"> {{ $data_row->title ? $data_row->title : '-'}}</td>
                                <td>
                                    <?php if (isset($data_row['image_path']) && $data_row['image_path'] != '') {
                                        $video = strstr($data_row['image_path'], '.');
                                        if ($video == '.mp4') {
                                    ?>
                                            <a target="_blank" href="{{ STATIC_PUBLIC_URL_STORAGE }}{{(isset($data_row->image_path))?$data_row->image_path:old('image_path') }}"> <img src="/assets/images/noun-video.svg" height="30px"></a>
                                        <?php } else { ?>
                                            <a href="{{ STATIC_PUBLIC_URL_STORAGE }}<?= $data_row['image_path']; ?>" data-lightbox="{{ $data_row->id}}" data-title="Image">
                                                <img src="{{ STATIC_PUBLIC_URL_STORAGE }}<?php echo $data_row['image_path']; ?>" height="70px">
                                            </a>
                                    <?php }
                                    } else {
                                        echo '-';
                                    } ?>

                                </td>

                                <td> {{ $data_row->sorting }}</td>

                                <td><span class="label label-<?php echo ($data_row->status == '1') ? 'success' : 'danger'; ?>">
                                        {{ Config::get('constants.CONS_STATUS_ARRAY')[$data_row->status] }}</span></td>
                                <td>{{ $data_row->created_at->format(DATE_FORMAT) }}</td>
                                <td>{{ ($data_row->created_at==$data_row->updated_at)?'-':$data_row->updated_at->format(DATE_FORMAT) }}</td>

                                <td>
                                    <a href="<?php echo Request::url(); ?>/view/<?php echo $data_row->id; ?>" class="btn bg-olive ">Edit</a>
                                    <a href="<?php echo Request::url(); ?>?delete=<?php echo $data_row->id; ?>" class="btn bg-red  " onclick="return confirm('Are you sure you want to delete {{$data_row->title}}?');">Delete</a>

                                    <a href="<?php echo Request::url(); ?>?duplicate=<?php echo $data_row->id; ?>" class="btn bg-yellow ">Duplicate</a>
                                </td>
                            </tr>
                            @empty

                            <tr>
                                <td colspan="9" align="center">
                                    <p class="no-data">No data found</p>
                                <td>
                            </tr>
                            @endforelse



                        </tbody>
                    </table>
                </div>


                <div class="container paginate">
                    <?php if (count($search_array)) {
                        echo $data_rows->appends($search_array)->links();
                    } else {
                        echo $data_rows->links();
                    }
                    ?>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>

</section>

@endsection