@extends('admin.layouts.template_admin')


@section('content')

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">

                    <div class="row  div-pagination">
                        <div class="col-sm-4">
                            <h3 class="box-title">Total <?php echo $data_rows->total(); ?> records.</h3>
                            <a class="btn btn-primary" href="<?php echo Request::url(); ?>/new">Add new</a>
                            <?php
                            $search_array = array();
                            $search_url = '';
                            foreach ($_GET as $key => $value) {
                                $search_array[$key] = $value;
                                $search_url .= $key . '=' . $value . '&';
                            }
                            ?>

                            <a href="<?php echo Request::url(); ?>/export?<?php echo $search_url; ?>" class="btn btn-default">Export</i></a>
                        </div>

                        <div class="col-sm-1 pull-right">
                            <button class="btn  btn-primary " type="button" onclick="return submitMassactionAction('2');">Submit</button>
                        </div>
                        <div class="col-sm-2 pull-right">
                            <select name="formAction" id="formAction" class="form-control nospecial">
                                <option value="">Actions</option>
                                @foreach(Config::get('constants.CONS_STATUS_ARRAY') as $key=>$val):
                                <option value="status-{{$key}}">{{$val}}</option>
                                @endforeach
                                <option value="delete">Delete</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- field filter-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="box">

                            <form name="frmSearch" id="frmSearch" class="form-horizontal" method="GET" action="<?php echo Request::url(); ?>">
                                <input type="hidden" name="search" value="field">
                                <input type="hidden" name="sorting" id="sorting" value="created_at" />
                                <input type="hidden" name="orderBy" id="orderBy" value="DESC" />

                                <div class=" box-header with-border flxBx">
                                    <h3 class="box-title" class="filter">Filters</h3>
                                    <div class="col-sm-2 pull-left">
                                        <select name="perpagerecord" id="perpagerecord" class="form-control nospecial  " onchange="this.form.submit()">
                                            <option value="{{PAGINATE_LIMIT}}">{{PAGINATE_LIMIT}} Per Page Record</option>
                                            @foreach(Config::get('constants.CONS_SORTING_ARRAY') as $key=>$val):
                                            <option value="{{$key}}" {{ (isset($_GET['perpagerecord']) && $_GET['perpagerecord']==$key)?'selected':''}}>{{$val}}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                    <div class="col">
                                        <a href="<?php echo Request::url(); ?>" style="margin-right:10px;">
                                            <button class="btn btn-info pull-right" type="button">Clear Filter</button>
                                        </a>
                                    </div>

                                    <div class="col">
                                        <button class="btn  btn-primary " type="submit">Apply Filter</button>
                                    </div>


                                </div>

                                <div class="box-body">
                                    <div class="row filter-input">
                                        <div class="col-xs-2">
                                            <label>Name</label>
                                            <input type="text" class="form-control nospecial  " id="name" name="name" placeholder="Name" value="<?php echo (isset($_GET['name'])) ? $_GET['name'] : ''; ?>">
                                        </div>

                                        @include('admin.component.filter_date')
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- end field filter-->

                <form class="form-horizontal" name="massaction" id="massaction" method="post" action="<?php echo Request::url(); ?>/massaction" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="hidden" name="formAction2" id="formAction2" value="">
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table id="example1" class="table table-bordered table-striped">
                            <tbody>
                                <tr>

                                    <th>ID <input type="checkbox" id="checkAll" name="checkAll" /> </th>

                                    <th class="{{ isset($_GET['orderBy'])?(($_GET['sorting']=='name')?(($_GET['orderBy']=='ASC')?'sorting':'sorting'):'sorting'):'sorting' }}"><a onclick="sorting('name','{{ isset($_GET['orderBy'])?(($_GET['sorting']=='name'  && $_GET['orderBy']=='ASC' )?'DESC':'ASC'):'DESC' }}')">Attribute</a></th>

                                    <th class="{{ isset($_GET['orderBy'])?(($_GET['sorting']=='type')?(($_GET['orderBy']=='ASC')?'sorting':'sorting'):'sorting'):'sorting' }}"><a onclick="sorting('type','{{ isset($_GET['orderBy'])?(($_GET['sorting']=='type'  && $_GET['orderBy']=='ASC' )?'DESC':'ASC'):'DESC' }}')">Sorting</a></th>

                                    <th>Status</th>

                                    <th class="{{ isset($_GET['orderBy'])?(($_GET['sorting']=='created_at')?(($_GET['orderBy']=='ASC')?'sorting':'sorting'):'sorting'):'sorting' }}"><a onclick="sorting('created_at','{{ isset($_GET['orderBy'])?(($_GET['sorting']=='created_at'  && $_GET['orderBy']=='ASC' )?'DESC':'ASC'):'DESC' }}')">Created At</a></th>
                                    <th>Action</th>

                                </tr>

                                @forelse ($data_rows as $data_row)
                                <tr>
                                    <td> {{ $data_row->id }} <input type="checkbox" class="checkSingle" name="ids[]" value="{{$data_row->id}}" /></td>
                                    <td> {{ $data_row->name }}</td>

                                    <td>{{ $data_row->sorting }}</td>
                                    <td><span class="label label-<?php echo ($data_row->status == '1') ? 'success' : 'danger'; ?>">
                                            {{ Config::get('constants.CONS_STATUS_ARRAY')[$data_row->status] }}</span></td>
                                    <td>{{ $data_row->created_at->format(DATE_FORMAT) }}</td>
                                    <td>
                                        <a href="<?php echo Request::url(); ?>/view/<?php echo $data_row->id; ?>" class="btn bg-olive ">Edit</a>
                                        <a href="<?php echo Request::url(); ?>?delete=<?php echo $data_row->id; ?>" class="btn bg-red  " onclick="return confirm('Are you sure you want to delete {{$data_row->name}}?');">Delete</a>
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
                        <?php

                        if (count($search_array)) {
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
</form>
@endsection