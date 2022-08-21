@extends('layout')
@section('title')
Inventory Form
    
@endsection
@section('inventory-form')
<div class="container mt-5" style="display: flex; justify-content: center;">

    <form action="{{route('store_inventory')}}" method="post"  enctype="multipart/form-data">
      
  @if (Session::get('status'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Holy guacamole!</strong> {{Session::get('status')}}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  @endif
        @csrf
        <div>
            <label for="inventory_name" class="form-label">Inventory Name</label>
            <input type="text" class="form-control" id="inventory_name" name="inventory_name" placeholder="Enter Inventory Name">
          </div>
          @error('product')
           <span class="text-danger"> {{$message}}     </span>
          @enderror

          <div>
            <label for="inventory_slug" class="form-label">Inventory Slug</label>
            <input type="text" class="form-control" id="inventory_slug" name="inventory_slug" placeholder="Enter Slug">
          </div>
          @error('inventory_slug')
           <span class="text-danger"> {{$message}}     </span>
          @enderror


          <div class="mt-3">
            <label for="product" class="form-label">Quantity</label>
            <input type="text" class="form-control" id="qty" name="qty" placeholder="Enter Inventory Quantity">
          </div>
        @error('qty')
          <span class="text-danger"> {{$message}}     </span>
         @enderror
    

          
          <div class="mt-3">
            <label style="display:block" for="desc" class="form-label">Description</label>
            <textarea name="desc" id="desc" cols="60" rows="5"></textarea>
          </div>
          @error('desc')
          <span class="text-danger"> {{$message}} </span>
          @enderror


          <div class="mt-3">
            <label for="file" class="form-label">Insert Image Product</label>
             <input type="file" name="file" id="file">
          </div>
          @error('file')
          <div class="text-danger"> {{$message}} </div>
          @enderror
    
   
    
          <input type="submit" value="submit" class="btn btn-primary block mt-3 mb-3">

    </form>
    


</div>

@endsection