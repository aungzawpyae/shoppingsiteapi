<?php

namespace App\Http\Controllers\Api;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Product\CreateRequest;
use App\Http\Resources\ProductResource;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::all();
        return ProductResource::collection($product);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'details' => 'required',
            'price' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048'
           ]);

        //    $filename = time() . '.' . $request->image->extension();
        //     $name = $request->file('image')->getClientOriginalName();
             $product_img = $request->file('image')->store('public/products');

           $data = [
            'name' => $request->input('name'),
            'details'=>$request->input('details'),
            'price' =>$request->input('price'),
            'image' => $product_img,
           ];

           $product = Product::create($data);

           return 'success';
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return new ProductResource($product);
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
        $product = Product::find($id);
        if(!$product){
            abort(404,'Product Not Found!');
        }
        
        $data = $request->validate([
            'name' => 'nullable',
            'details'=> 'nullable',
            'price'=> 'nullable',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
           ]);

           if($request->file('image')){
            $image = $request->file('image')->store('public/products');
           }
        //    dd($data);
           $product->update($data);

           return 'data success!';

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();

        return 'Deleted Product '. $id;
    }
}
