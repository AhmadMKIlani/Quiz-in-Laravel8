
@extends('publicSite.layout.master')

@section('title','quiz')
@section('content')

<section>
   <div class="page-header">
      <div class="container">
         <div class="page-header-text">
            <div class="dashboard-header d-flex">
               <div class="d-flex align-items-center flex-column ">
                  
                  <div class="welcome">
                     <div class="dashboard-title">Hello <span id="username">Smart one</span> !</div>
                     <div class="dashboard-des">Welcome</div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="container ">
      <div class="quizes-title">
         <div class="quize-bold">Quizes</div>
         <div class="quize-des">Test your knowledge</div>
      </div>
  <form action="{{route('results.store')}}" method="post">
    @csrf
  @foreach ($questions as $question)
  <div class="container mt-sm-5 my-1">
    <div class="question ml-sm-5 pl-sm-5 pt-2">
        <div class="py-2 h5"><b>{{$question->text}}</b></div>
        @foreach ($answers as $answer)
        @if ($question->id===$answer->question_id)
            
       
        <div class="ml-md-3 ml-sm-3 pl-md-5 pt-sm-0 pt-3" id="options"> 
          <label class="options">{{$answer->answer}}<input type="radio" value="{{$answer->answer}}" name="{{$answer->question->id}}"> <span class="checkmark"></span> </label>
         </div>
         @endif
         @endforeach
    </div>
    @endforeach
    <div class="d-flex align-items-center pt-3">
        <div class="ml-auto mr-sm-5"> <button class="btn btn-success">Submit</button> </div>
    </div>
   </div>
  </form>
</div>
</section>
 @endsection