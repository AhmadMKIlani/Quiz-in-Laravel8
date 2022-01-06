@extends('adminSite.layouts.master')

@section('title','Answers')
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
                                        <div class="card-header">Manage answers</div>
                                        <div class="card-body card-block">
                                            <form action="@if($update==false){{ route('answerstore') }} @else {{ route('answerupdate',$answer->id) }}@endif" 
                                            method="post" enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-group ">
                                                    <div class="input-group  ">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-plus"></i>
                                                        </div>
                                                        <input type="text" id="answer" name="answer" 
                                                        placeholder="answer" 
                                                        class="form-control"
                                                        value="@if ($update==true) {{ $answer->answer }} @endif">
                                                        <br>
                                                        <label for="pet-select">Choose true or false:</label>
                                                        <div class="form-group">
                                                            <select name="correct" id="inputState" class="form-control">
                                                              <option selected>Choose Answer</option>
                                                              <option value="1">True</option>
                                                              <option value="0">False</option>
                                                            </select>
                                        
                                                    </div>
                                                       
                                                    </div>
                                                        
                                                    </div>
                                                    <div>
                                                    <label for="pet-select">Choose an Question:</label>
                                                    
                                                        <select name="question" id="question">
                                                            
                                                            <option value="">--Please choose an option--</option>
                                                            @foreach ($questions as $question )
                                                            <option value="{{ $question->id }}">{{ $question->text }}</option>
                                                            @endforeach
                                                        </select>
                                                       
                                                    </div>
                                                </div>
                                                <div 
                                                 class="form-actions form-group d-flex justify-content-end">
                                                    @if($update==false)
                                                    <button type="submit" name="submit" 
                                                    class="btn btn-primary btn-md"
                                                     style="background: #4272d7;" >Add Answer</button>
                                                    @else
                                                     <button style="background: #4272d7;" type="submit" name="submit" 
                                                    class="btn btn-primary btn-md">Update Answer</button>
                                                    @endif
                                                </div>
                                       
                                            </form>
                                        </div>
                                    </div>
                                </div>               
                            </div>
                                       
                                <div class="top-campaign col-11 m-auto">
                                    <h3 class="title-3 m-b-30">Answers</h3>
                                    <div class="table-responsive m-b-40">
                                        <table class="table table-borderless table-data3">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Answer</th>
                                                    <th>Answer_validity</th>
                                                    <th>Question_id</th>
                                                    <th></th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($answers as $answer )
                                                
                                          
                                    <tr>
                                     <td> {{ $answer->id }}</td>
                                     <td> {{ $answer->answer }} </td>
                                     <td> {{ $answer->correct }} </td>
                                     <td> {{ $answer->question->text }} </td>
                                                       
                                  <td>
                                    <div class="table-data-feature">
                                        <a href="{{ route('answeredit', $answer->id) }}"> <button class="item btn btn-success"
                                             data-toggle="tooltip" data-placement="top" title="Edit">
                                                <i class="zmdi zmdi-edit"></i></a>
                                        </button>
                                        <a href="{{ route('answerdelete', $answer->id) }}"> <button class="item btn btn-danger" 
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