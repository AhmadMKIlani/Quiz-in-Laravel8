@extends('adminSite.layouts.master')
@section('title','Categories')
@section('content')

<body class="animsition">
<div class="page-wrapper">
        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- MAIN CONTENT-->
            <div class="main-content ">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-11 m-auto">
                                    <div class="card">
                                    <div class="card-header">Manage Catigories</div>
                                    <div class="card-body card-block">
                                        <form action="@if($update==false){{ route('catstore') }} @else {{ route('catupdate',$category->id) }}@endif" 
                                        method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group ">
                                                <div class="input-group  ">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-plus"></i>
                                                    </div>
                                                    <input type="text" id="category_name" name="name" 
                                                    placeholder="New Categorie " 
                                                    class="form-control"
                                                    value="@if ($update==true) {{ $category->name }} @endif">
                                                </div>
                                                   <div class="input-group mt-3 ">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-plus"></i>
                                                    </div>
                                                    <input type="file" id="category_image"
                                                     name="image" 
                                                    class="form-control">
                                                </div>
                                            </div>
                                            <div 
                                             class="form-actions form-group d-flex justify-content-end">
                                                @if($update==false)
                                                <button type="submit" name="submit" 
                                                class="btn btn-primary btn-md"
                                                 style="background: #4272d7;" >Add Categorie</button>
                                                @else
                                                 <button style="background: #4272d7;" type="submit" name="submit" 
                                                class="btn btn-primary btn-md">Update Categorie</button>
                                                @endif
                                            </div>
                                   
                                        </form>
                                    </div>
                                </div>
                            </div>               
                        </div>
                                   
                            <div class="top-campaign col-11 m-auto">
                                <h3 class="title-3 m-b-30">Categories</h3>
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Category Image</th>
                                                <th>Category Name</th>
                                                <th></th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($categories as $category )
                                            
                                      
                                <tr>
                                 <td> {{ $category->id }}</td>
                                 <td><img src= " {{asset($category->image ) }}" alt="category_image" width="50px"></td>
                                 <td> {{ $category->name }} </td>
                                                   
                              <td>
                                <div class="table-data-feature">
                                    <a href="{{ route('catedit', $category->id) }}"> <button class="item btn btn-success"
                                         data-toggle="tooltip" data-placement="top" title="Edit">
                                            <i class="zmdi zmdi-edit"></i></a>
                                    </button>
                                    <a href="{{ route('catdelete', $category->id) }}"> <button class="item btn btn-danger" 
                                        data-toggle="tooltip" data-placement="top" title="Delete">
                                            <i class="zmdi zmdi-delete"></i></a>
                                    </button>

                                </div>
                            </td>
                                                </tr>
                                         @endforeach    
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>

@endsection



