<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Banner;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private function del_script($tring){
        // $badChar = array('<script>','</script>');
        // return str_replace($badChar, '', $tring);
        return preg_replace('#<script(.*?)>(.*?)</script>#is', '', $tring);
    }

    public function index(Request $request)
    {
        // dd($request);
        $banners = Banner::orderBy('id','DESC')->paginate(10);
        return view('banners.index',compact('banners'))
            ->with('i', ($request->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('banners.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'name' => 'required|min:1|max:255',
            'link' => 'required|min:1|max:255',
            'image' => 'required',
        ]);

        $name = $this->del_script(Str::of($request->name)->trim());
        $link = $this->del_script(Str::of($request->link)->trim());
        $image_name = $request->image;
        $result =  Banner::create(
            [
                'name'=>$name,
                'link'=>$link,
                'image'=>$image_name,
            ]);
        if($result){
            return redirect()->route('banners.index')->with('success','Post created successfully');
        }
        return redirect()->route('banners.index')->with('error','Post created Error');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $banner = Banner::find($id);
        return view('banners.show',compact('banner'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $banner = Banner::findOrFail($id);
        return view('banners.edit',compact('banner'));
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
            'name' => 'required|min:1|max:255',
            'link' => 'required',
            'image' => 'required',
            ]);
        $banner = Banner::find($id);
        
        $name = $this->del_script(Str::of($request->name)->trim());
        $link = $this->del_script(Str::of($request->link)->trim());
        $image_name = $request->image;

        $result = $banner->update(
            [
                'name'=>$name,
                'link'=>$link,
                'image'=>$image_name,
            ]);
        if($result){
            return redirect()->route('banners.index')->with('success','Banner edit successfully');
        }
        return redirect()->route('banners.index')->with('error','Banner edit Error');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $banner = Banner::find($id)->delete();
        return redirect()->route('banners.index')->with('success','Banner delete successfully');
    }
}
