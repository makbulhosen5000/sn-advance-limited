@extends('backend.layouts.admin-master')
@section('content')
    <!-- Content Wrapper. Contains page content start -->
    <div class="content-wrapper">
        <!-- Content Header start(Page header) -->
        <div class="content-header bg-light">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Dashboard</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#" class="text-dark">Home</a></li>
                            <li class="breadcrumb-item active text-dark">User</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header end -->
        <!-- card start -->
        <div class="card">
            <div class="head bg-muted">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-md-12  d-flex justify-content-between align-items-center">
                            <h5 class="display-5">Medicine Fish Feed List</h5>
                            <a href="{{ route('products.medicine.create') }}" class="btn btn-warning text-dark"><i
                                    class="fa fa-plus-circle"></i>Create Medicine Fish Feed</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card end -->

        <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped text-center">
                    <thead>
                        <tr>
                            <th>ID</th>

                            <th> Name</th>
                            <th> Slug</th>
                            <th> Price</th>
                            <th>Short Description</th>
                            <th>Long Description</th>
                            <th> Image</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($medicine as $key => $item)
                            <tr class="{{ $item->id }}">
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->slug }}</td>
                                <td>{{ $item->price }}</td>

                                <td>
                                    <textarea name="" id="" cols="30" rows="5" style="text-align: justify">
                                    {{ $item->short_desc }}
                                  </textarea>
                                </td>
                                <td>
                                    <textarea name="" id="" cols="30" rows="5" style="text-align: justify">
                                    {{ $item->long_desc }}
                                  </textarea>
                                </td>
                                <td><img src="{{ !empty($item->image) ? url('public/images/medicine/' . $item->image) : url('public/images/not_found_img.png') }}"
                                        id="image" width="60px";height='60px'></td>
                                <td>
                                    <a href="{{ route('products.medicine.edit', $item->id) }}" class="btn btn-warning"
                                        title="Edit"><i class="fa fa-user-edit"></i></a>
                                    <a href="{{ route('products.medicine.destroy', $item->id) }} " id="delete"
                                        class="btn btn-danger" title="Delete"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- card end -->
    </div>
    <!-- Content Wrapper. Contains page content end-->
@endsection
