@extends('adminSite.layouts.master')

@section('title','Exams')
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
                                        <div class="card-header">Manage exams</div>
                                        <div class="card-body card-block">
                                            <form action="@if($update==false){{ route('examstore') }} @else {{ route('examupdate',$exam->id) }}@endif" 
                                            method="post" enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-group ">
                                                    <div class="input-group  ">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-plus"></i>
                                                        </div>
                                                        <input type="text" id="exam_title" name="title" 
                                                        placeholder="New Exam " 
                                                        class="form-control"
                                                        value="@if ($update==true) {{ $exam->title }} @endif">
                                                    </div>
                                                    <div>
                                                    <label for="pet-select">Choose a category:</label>
                                                    
                                                        <select name="category_id" id="category">
                                                           
                                                            <option value="">--Please choose an option--</option>
                                                            @foreach ($categories as $category )
                                                            <option value="{{ $category->id }}">{{ $category->name }} </option>
                                                            @endforeach 
                                                        </select>
                                                       
                                                    </div>
                                                </div>
                                                <div 
                                                 class="form-actions form-group d-flex justify-content-end">
                                                    @if($update==false)
                                                    <button type="submit" name="submit" 
                                                    class="btn btn-primary btn-md"
                                                     style="background: #4272d7;" >Add exam</button>
                                                    @else
                                                     <button style="background: #4272d7;" type="submit" name="submit" 
                                                    class="btn btn-primary btn-md">Update exam</button>
                                                    @endif
                                                </div>
                                       
                                            </form>
                                        </div>
                                    </div>
                                </div>               
                            </div>
                                       
                                <div class="top-campaign col-11 m-auto">
                                    <h3 class="title-3 m-b-30">Exams</h3>
                                    <div class="table-responsive m-b-40">
                                        <table class="table table-borderless table-data3">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Exam title</th>
                                                    <th>Category Name</th>
                                                    <th></th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($exams as $exam )
                                                
                                          
                                    <tr>
                                     <td> {{ $exam->id }}</td>
                                     <td> {{ $exam->title }} </td>
                                     @foreach ($categories as $category)
                                     @if ($exam->category_id==$category->id)
                                     <td> {{ $category->name }} </td>
                                     @endif
                                     @endforeach
                                               
                                  <td>
                                    <div class="table-data-feature">
                                        <a href="{{ route('examedit', $exam->id) }}"> <button class="item btn btn-success"
                                             data-toggle="tooltip" data-placement="top" title="Edit">
                                                <i class="zmdi zmdi-edit"></i></a>
                                        </button>
                                        <a href="{{ route('examdelete', $exam->id) }}"> <button class="item btn btn-danger" 
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