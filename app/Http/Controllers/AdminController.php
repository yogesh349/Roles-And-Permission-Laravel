<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use App\Models\Role;
use App\Models\User;

use function PHPUnit\Framework\isNull;

class AdminController extends Controller
{
    //

    // public function check(Request $request){
    //     $request->validate([
    //         'email'=>'required|email|exists:admins,email',
    //         'password'=>'required|min:5|max:50',
    //     ],[
    //         'email.exists'=> "The email dont exist in the admin table",
    //     ]
           
    //     );
    //     $credentials=$request->only('email','password');

    //     if(Auth::guard('admin')->attempt($credentials)){

    //         return redirect(route('admin.home'));
    //     }else{
    //         return redirect(route('admin.login'))->with('fail','Invalid credintials');
    //     }


    // }

    // public function destroy(){
    //     Auth::logout();
    //     return redirect(route('admin.login'))->with('logout','Your account has been logout');
    // }

    public function showUser(Request $request){
        $users=User::all();
        return view('admin.showuser',['users'=>$users]);
    }

    public function showroleBox(Request $request,$id){
        $roles=Role::all();
        $user=User::find($id);
        return view('admin.assignRoles',['user'=>$user,'roles'=>$roles]);
    }
}
