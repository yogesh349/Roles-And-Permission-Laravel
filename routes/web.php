<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\AdminDashboard;
use App\Http\Controllers\FrontedController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ProductControler;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SalesController;
use App\Models\Permission;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[FrontedController::class,'index'])->name('home');

// Inventory
Route::get('/showInventory',[InventoryController::class,'index']);
Route::get('/showInventoryForm',[InventoryController::class,'create'])->name('inventory-form')->middleware(['can:isAdmin,App\Models\Product']);;
Route::post('/insertInventoryForm',[InventoryController::class,'store'])->name('store_inventory')->middleware(['can:isAdmin,App\Models\Product']);;

// Product Routes

Route::get('showProductForm',[ProductControler::class,'create'])->name('show_form_product')->middleware(['can:isAdmin,App\Models\Product']);
Route::post('insertProduct',[ProductControler::class,'store'])->name('product_store')->middleware(['can:isAdmin,App\Models\Product']);;
Route::get('inventory/product/{slug}',[FrontedController::class,'showInventoryProduct'])->name('inventory-products');
Route::get('buy/products/{id}',[FrontedController::class,'buyProduct'])->name('buy-products')->middleware('auth');

Route::get('edit/products',[ProductControler::class,'create'])->name('edit_products');
Route::get('productlist',[ProductControler::class,'index'])->name('productlist');

// Sales

Route::post('salesBill',[SalesController::class,'store'])->name('sales_store')->middleware('auth');
Route::get('show/List/Product',[SalesController::class,'showBillList'])->name('userBills');



Route::get('dashboard',[AdminDashboard::class,'index'],'index')->name('dashboard')->middleware(['can:isAdmin,App\Models\Product']);

// Admin

Route::get('viewUsers',[AdminController::class,'showUser'])->name('viewUsers')->middleware(['can:isAdmin,App\Models\Product']);;



// Roles
Route::post('store_roles',[RoleController::class,'store'])->name('store-roles')->middleware(['can:isAdmin,App\Models\Product']);;
Route::get('showroleBox/{id}',[AdminController::class,'showroleBox'])->name('assign_roles')->middleware(['can:isAdmin,App\Models\Product']);;


// Permission
Route::get('showPermissionForm/{id}',[PermissionController::class,'create'])->name('permissionForm')->middleware(['can:isAdmin,App\Models\Product']);;
Route::get('showRoles',[PermissionController::class,'index'])->name('rolesList')->middleware(['can:isAdmin,App\Models\Product']);;
Route::post('storeRole_Permission/{role_id}',[PermissionController::class,'store'])->name('store-user-perm')->middleware(['can:isAdmin,App\Models\Product']);;





// Route::prefix('admin')->name('admin.')->group(function(){
//     Route::middleware(['guest:admin'])->group(function(){
//         Route::view('/login','admin.login')->name('login');
//         Route::post('check',[AdminController::class,'check'])->name('check');

//     });
//     Route::middleware(['auth:admin'])->group(function(){
//         Route::view('/home','admin.home')->name('home');
//         Route::get('/logout',[AdminController::class,'destroy'])->name('logout');

//     });


// });

// Admin


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
