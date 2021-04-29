@extends('setup.admin-setup.master-admin')

@section('content')

<!--== MAIN CONTRAINER ==-->



<!--== BODY CONTNAINER ==-->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Service Management

        </h1>
        <ol class="breadcrumb">
            <li><a href=""><i class="fas fa-arrow-alt-circle-right"></i> Home</a></li>
            <li><a href="#"> Service Management</a></li>
            <li class="active"> Add New Service</li>
        </ol>
    </section>


    <form action="{{ url('store-service') }}" method="post" enctype="multipart/form-data">
        @csrf
        <!-- Main content -->
        <section class="content">

            <!-- SELECT2 EXAMPLE -->
            <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title">Add New Service</h3>
                </div>
                @if($message=Session::get('success'))

                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong> {{ $message}}</strong>
                </div>
                @endif



                <div class="alert alert-danger" style="display: none;"></div>
                <!-- /.box-header -->
                <div class="box-body">

                    <div class="row">
                        <div class="col-md-2">

                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Title</label>
                                <input type="text" name="title" class="form-control" required>
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Image</label>
                                 <input type="file" name="image" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-md-2">

                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-2">

                        </div>
                        
                        
                        <div class="col-md-2">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3">

                        </div>


                        <!-- /.col -->
                        <div class="col-md-6" style="text-align: center;padding-top: 40px;">
                            <!-- /.form-group -->
                            <div class="form-group">
                                <button style="background-color:#00A157;margin:0px !important;" type="button" class="btn bg-olive margin">Cancel</button>
                                <button style="background-color:#00A157;margin:0px !important;" type="submit" class="btn bg-olive margin" id="btnSave">Submit</button>
                                <a href="{{url('all-service')}}" style="background-color:#00A157 ;margin:0px !important;" type="button" class="btn bg-olive margin"> View Service List</a>
                            </div>
                            <!-- /.form-group -->
                        </div>
                        <div class="col-md-3">

                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->

                </div>
                <!-- /.box-body -->

            </div>
            <!-- /.box -->

            <div class="row">
                <div class="col-md-6">

                </div>
                <!-- /.col (left) -->
                <div class="col-md-6">

                </div>
                <!-- /.col (right) -->
            </div>
            <!-- /.row -->


        </section>
        <!-- /.content -->

    </form>


</div>
@endsection
