<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCollection;
use Illuminate\Http\Request;
use PhpParser\ErrorHandler\Collecting;

class ProductCollectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $collections = ProductCollection::all();
        return view('collection.index', compact('collections'));
    }
    public function hello()
    {
        return view('collection.create');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $product_id = json_decode($request->input('product_id'));
        return view('collection.create')->with('products',Product::all());
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
            'name' =>'required',
            'product_id'=>'required',
            
        ]);
        $product_id = json_encode($request->input('product_id'));

        $data = [
            'name' =>$request->name,
            'product_id'=>$product_id,
            'active'=>true,
        ];
        // dd($data);
        ProductCollection::create($data);
        
        return redirect()->route('collection.index')->with('success', 'Product Collection Created Succefully!.');
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
        $collection = ProductCollection::find($id);
        return view('collection.edit')->with('collection', $collection)
                                        ->with('products',Product::all());
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
        $collection = ProductCollection::find($id);
        $request->validate([
            'name' =>'nullable|required',
            'product_id'=> 'nullable|required',
        ]);
        $product_id = json_encode($request->input('product_id'));
        $data = [
            'name'=>$request->name,
            'product_id'=>$product_id,
            'active'=>true,
            
        ];

        // dd($data);
        $collection->update($data);
        return redirect()->route('collection.index')
                      ->with('success', 'Collection Updated Successfully!');

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

        $collection = ProductCollection::find($id);
        $collection->delete();
        return redirect()->route('collection.index')
                         ->with('success', 'Collection Deleted !');
    }
}
