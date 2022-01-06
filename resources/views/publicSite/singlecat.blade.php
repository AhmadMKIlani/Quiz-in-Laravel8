@extends('publicSite.layout.master')

@section('title','single_exam')
@section('content')


   <section class="dashboard">
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
         <div class="row quizes-padding ">
            @foreach ($singlecat->exam as $cat)
            <div class="col-lg-4 col-md-6 col-sm-6 ">
               <div class="quizes-card">
                  <div class="box_grid">
                    
                     <div class="quiz-card">
                        <div class="card-title">
                           {{ $cat->title }}
                        </div>
                        <ul>
                           <li> <i class="far fa-book-open"></i><span class="mx-1">5</span><span
                                 class="dm-none">Question</span></li>
                           <li> <i class=""></i><span class="mx-1"></span><span
                                 class="dm-none">points:10</span></li>
                           <li><a href="{{route('quiz',$cat->id)}}" id="quizStart3" class="btn primaryBtn start-btn">start</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-12 ">
                  <div class="box_grid">
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-12 ">
                  <div class="box_grid">
                  </div>
               </div>
            </div>
            @endforeach
         </div>
      </div>
   </section>
   @endsection