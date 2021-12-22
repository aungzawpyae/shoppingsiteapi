<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\ProductCollection;
use App\Http\Controllers\Controller;
use App\Http\Resources\CollectionResource;

class CollectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $collection = ProductCollection::where('active',true)->paginate();
        return CollectionResource::collection($collection);


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
            'name' =>'required',
            'product_id'=>'required',

        ]);
        $product_id = json_encode($request->input('product_id'));

        $data = [
            'name' =>$request->input('name'),
            'product_id'=>$product_id,
            'active'=>true,
        ];

        ProductCollection::create($data);

        return 'Collection Success!';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $collection = ProductCollection::find($id);
        return new CollectionResource($collection);
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

        $collection = ProductCollection::find($id);
        $request->validate([
            'name' => 'nullable',
            'product_id' => 'nullable'
           ]);

           $product_id = json_encode($request->input('product_id'));

           $data = [
               'name' => $request->input('name'),
               'product_id' =>$product_id,
               'active' => true
           ];

           $collection->update($data);

           return 'success';

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $collection = ProductCollection::find($id);
        $collection->delete();

        return 'Deleted Collection!';

    }
}
