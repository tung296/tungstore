<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct(){
        $this->middleware('permission:category-list');
        $this->middleware('permission:category-create', ['only' => ['create','store']]);
        $this->middleware('permission:category-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:category-delete', ['only' => ['destroy']]);
     }

    public function index(Request $request)
    {
        // dd('ok');
        $categories = Category::orderBy('index','DESC')->get();
        foreach($categories as $categorie){
            $categorie['index'] = intval($categorie['index']);
        }
        $categories = $categories->sortBy('index');

        return view('categories.index',compact('categories'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.create');
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
            'name' => 'required|unique:categories,name|max:100',
            'index' => 'required|numeric|unique:categories,index|between:0,100',
        ]);


        $result = Category::create([
            'name' => $request->input('name'),
            'slug' => Str::slug($request->input('name'), '-'),
            'index' => $request->input('index'),
        ]);


        return redirect()->route('categories.index')
                        ->with('success','Category created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::findOrFail($id);
        return view('categories.show',compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('categories.edit',compact('category'));
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
        $this->validate($request, [
            'name' => 'required|max:100',
            'index' => 'required|numeric|unique:categories,index|between:0,100',
        ]);

        $category = Category::find($id);
            $category->name = $request->input('name');
            $category->slug = Str::slug($request->input('name'), '-');
            $category->index = $request->input('index');
            $category->save();

        return redirect()->route('categories.index')
                        ->with('success','Category created successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd($id);
        $category = Category::find($id)->delete();
        // return response()->json([
        //     "mess" =>"Xoá tc"
        // ]);
        return redirect()->route('categories.index')
                        ->with('success','Category deleted successfully');
    }
}
