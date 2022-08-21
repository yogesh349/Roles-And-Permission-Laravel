<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\User;
use App\Models\UserRole;

class RoleController extends Controller
{
    //
    public function store(Request $request){
       $request->validate([
        'role_id'=>'required',
       ]);


       $userrole= UserRole::where('user_id',$request->input('user_id'));
       if($userrole->exists()){
        return redirect(route('viewUsers'))->with('status','Role Has Already Assigned To');
        

       }else{
        UserRole::create([
            'user_id'=>$request->input('user_id'),
            'role_id'=>$request->input('role_id')
           ]);
           return redirect(route('viewUsers'))->with('status','Roles has been assigned');

       }

     

    }
}
