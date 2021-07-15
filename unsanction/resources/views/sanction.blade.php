@extends('layouts.app') 
@section('sidebar')

@endsection
 
@section('content')
<div class="container">
    <div class="row">
        <!--col-md-offset-1-->
        <div class="col-md-10 ">
        
            <ol class="breadcrumb">
                <li><a href="sanction">Home</a></li>
                <li class="active">Sanction List</li>
            </ol>
            <form action="">
                <div class="form-group">
                    <div class="input-group">
                        <input type="search" class="form-control" id="query" name="query" placeholder="Search Individual  by First Name " aria-describedby="basic-addon2">
                        <span class="input-group-addon" id="basic-addon2"><i class="fa fa-search"></i></span>
                        
                    </div>
                   
                </div>
            </form>

            <div class="panel-heading">
                  <div>
                   <a href="/parse" class="text-right pull-right panel-menu-item">
                                <button  type="button" >Update </button></a>
                    </div>

                   <div>

                        <a href="/select" class="text-right pull-right panel-menu-item">
                                <button  type="button" >Filter </button></a>
                    </div> 

            <div class="panel panel-default">
                <div class="panel-body">
                  <table class="table table-striped" id="search-result">
                     <thead>
                         <tr>
                             <th>#</th>
                             <th>First Name</th>
                             <th>Second Name</th>
                             <th>Third Name</th>
                             <th>ID</th> 
                         </tr>
                     </thead>
                     <tbody>
                     @foreach($sanction as $sanction)
                         <tr>
                             <td>{{$loop->iteration}}</td>
                             <td>{{$sanction->FIRST_NAME}}</td>
                             <td>{{$sanction->SECOND_NAME}}</td>
                             <td>{{$sanction->THIRD_NAME}}</td>
                             <td>{{$sanction->DATAID}}</td>
                         </tr>
                    @endforeach
                     </tbody>
                  
                  </table>
                </div>
                <div class="panel-footer">
                    <!-- <div class="row">
                        <div class="col-md-4">Maker <span class="label label-default">Default Label</span></div>
                        <div class="col-md-4">Date Time <span class="label label-default">Default Label</span></div>
                        <div class="col-md-4">Record Status <span class="label label-default">Default Label</span></div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection