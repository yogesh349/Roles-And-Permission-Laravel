<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    //

    public function index(){
        return view('admin.inventoryList');
    }

    public function create(){
        return view('admin.inventoryForm');
    }


    public function store(Request $request){
        $validated = $request->validate([

            'inventory_name'=>'required',
            'inventory_slug'=>'required',
            'qty'=>'required',
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




        
        Inventory::create([
            'name'=>$request->input('inventory_name'),
            'slug'=>$request->input('inventory_slug'),
            'qtu'=>$request->input('qty'),
            'description'=>$request->input('desc'),
            'image'=>$fileNameToStore,
       
      
        ]);


        return redirect(route('inventory-form'))->with('status','Inventory has been sucessfully added!!! ');
    }
}
