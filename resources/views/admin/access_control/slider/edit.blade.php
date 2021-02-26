@extends('layouts.admin-app')
@section('title','Category Create')
@section('css')
<link rel="stylesheet" href="{{ asset('vue-js/bootstrap-select/dist/css/bootstrap-select.min.css') }}">
@endsection

@section('content')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-1">

            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content" >
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Horizontal Form -->
                    <div class="card card-primary">
                        <div class="card-header bg-light">

                            <h3 class="card-title" style="color:#115548;">Add Slider</h3>
                            <div class="card-tools">
                                <a href="{{route('slider.index')}}" ><button class="btn btn-sm btn-primary"><i class="fa fa-list" aria-hidden="true"></i> &nbsp;See List</button></a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        {!! BootForm::open(['model' => $model, 'store' => 'slider.store', 'update' => 'slider.update','class'=>'form-horizontal','enctype'=>'multipart/form-data']);
                                                  !!}

                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="form-group">
                                        <label for="customFile">Image</label>
                                        <div class="custom-file">
                                            <input type="hidden" name="id" value="{{ $slider->id }}">
                                            <input type="file" name="img_url" class="custom-file-input" id="customFile">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top:20px;">
                                    {!! BootForm::submit('Submit',['class'=>'btn btn-primary']); !!}
                                </div>
                            </div>
                        </div>
                        {!! Bootform::close() !!}

                    </div>
                    <!-- /.card -->
                </div>
                <div class="col-2"></div>
            </div>
            <!-- /.row -->

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
@push('script-bottom')



@endpush
