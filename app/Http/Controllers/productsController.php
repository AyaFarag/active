<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class productsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
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
        $product = new App\products(); 
        $product->name            = $request->input('name');
        $product->fk_weight_id    = $request->input('weight');
        $product->fk_brand_id     = $request->input('brand');
        $product->fk_quality_id   = $request->input('quality');
        $product->fk_model_id     = $request->input('model');
        $product->fk_quantity_id  = $request->input('quantity');
        $product->fk_category_id  = $request->input('category');
        $product->fk_condition_id = $request->input('condition');
        $product->fk_color_id     = $request->input('color');
        $product->fk_price_id     = $request->input('price');
        $product->description     = $request->input('description');

        $product->files;
        $files = request()->input('file');
            foreach ($files as $file) 
            {
                $name                = $file->getClientOriginalName();
                $ext                 = $file->getClientOriginalExtension(); 
                $size                = $file->getSize(); 
                $type                = $file->getMimeType(); 
                $realpath            = $file->getRealPath(); 
                $location            = $file->move(public_path('uploads'), $name);

                $file->file_path     = $realpath;
                $file->type          = $type;
                $file->size          = $size; 
            }
        $product->save();
        return back();

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
