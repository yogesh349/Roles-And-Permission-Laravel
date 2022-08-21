@extends('layout')
@section('title')
  Inventory  {{$inventory->name}}
@endsection

@section('content')
<div class="container" style="margin-top:100px">

    <h1 class="text-center"> {{$inventory->name}}</h1>

  <div class="box">

        @foreach ($inventory->product as $item)
        <a href="" class="text-decoration-none">
            <div class="item">
              <img src="{{asset('storage/productfile/'.$item->image)}}" width="200px" alt="" class="box_img">
              <div style="display:flex; justify-content:space-between;">
                <div>
                    
                  <h6 class="text-dark text-center p-2">{{$item->name}}</h6>
                  <div class="text-danger p-2">Rs. {{$item->rate}}</div> 
                 
                </div>
                <div class="cart-sec">
                    <div class="float-right">
                        <a href="{{route('buy-products',['id'=>$item->id])}}" class="btn btn-primary" style="margin: 34px 12px 0px 0px;">Buy</a>
                      </div>
                  
                </div>
              </div>
            </div>
        </a>


            @endforeach

  </div>









    {{-- @endforeach --}}
    </div>    
@endsection