@extends('layout')

@section('title')
Sales Form
@endsection
@section('inventory-form')
<h2 class="text-center" style="margin-top:100px;">Add Product To Sell List</h2>
<div class="container mt-5" style="display: flex; justify-content: center;">


    @if ($product->quantity >= 1)

    
    <form action="{{route('sales_store')}}" method="post"  enctype="multipart/form-data">
        @csrf
        @if (Session::get('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Holy guacamole!</strong> {{Session::get('status')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        @endif



               <input type="hidden" name="prod_id" value="{{$product->id}}">


               @php
                   $invoice_no=100;
               @endphp


               <div>
                <label for="in_number" class="form-label">Invoice Number</label>
                <input type="text" class="form-control" id="in_number" name="in_number" value=" @php 
                echo $invoice_no;
                $invoice_no++;
                @endphp">
              </div>


          <div class="mt-3">
            <label for="slug" class="form-label">Sales Slug</label>
            <input type="text" class="form-control" id="slug" name="slug"  value="{{$product->name}}-sales">
          </div>
          @error('product')
           <span class="text-danger"> {{$message}}     </span>
          @enderror



          <div class="mt-3">
            <label for="product" class="form-label">Quantity</label>
            <input type="number"  class="form-control" id="qty" name="qty" min="1" max="{{$product->quantity}}">
          </div>
        @error('qty')
          <span class="text-danger"> {{$message}}     </span>
         @enderror



         <div class="mt-3">
            <label for="discount" class="form-label">Discount</label>
            <input type="number" class="form-control" name="discount" id="discount">
          </div>
        @error('discount')
          <span class="text-danger"> {{$message}}     </span>
         @enderror
          

          <div class="mt-3">
            <label style="display: block" for="desc" class="form-label">Description</label>
            <textarea name="desc" id="desc" cols="60" rows="5" >{{$product->description}}</textarea>
          </div>
          @error('desc')
          <span class="text-danger"> {{$message}} </span>
          @enderror
    
    
          <input type="submit" value="Add To Bill" class="btn btn-primary block mt-3 mb-3">

    </form>
        
    @else

        
 

        
    @endif



</div>

@endsection