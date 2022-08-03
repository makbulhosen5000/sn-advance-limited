@extends('backend.layouts.admin-master')
@section('content')

    <!-- Content Wrapper. Contains page content start -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header bg-muted">
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
        <!-- /.content-header -->

        <div class="card">
            <div class="head bg-muted">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-md-12  d-flex justify-content-between align-items-center">
                            @if (isset($editData))
                                <h5 class="display-5">Edit Medicine Fish Feed Career</h5>
                            @else
                                <h5 class="display-5">Create Medicine Fish Feed</h5>
                            @endif
                            <a href="{{ route('products.medicine.view') }}" class="btn btn-warning text-dark"> <i
                                    class="fa fa-list"></i> Medicine Fish Feed List</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 offset-3 pt-3">
                    <form action="{{ @$editData ? route('products.medicine.update',$editData->id) : route('products.medicine.store') }} "
                        method="POST" enctype="multipart/form-data">
                        @csrf
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="form-group">
                            <label for="my-input"> <span style="color: red">*</span> Name</label>
                            <input id="my-input" class="form-control" type="text" name="name"
                                placeholder="Enter  Medicine Fish Feed Name" value="{{ @$editData->name }}" required>
                            <font style="color:red">{{ $errors->has('name') ? $errors->first('name') : '' }} </font>
                        </div>
                        <div class="form-group">
                          <label for="my-input">Price</label>
                          <input id="my-input" class="form-control" type="text" name="price"
                              placeholder="Enter  Medicine Fish Feed Price" value="{{ @$editData->price }}">
                          <font style="color:red">{{ $errors->has('price') ? $errors->first('price') : '' }} </font>
                      </div>
                        <div class="form-group">
                            <label for="my-input">Short Description</label>
                            <textarea class="form-control" type="text" name="short_desc" id="#" rows="5"
                                placeholder="Enter Your Short Description" placeholder="Please Enter Short Description">{{ @$editData->short_desc }}</textarea>
                            <font style="color:red">{{ $errors->has('short_desc') ? $errors->first('short_desc') : '' }}
                            </font>
                        </div>
                        <div class="form-group">
                            <label for="my-input">Long Description</label>
                            <textarea class="form-control" type="text" name="long_desc" id="" rows="15"
                                placeholder="Please Enter Description">{{ @$editData->long_desc }}</textarea>
                            <font style="color:red">{{ $errors->has('long_desc') ? $errors->first('long_desc') : '' }}
                            </font>
                        </div>
                        <div class="form-group">
                          <label>Image</label>
                          <img src="{{(!empty($editData->image))?url('public/images/medicine/'.$editData->image):url('public/images/not_found_img.png')}}" id="image" style="width:550px;height:300px">
                          <input id="my-input" class="form-control" type="file" name="image" id="file" onchange="showImage(this,'image')" value=''>
                          </div>
                        <div class="form-group">
                            <button type="submit" id="button"
                                class="btn btn-success">{{ @$editData ? 'Update' : 'Submit' }} </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        {{-- card end --}}
    </div>
    <!-- Content Wrapper. Contains page content end-->
@endsection
