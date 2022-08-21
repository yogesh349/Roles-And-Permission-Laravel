<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory;
use App\Models\Product;
use App\Models\User;
use App\Models\Role;
use PhpParser\Node\Expr\FuncCall;

class FrontedController extends Controller
{
    //
    public function index(){
        $inventory=Inventory::all();
        // $user=User::find(1);
        // foreach ($user->useRole as $value) {
        //     # code...

        //     dd(Role::find($value->role_id));
        // }
        return view('home',['inventory'=>$inventory]);
    }
    

    public function showInventoryProduct($slug){
        $inventory=Inventory::where('slug',$slug)->first();
        return view('admin.product.showProduct',['inventory'=>$inventory]);


    }

    public function buyProduct($id){
        $product=Product::find($id);
        return view('admin.product.productSalesForm',['product'=>$product]);
        
    }
}
