<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StorecategoryRequest;
use App\Http\Requests\UpdatecategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StorecategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorecategoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatecategoryRequest  $request
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatecategoryRequest $request, category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(category $category)
    {
        //
    }

    // backend functions starts here*******************************  

    public function backendindex()
    {
        $update=false;
        $categories=Category::all();
        return view('adminSite.MCategories',compact('categories','update'));
    }
    public function backendcreate()
    {
        return view('adminSite.MCategories');
    }

    public function backendstore(StoreCategoryRequest $request)
    {
        $this->validate($request,[
            'name'=>'required|max:250',
        
            'image'=>'required|mimes:jpeg,png,gif,jpg',
          ]);
          if($request->hasFile('image')){
              $file=$request->image;
              $new_file=time().$file->getClientOriginalName();
              $file->move('public/catImages/',$new_file);
          }
          Category::create([
            
              "name"=>$request->name,
              "image"=>'public/catImages/'.$new_file

         ]);
         return redirect()->back();
    }

    public function backendedit($id)
    {
        $update=true;
        $categories=Category::all();
        $category=Category::find($id);
        return view('adminSite.MCategories',compact('category','categories','update'));
    }

    public function backendupdate(UpdateCategoryRequest $request,  $id)
    {
        $category=Category::find($id);
        if($request->hasFile('image')){
            $file=$request->image;
            $new_file=time().$file->getClientOriginalName();
            $file->move('public/catImages/',$new_file);
            $category->image='public/catImages/'.$new_file;
        }
        $category->name=$request->name;
        

        $category->update();
        return redirect()->route('cat');
    }

    public function backenddestroy( $request)
    {
        $category=Category::find($request);
        $category->delete(); 
        
        
        return redirect()->route('cat');
    }

}
