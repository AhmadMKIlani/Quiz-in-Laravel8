<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Answer;
use App\Models\Exam;
use App\Http\Requests\StorequestionRequest;
use App\Http\Requests\UpdatequestionRequest;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions=Question::all();
        return view('publicSite.quiz',compact('questions'));
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
     * @param  \App\Http\Requests\StorequestionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorequestionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(question $singlecat,$id)
    {
        // $singlecat=Exam::find($id);
        $answers=Answer::all();
        $questions=Question::where('exam_id',$id)->get();
        return view('publicSite.quiz',compact('questions','answers'));
    }
  
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(question $question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatequestionRequest  $request
     * @param  \App\Models\question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatequestionRequest $request, question $question)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(question $question)
    {
        //
    }


     // backend functions starts here*******************************  
    public function backendindex()
    {
        $exams=Exam::all();
        $update=false;
        $questions=Question::all();
        return view('adminSite.MQuestions',compact('exams','update','questions'));
    }
    public function backendcreate()
    {
        return view('adminSite.MQuestions');
    }

    public function backendstore(StorequestionRequest $request)
    {
        $this->validate($request,[
            'text'=>'required|max:1000',
            'points'=>'required|max:100'
          ]);
         
          Question::create([
              "text"=>$request->text,
              "points"=>$request->points,
              "exam_id"=>$request->exam_id
         ]);
         return redirect()->back();
    }

    public function backendedit($id)
    {
        $update=true;
        $exams=Exam::all();
        $exam=Exam::find($id);
        $questions=Question::all();
        $question=Question::find($id);
        return view('adminSite.MQuestions',compact('question','questions','update','exams','exam'));
    }

    public function backendupdate(UpdatequestionRequest $request,  $id)
    {
        $question=Question::find($id);
        
        $question->text=$request->text;
        $question->points=$request->points;
        
        $question->update();
        return redirect()->route('question');
    }

    public function backenddestroy( $request)
    {
        $question=Question::find($request);
        $question->delete(); 
        
        
        return redirect()->route('question');
    }

}


