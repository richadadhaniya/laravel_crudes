@extends('layouts.backend.main')
@section('content')





 <div id="right-panel" class="right-panel">

        <!-- Header-->
        
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Table</a></li>
                            <li class="active">Data table</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header" style="background-color:  #264d73">
                                <strong class="card-title" style="color: white">Data Table</strong>
                            </div>
                            <div class="card-body">
                                <form  method="" action="" enctype="multipart/form-data">
                                     @csrf

                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Instagram</th>
                                            <th>Facebook</th>
                                            <th>Twitter</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       @foreach ($socialmedia as $socialmedias)
                                       <tr>
                                           
                                           <td>{{ $socialmedias->instagram }}</td> 
                                           <td>{{$socialmedias->facebook }}</td>

                                           <td>{{ $socialmedias->twitter }}</td>
                                          
                                           <td>
                                                <a href="{{route('edit.socialmedia',$socialmedias->id)}}"class="btn btn-success" >Edit</a>&nbsp;&nbsp;
                                                 
                                              
                                           
                                         </td>
                                            
                                           
                                       </tr>
                                       @endforeach
 
                                    </tbody>
                                </table>
                            </form>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

   @endsection