@extends('publicSite.layout.master')

@section('title','result')
@section('content')



<table class="table w-50 m-auto mt-5 bg-white">
   <thead>
     <tr>
       <th scope="col">Exam Name</th>
       <th scope="col">Your Result</th>
       <th scope="col">Date</th>
     </tr>
   </thead>
   <tbody>

       @foreach ($results as $result)
       @foreach ($exams as $exam)
       @if ($exam->id ===  $result->exam_id)
       <tr>
           <th scope="row">
               {{$exam->title }}
           </th>
           <td>
               {{$result->result }}
           </td>
           <td>
               {{$result->created_at }}
           </td>
         </tr>

        @endif
       @endforeach
       @endforeach

   </tbody>
 </table>
 @endsection