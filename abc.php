@extends('setup.admin-setup.master-admin')

@section('content')

<!--== MAIN CONTRAINER ==-->



<!--== BODY CONTNAINER ==-->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Receive Amounts

        </h1>
        <ol class="breadcrumb">
            <li><a href=""><i class="fas fa-arrow-alt-circle-right"></i> Home</a></li>
            <li><a href="#">   Receive Amounts</a></li>
            <li class="active">   Receive Amounts </li>
        </ol>
    </section>


    <form action="{{ url('receive-amounts') }}" method="post" enctype="multipart/form-data">
        @csrf
        <!-- Main content -->
        <section class="content">

            <!-- SELECT2 EXAMPLE -->
            <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title">Receive Amounts</h3>
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
                    </div>
                    
                    
                    <div class="row">
                        <div class="col-md-2">

                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="">Source:</label>
<select class="selectpicker form-control source"  data-container="body" data-live-search="true" title="Select" data-hide-disabled="true" name="source" required>
                            
                                   <option value="">Choose Source</option>
                                   <option value="admin">Admin</option>
                                   <option value="client">Client</option>
                                   
                              
                                 
                               </select>
                            </div>
                        </div>
                        

                        <div class="col-md-2">
                        </div>
                    </div>

                    <div id="clientSection" style="display:none">
                    <div class="row">
                        <div class="col-md-2">

                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Client:</label>
            <select class="selectpicker form-control" data-container="body" data-live-search="true" title="Select" data-hide-disabled="true" name="client_id" required>
             <option value="">Choose Client</option>
                                   
                                    @isset($data['client'])
                                   @foreach($data['client'] as $row)
                                   
                                     <option value="{{$row->id}}">{{$row->name}}</option>
                                     
                                     @endforeach
                                     @endisset
                               
                               </select>
                            </div>
                        </div>
                        
                             <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Project:</label>
                          <select class="selectpicker form-control" data-container="body" data-live-search="true" title="Select" data-hide-disabled="true" name="staff_id" required>
                                   <option value="">Choose Project</option>
                                   
                                   
                                       @isset($data['staff'])
                                   @foreach($data['staff'] as $row)
                                   
                                     <option value="{{$row->id}}">{{$row->name}}</option>
                                     
                                     @endforeach
                                     @endisset
                               </select>
                            </div>
                        </div>
                        
                      


                        <div class="col-md-2">
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-2">

                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Unit:</label>
                                     <select class="selectpicker form-control" data-container="body" data-live-search="true" title="Select" data-hide-disabled="true" name="staff_id" required>
                                   <option value="">Choose Project</option>
                                   
                                   
                                       @isset($data['staff'])
                                   @foreach($data['staff'] as $row)
                                   
                                     <option value="{{$row->id}}">{{$row->name}}</option>
                                     
                                     @endforeach
                                     @endisset
                               </select>
                            </div>
                        </div>
                        
                          
                        
                           <div class="col-md-2">
                            <div class="form-group">
                                <label for="">Due Amount:</label>
                             <input type="text" class="form-control" name="rem_amount">
                            </div>
                        </div>
                           <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Amount:</label>
                             <input type="text" class="form-control" placeholder="Down Payment" name="down_payment" required>
                            </div>
                        </div>

                        <div class="col-md-2">
                        </div>
                    </div>
                    </div>
                    
                    <div id="adminSection" style="display:none">
                       
                    <div class="row">
                        <div class="col-md-2">

                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Amount:</label>
         <input type="text" class="form-control" name="admin_amount" placeholder="Amount">
                            
                                   
                               
                            </div>
                        </div>
                        
                          
                        
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Description:</label>
    <input type="text" class="form-control" name="desc" placeholder="Description">
                            </div>
                        </div>


                        <div class="col-md-2">
                        </div>
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
                                <a href="{{url('view-announcement')}}" style="background-color:#00A157 ;margin:0px !important;" type="button" class="btn bg-olive margin">Sales List</a>
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


<script src="{{asset('assets/js/projects-files/receive-amounts.js')}}"></script>

    
@endsection
