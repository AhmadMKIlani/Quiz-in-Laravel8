@extends('adminSite.layouts.master')

@section('title','Questions')
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
                                        <div class="card-header">Manage questions</div>
                                        <div class="card-body card-block">
                                            <form action="@if($update==false){{ route('questionstore') }} @else {{ route('questionupdate',$question->id) }}@endif" 
                                            method="post" enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-group ">
                                                    <div class="input-group  ">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-plus"></i>
                                                        </div>
                                                        <input type="text" id="question_title" name="text" 
                                                        placeholder="New question" 
                                                        class="form-control"
                                                        value="@if ($update==true) {{ $question->text }} @endif">
                                                        <br>
                                                        <input type="number" id="question_points" name="points" 
                                                        placeholder="points" 
                                                        class="form-control"
                                                        value="@if ($update==true) {{ $question->points }} @endif">
                                                    </div>
                                                    <div>
                                                    <label for="pet-select">Choose an exam:</label>
                                                    
                                                        <select name="exam_id" id="exam">
                                                            
                                                            <option value="">--Please choose an option--</option>
                                                            @foreach ($exams as $exam )
                                                            <option value="{{ $exam->id }}">{{ $exam->title }}</option>
                                                            @endforeach
                                                        </select>
                                                       
                                                    </div>
                                                </div>
                                                <div 
                                                 class="form-actions form-group d-flex justify-content-end">
                                                    @if($update==false)
                                                    <button type="submit" name="submit" 
                                                    class="btn btn-primary btn-md"
                                                     style="background: #4272d7;" >Add question</button>
                                                    @else
                                                     <button style="background: #4272d7;" type="submit" name="submit" 
                                                    class="btn btn-primary btn-md">Update question</button>
                                                    @endif
                                                </div>
                                       
                                            </form>
                                        </div>
                                    </div>
                                </div>               
                            </div>
                                       
                                <div class="top-campaign col-11 m-auto">
                                    <h3 class="title-3 m-b-30">Questions</h3>
                                    <div class="table-responsive m-b-40">
                                        <table class="table table-borderless table-data3">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Question text</th>
                                                    <th>Question points</th>
                                                    <th>Exam title</th>
                                                    <th></th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($questions as $question )
                                                
                                          
                                    <tr>
                                     <td> {{ $question->id }}</td>
                                     <td> {{ $question->text }} </td>
                                     <td> {{ $question->points }} </td>
                                     @foreach ($exams as $exam)
                                     @if ($question->exam_id==$exam->id)
                                     <td> {{ $exam->title }} </td>
                                     @endif
                                     @endforeach
                                    
                                                       
                                  <td>
                                    <div class="table-data-feature">
                                        <a href="{{ route('questionedit', $question->id) }}"> <button class="item btn btn-success"
                                             data-toggle="tooltip" data-placement="top" title="Edit">
                                                <i class="zmdi zmdi-edit"></i></a>
                                        </button>
                                        <a href="{{ route('questiondelete', $question->id) }}"> <button class="item btn btn-danger" 
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