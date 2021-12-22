<?php

namespace App\Http\Controllers;

use App\Http\Requests\Banner\CreateRequest;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = Banner::orderBy('id','desc')->get();
        return view('banners.index')->with('banners',$banners);
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
        $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
           ]);
    
           $image = $request->file('image')->store('public/banner');
           
           $data = [
            'name' => $request->input('name'),
            'image' => $image,
            'active' => true
           ];

           Banner::create($data);

           return redirect()->route('banners.index')
                        ->with('success','Product created successfully.');
       

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
        $banner = Banner::find($id);
        return view('banners.edit')->with('banner',$banner);
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
        $banner = Banner::find($id);
        $request->validate([
            'name' => 'nullable|required',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048'
            
        ]);
        if($request->file('image')){
            $filename = time() . '.' . $request->image->extension();
            $name = $request->file('image')->getClientOriginalName();
            // Storage::delete($product->image);
            $banner_img = $request->file('image')->store('public/banner');
         }
        $data = [
            'name'=>$request->name,
            'active'=>true,
            // 'image'=>$banner_img,
        
        ];

        $banner->update($data);
     return redirect()->route('banners.index')
                      ->with('success', 'Banner Updated Successfully!');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $banner = Banner::find($id);

        $banner->delete();
        $banner->update();
     return redirect()->route('banners.index')
                      ->with('success', 'Banner Deleted Successfully!');
    }
}
