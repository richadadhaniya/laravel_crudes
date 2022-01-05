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
                                <form  method="POST" action="{{route('update.socialmedia')}}" enctype="multipart/form-data">
                                     @csrf
                                      <input type="text" name="id" value="{{$socialmedia->id}}">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                       
                                          
                                          <tr>
                                            <td>Instagram</td>
                                            <td><input type="text" name="instagram">
                                              </td>
                                          </tr>
                                           <tr>
                                            <td>Facebook</td>
                                            <td><input type="text" name="facebook">
                                              </td>
                                          </tr>
                                           <tr>
                                            <td>Twitter</td>
                                            <td><input type="text" name="twitter">
                                              </td>
                                          </tr>
                                          
                                          
                                          
                                    </thead>
                                    <tbody>
                                      
                                       
                                       <tr>
                                          <td height="50"></td>
                                          <td><input type="submit" name="submit" value="save" class="btn btn-primary"></td>
                                        </tr>
 
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