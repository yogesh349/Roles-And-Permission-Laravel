<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductControler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products=Product::all();
        return view('admin.product.productlist',['products'=>$products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $inventory=Inventory::all();
        return view('admin.product.productForm',['inventory'=>$inventory]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inventory=Inventory::find($request->input('inventory_id'));
        dd($inventory->qtu);
        $validated = $request->validate([
            'inventory_id'=>'required',
            'product'=>'required',
            'qty'=>'required',
            'rate'=>'required',
            'desc'=>'required',
            'file'=>'required',
        ]);

        if($request->hasFile('file')){

            $filenameWithExt=$request->file('file')->getClientOriginalName();


            //get just filename
            $filename=pathinfo($filenameWithExt,PATHINFO_FILENAME);

            //GET JUST EXTENSION
            $ext=$request->file('file')->getClientOriginalExtension();

            $fileNameToStore=$filename ."_".time().".".$ext;

            $path=$request->file('file')->storeAs('public/productfile',$fileNameToStore);

        }else{
            $fileNameToStore='noimage.jpg';
        }  
        Product::create([
            'name'=>$request->input('product'),
            'quantity'=>$request->input('qty'),
            'rate'=>$request->input('rate'),
            'description'=>$request->input('desc'),
            'image'=>$fileNameToStore,
            'inventory_id'=>$request->input('inventory_id'),
      
        ]);

        return redirect(route('show_form_product'))->with('status','Your Product Has Been Added');


        //
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
        // return render('editprodu')
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
