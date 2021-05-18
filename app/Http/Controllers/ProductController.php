<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Product;
use App\Category;
use App\Rules\CheckCategoryIdRule;
use App\Rules\CheckMaxImageRule;
use App\Rules\CheckMinImageRule;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $products = Product::orderBy('id','DESC')->paginate(10);
        foreach($products as $product){
            $product->images = explode("||", $product->images)[0];
        }
        return view('products.index',compact('products'))
            ->with('i', ($request->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('index','DESC')->get();
        foreach($categories as $categorie){
            $categorie['index'] = intval($categorie['index']);
        }
        $categories = $categories->sortBy('index');
        return view('products.create',compact('categories'));
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
            'name' => 'required|min:3|max:100',
            'import_price' => 'required|numeric|min:0|max:2000000000',
            'price' => 'required|numeric|min:0|max:2000000000',
            'amount' => 'required|numeric|min:0|max:1000',
            'sku' => 'required|unique:products,sku|min:3|max:100',
            'des' => 'required',
            'image' => ['required',new CheckMaxImageRule,new CheckMinImageRule],
            'summary' => 'required|min:3|max:1000',
            'status' => 'required|in:1,2',
            'category_id' => ['required',new CheckCategoryIdRule],
        ]);
        $images = "";
        foreach($request->image as $img){
            $images.=$img.'||';
        }
        $result = Product::create([
            'name' => $request->input('name'),
            'slug' => Str::slug($request->input('name'), '-'),
            'import_price' => $request->input('import_price'),
            'price' => $request->input('price'),
            'amount' => $request->input('amount'),
            'sold_amount' => 0,
            'sku' => $request->input('sku'),
            'des' => $request->input('des'),
            'summary' => $request->input('summary'),
            'status' => $request->input('status'),
            'images' => $images,
            'category_id' => $request->input('category_id'),
        ]);

        if($result){
            return redirect()->route('products.index')
                        ->with('success','Product created successfully');
        }else{
            return redirect()->route('products.index')
                        ->with('error','Product created error');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);
            $arr = explode("||", $product->images);
            $length = count($arr)-1;
            unset($arr[$length]);
            $product->images = $arr;
        return view('products.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::orderBy('index','DESC')->get();
        $product = Product::findOrFail($id);

        $arr = explode("||", $product->images);
        $length = count($arr)-1;
        unset($arr[$length]);
        $product->images = $arr;

        return view('products.edit',compact('product','categories'));
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
        $product = Product::find($id);
        // dd($request->input('status'));
        if($product->sku != $request->sku){
            $this->validate($request, [
                'sku' => 'required|unique:products,sku|min:3|max:100',
            ]);
        }
        $this->validate($request, [
            'name' => 'required|min:3|max:100',
            'import_price' => 'required|numeric|min:0|max:2000000000',
            'price' => 'required|numeric|min:0|max:2000000000',
            'amount' => 'required|numeric|min:0|max:1000',
            'des' => 'required',
            'image' => ['required',new CheckMaxImageRule,new CheckMinImageRule],
            'summary' => 'required|min:3|max:1000',
            'status' => 'required|in:1,2',
            'category_id' => ['required',new CheckCategoryIdRule],
        ]);
        $images = "";
        foreach($request->image as $img){
            $images.=$img.'||';
        }
        $result = $product->update([
            'name' => $request->input('name'),
            'slug' => Str::slug($request->input('name'), '-'),
            'import_price' => $request->input('import_price'),
            'price' => $request->input('price'),
            'amount' => $request->input('amount'),
            'sold_amount' => 0,
            'sku' => $request->input('sku'),
            'des' => $request->input('des'),
            'summary' => $request->input('summary'),
            'status' => $request->input('status'),
            'images' => $images,
            'category_id' => $request->input('category_id'),
        ]);

        if($result){
            return redirect()->route('products.index')
                        ->with('success','Product update successfully');
        }else{
            return redirect()->route('products.index')
                        ->with('error','Product update error');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id)->delete();
        return redirect()->route('products.index')
                        ->with('success','Product delete successfully');
    }
}
