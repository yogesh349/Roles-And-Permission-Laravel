<?php

namespace App\Policies;

use App\Models\Product;
use App\Models\User;
use App\Models\Role;
use Illuminate\Auth\Access\HandlesAuthorization;

use function PHPUnit\Framework\isEmpty;

class ProductPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
        foreach ($user->useRole as $value) {
            $role_id=$value->role_id;
        }
        if(!empty($role_id)){
            $role=Role::find($role_id);
            if($role->name=='customer'){
                return true;
            }

        }

    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Product $product)
    {
        //
       
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        //
        foreach ($user->useRole as $value) {
            $role_id=$value->role_id;
            
        }
        if(!empty($role_id)){
            $role=Role::find($role_id);
            if($role->name=='editor' || $role->name=='admin'){
                return true;
            }

        }
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user)
    {
        //
        foreach ($user->useRole as $value) {
            $role_id=$value->role_id;
            
        }
        if(!empty($role_id)){
            $role=Role::find($role_id);
            if($role->name=='editor' || $role->name=='admin'){
                return true;
            }

        }
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Product $product)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Product $product)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Product $product)
    {
        //
    }

    public function isAdmin(User $user){
        if($user->email=='admin@gmail.com'){
            return true;
        }
    }
}
