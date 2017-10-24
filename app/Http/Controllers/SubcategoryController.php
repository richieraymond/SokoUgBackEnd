<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Subcategory;
use App\Category;

class SubcategoryController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $subcategories = Subcategory::with('admin')->with('products')->with('category')->paginate(15);
      return view('subcategories.index', compact('subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::pluck('name','id');
        return view('subcategories.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, [
          'name'=>'required|max:20|min:2',
          'icon'=>'required|max:50',
          'category'=>'required|integer',
          'description'=>'required|max:1000',
      ]);
      if($file=$request->hasFile('icon')){
            $file = $request->file('icon') ;
            $fileName = $file->getClientOriginalName();
            $destinationPath = public_path().'/images/' ;
            $file->move($destinationPath,$fileName);
        }

      $subcategory = new Subcategory();
      $subcategory->admin_id = Auth::user()->id;
      $subcategory->name = $request->name;
      $subcategory->category_id = $request->category;
      $subcategory->icon = $fileName;
      $subcategory->description = $request->description;
      $subcategory->status = true;
      $subcategory->save();
      return Redirect('/subcategories/')->with('message', 'New Subcategory created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
