<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\PermissionRoles;
use Illuminate\Http\Request;
use App\Models\Role;

class PermissionController extends Controller
{
    //
    public function index(){
        $roles=Role::all();
        return view('admin.RoleList',['roles'=>$roles]);
    }
    public function create($id){
        $role=Role::find($id);
        return view('admin.permission',['role'=>$role]);
    }

    public function store(Request $request,$id){
        $role_id=$id;

        if(PermissionRoles::where('role_id',$role_id)->exists()){
            return redirect(route('rolesList'))->with('status','Permission Has Been Already Alocated');
        }
  

        $emptyArray=array();
        if($request->input('insert')=='on'){
            $perm=Permission::where('name','insert')->first();
            $emptyArray[]=$perm->id;

        }

        if($request->input('update')=='on'){
            $perm=Permission::where('name','update')->first();
            $emptyArray[]=$perm->id;

        }

        if($request->input('delete')=='on'){
            $perm=Permission::where('name','delete')->first();
            $emptyArray[]=$perm->id;

        }

        foreach ($emptyArray as $value) {
            # code...
            PermissionRoles::create([
                'permission_id'=>$value,
                'role_id'=>$role_id,

            ]);
        }
        return redirect(route('rolesList'))->with('status','Permission Has Been Allocated');


       

    }
}
