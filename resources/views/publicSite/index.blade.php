
   @extends('publicSite.layout.master')

   @section('title','home')
   @section('content')
 

   <section class="home-page ">
      <div class="container ">
         <div class="row ">
            <div class="col-lg-7 col-md-6 hero  mt-5">
               <div class="hero-title">
                  Find The Best Quizes!
               </div>
               <div class="hero-des">
                  Hey! would you link to grow up your skill and if you are interested to do just start here.
               </div>
               <a href="{{asset('pdashboard')}}" class="btn primaryBtn btn-width mt-4 ">Find Out</a>
            </div>
            <div class="col-lg-5 col-md-6  mt-5">
               <div class="home-img">
                  <img src="{{asset('public-style/img/hero-img.png')}}" alt="motivation image">
               </div>
            </div>
         </div>
         <div>
   </section>
  @endsection