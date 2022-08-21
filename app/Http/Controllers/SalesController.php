<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Sales;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SalesController extends Controller
{
    //

    public function store(Request $request){
        $prod_id=$request->input('prod_id');

        $request->validate([
            'slug'=>'required',
            'in_number'=>'required',
            'desc'=>'required',
            'discount'=>'required',
            'prod_id'=>'required',
            
        ]);
        Sales::create(
            [

                'slug'=>$request->input('slug'),
                'invoice_num'=>$request->input('in_number'),
                'description'=>$request->input('desc'),
                'discount'=>$request->input('discount'),
                'prod_id'=>$request->input('prod_id'),
                'user_id'=>Auth::id(),

            ]
            );
            return redirect(route('home'))->with('status','Your Product Has Been Added To Bill');
    }

    public function showBillList(){
        $sales=Sales::where('user_id',Auth::id())->get();
        return view('showBillList',['sales'=>$sales]);
    }
}
