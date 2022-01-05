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
                                <strong class="card-title" style="color: white">Product Table</strong>
                                 
                            </div>
                            <div class="card-body">
                              <form  method="POST" action="{{route('update.user')}}">
                                <input type="hidden" name="id">
                                @csrf
                                      
                        <div class="card-body">
                            @foreach($user as $users)
                         <input type="hidden" value ="{{$users->id}}" name="id">
                            
                           
                        <div class="row">
                            <div class="form-group col-md-12">
                              <label for="customerDetailsCustomerFullName">Edit EmailId</label>
                               <input type="text" class="form-control"name="email" placeholder="Enter Courses Name" value="{{$users->email}}">
                                @error('email')
                              <label class="text-danger">
                                {{$message}}
                              </label>
                              @enderror
                            </div>
                        </div>
                         
                        <div class="row">
                            <div class="form-group col-md-12">
                              <label for="customerDetailsCustomerFullName">Edit password</label>
                               <input type="password" class="form-control" name="password" placeholder="Enter Courses Name" value="{{$users->password}}">
                                @error('password')
                              <label class="text-danger">
                                {{$message}}
                              </label>
                              @enderror
                            </div>
                        </div>
                         @endforeach
                      <input type="submit" name="submit" value="SAVE" class="btn btn-success">
                     
                    </div> 
                            </form>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

   @endsection