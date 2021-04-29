@extends('setup.admin-setup.master-admin')

@section('content')

<!--== MAIN CONTRAINER ==-->


<!--== BODY CONTNAINER ==-->
<div class="content-wrapper">

    <!-- Content Header (Page header) -->

    <section class="content-header">

        <h1>

            Team Management

        </h1>

        <ol class="breadcrumb">

            <li><a href=""><i class="fas fa-arrow-alt-circle-right"></i> Home</a></li>

            <li><a href="#">Team Management</a></li>

            <li class="active"> Show Team List</li>

        </ol>

    </section>



    <!-- Main content -->

    <section class="content">

        <div class="row">

            <div class="col-xs-12">

                <div class="box box-success">

                    <div class="box-header with-border">



                        <div class="row">

                            <div class="col-md-3">

                                <h3 class="box-title"> Show Team List</h3>

                            </div>





                            <!-- /.col -->

                            <div class="col-md-6">



                            </div>

                            <div class="col-md-3" style="text-align: right; padding-top:30px;">

                                <!-- /.form-group -->

                                <div class="form-group no-print">

                                    <a onClick="window.print()" title="Print" class="hvr-grow" data-toggle="tooltip"><img class="marginRight20px" src="assets/dist/img/print.png"></a>

                                    <a href="{{url('add-project')}}" title="Add New Project" class="hvr-grow" data-toggle="tooltip"><img src="assets/dist/img/add.png"></a>

                                </div>

                                <!-- /.form-group -->



                            </div>

                            <!-- /.col -->

                        </div>

                    </div>

                    @if($message=Session::get('success'))

                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong> {{ $message}}</strong>
                    </div>
                    @endif
                    <div class="row">
                        <div class='col-md-3'>

                        </div>

                    </div>


                    <!-- /.box-header -->

                    <div class="box-body">


                        <div class="alert alert-success" style="display: none;"></div>

                        <div class="table-responsive">

                            <table id="example1" class="table  table-striped table-hover js-basic-example dataTable">

                                <thead>

                                    <tr style="background:black;color:white">

                                        <th>SR#</th>
                                        <th>name</th>

                                        <th> Email</th>

                                        <th>Contact</th>

                                        <th>Cnic</th>
                                        <th>Image</th>
                                        <th>Action</th>


                                    </tr>

                                </thead>



                                <tbody id="showEmpAttendence">

                                </tbody>

                            </table>

                        </div>



                    </div>

                    <!-- /.box-body -->

                </div>

                <!-- /.box -->

            </div>

            <!-- /.col -->

        </div>

        <!-- /.row -->

    </section>

    <!-- /.content -->


</div>



<!-- Edit Modal Start -->
<!-- Modal -->
<div class="modal fade" id="view-attendence" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Employee Attendence Detail</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="table-responsive">

                    <table id="example1" class="table  table-striped table-hover js-basic-example dataTable">

                        <thead>

                            <tr style="background:black;color:white">

                                <th>SR#</th>
                                <th>Date</th>

                                <th> CheckIn</th>

                                <th>CheckOut</th>

                                <th>Marked by</th>
                                <th>Action</th>


                            </tr>

                        </thead>



                        <tbody id="showEmpAttendence">

                        </tbody>

                    </table>

                </div>

            </div>

        </div>
    </div>
</div>
<!-- Edit Modal End -->



<div class="modal fade" id="edit-attendence" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Teams</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="{{ url('update-team') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <input type="hidden" name="id" id="id">

                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Contact</label>
                        <input type="text" name="contact" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Cnic</label>
                        <input type="text" name="cnic" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Image</label>
                        <input type="file" name="image" class="form-control" required>
                    </div>


                    <div class="form-group">
                        <button class="btn btn-success" type="submit">Update Now</button>
                    </div>
                </form>

            </div>

        </div>
    </div>
</div>


<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<script type="text/javascript" async>
    employeeList();

    function employeeList() {


        $.ajax({

            url: '{{url("show-team")}}',
            type: 'get',
            async: false,
            dataType: 'json',

            success: function(data) {

                var html = '';
                var i;
                var c = 0;

                for (i = 0; i < data.length; i++) {

                    c++;
                    html += '<tr>' +
                        '<td>' + c + '</td>' +
                        '<td>' + data[i].name + '</td>' +
                        '<td>' + data[i].email + '</td>' +
                        '<td>' + data[i].contact + '</td>' +
                        '<td>' + data[i].cnic + '</td>' +
                        '<td>' + data[i].image + '</td>' +
                        '<td>' +
                        '<a href="javascript:" style="margin-right:10px;" data="' + data[i].id +
                        '" title="edit" class="btn-edit"><i class="fa fa-edit"></i></a>' +
                        '<a href="javascript:" data="' + data[i].id +
                        '" title="edit" class="btn-delete"><i class="fa fa-trash" aria-hidden="true"></i></i></a>' +
                        '</td>' +
                        '</tr>';
                }

                $('#showEmpAttendence').html(html);

            },
            error: function()

            {
                swal({
                    icon: "error",
                    text: "Check form and queries !",
                });
                //alert('some thing went wrong');
            }

        });
    }


    $('#showEmpAttendence').on('click', '.btn-edit', function() {




        $('#edit-attendence').modal('show');


        var id = $(this).attr('data');

        $.ajax({
            type: 'ajax',
            method: 'get',
            url: '{{url("edit-team")}}',
            data: {
                id: id
            },
            async: false,
            dataType: 'json',
            success: function(data) {

                $('input[name=id]').val(data[0].id);
                $('input[name=name]').val(data[0].name);
                $('input[name=email]').val(data[0].email);
                $('input[name=contact]').val(data[0].contact);
                $('input[name=cnic]').val(data[0].cnic);
                $('input[name=image]').val(data[0].image);

            },
            error: function() {
                alert("error");

            }
        });

    });





    //ajax call for Delete Record..
    $('#showEmpAttendence').on('click', '.btn-delete', function() {

        var id = $(this).attr('data');
        //alert(id);

        $.ajax({

            type: 'ajax',
            method: 'get',
            url: '{{url("delete-team")}}',
            data: {
                id: id
            },
            async: false,
            dataType: 'json',
            success: function(data) {

                employeeList();

                swal({
                    icon: "success",
                    text: "Project Deleted !!",
                });



            },

            error: function() {
                swal({
                    icon: "error",
                    text: "Check form and queries !",
                });

            }

        });

    });


</script>


@endsection
