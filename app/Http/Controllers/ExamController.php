<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Models\Category;
use App\Http\Requests\StoreExamRequest;
use App\Http\Requests\UpdateExamRequest;

class ExamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=Category::all();
        return view('publicSite.pdashboard',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreExamRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreExamRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function show(Exam $exam,$id)
    {
        $singlecat=Category::find($id);
        $exams=Exam::all();
        return view('publicSite.singlecat',compact('singlecat','exams'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function edit(Exam $exam)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateExamRequest  $request
     * @param  \App\Models\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateExamRequest $request, Exam $exam)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function destroy(Exam $exam)
    {
        //
    }


     // backend functions starts here*******************************  

     public function backendindex()
     {
         $categories=Category::all();
         $update=false;
         $exams=Exam::all();
         return view('adminSite.MExams',compact('exams','update','categories'));
        //  return view('publicSite.pdashboard',compact('exams'));
     }
     public function backendcreate()
     {
         return view('adminSite.MExams');
     }
 
     public function backendstore(StoreExamRequest $request)
     {
         $this->validate($request,[
             'title'=>'required|max:250',
           ]);
          
           Exam::create([
               "title"=>$request->title,
               "category_id"=>$request->category_id
          ]);
          return redirect()->back();
     }
 
     public function backendedit($id)
     {
         $update=true;
         $categories=Category::all();
         $category=Category::find($id);
         $exams=Exam::all();
         $exam=Exam::find($id);
         return view('adminSite.MExams',compact('category','categories','update','exams','exam'));
     }
 
     public function backendupdate(UpdateExamRequest $request,  $id)
     {
         $exam=Exam::find($id);
         
         $exam->title=$request->title;
         
         $exam->update();
         return redirect()->route('exam');
     }
 
     public function backenddestroy( $request)
     {
         $exam=Exam::find($request);
         $exam->delete(); 
         
         
         return redirect()->route('exam');
     }
 
}
