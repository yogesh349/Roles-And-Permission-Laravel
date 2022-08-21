@extends('admin.adminlayout')

@section('title')
Add Products
@endsection
@section('inventory-form')
<h2 class="text-center" style="margin-top:100px;">Add Products</h2>
<div class="container mt-5" style="display: flex; justify-content: center;">

    <form action="{{route('product_store')}}" method="post"  enctype="multipart/form-data">
        @csrf
        @if (Session::get('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Holy guacamole!</strong> {{Session::get('status')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        @endif

        <div class="form-group">
          <select class="form-select" aria-label="Default select example" name="inventory_id" id="inventory_id">
              <option value="" selected>Select an Inventory For Product</option>

              @foreach ($inventory as $tem)
              <option value="{{$tem->id}}">{{$tem->name}}</option>  
              @endforeach
              
          </select>
          @error('inventory_id')
          <span style="color: red">{{$message}}</span>
          @enderror
        </div>


        <div>
            <label for="product" class="form-label">Product Name</label>
            <input type="text" class="form-control" id="product" name="product" placeholder="Enter Product Name">
          </div>
          @error('product')
           <span class="text-danger"> {{$message}}     </span>
          @enderror


          <div class="mt-3">
            <label for="product" class="form-label">Quantity</label>
            <input type="text" class="form-control" id="qty" name="qty" placeholder="Enter Product Quantity">
          </div>
        @error('qty')
          <span class="text-danger"> {{$message}}     </span>
         @enderror
    
          <div class="mt-3">
            <label for="rate" class="form-label">Product rate</label>
            <input type="text" class="form-control" id="rate" name="rate" placeholder="Enter Product Rate">
          </div>
          @error('rate')
          <span class="text-danger"> {{$message}} </span>
          @enderror
          

          <div class="mt-3">
            <label style="display: block" for="desc" class="form-label">Description</label>
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
    
          <input type="submit" value="Add" class="btn btn-primary block mt-3 mb-3">

    </form>
    


</div>

@endsection