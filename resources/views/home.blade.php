@extends('layout')
@section('title')
    Home
@endsection
@section('message')
@if (Session::get('status'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong></strong> {{Session::get('status')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
@endif    
@endsection

@section('carousel')
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{asset('images/ca.jpg')}}" alt="First slide" width="400px">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('images/ca2.jpg')}}" alt="Second slide" width="400px">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('images/ca3.jpg')}}" alt="Third slide" width="400px">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    
@endsection

@section('content')
<div class="container" style="margin-top:100px">
   
  <h1 class="text-center">Inventory List</h1>
      




  <div class="box">

        @foreach ($inventory as $item)
        <a href="{{route('inventory-products',['slug'=>$item->slug])}}" class="text-decoration-none">
            <div class="item">
              <img src="{{asset('storage/productfile/'.$item->image)}}" width="200px" alt="" class="box_img">
              <div style="display:flex; justify-content:space-between;">
                <div>
                    
                  <h6 class="text-dark text-center p-2">{{$item->name}}</h6>
                  {{-- <div class="text-danger p-2">Rs. 100000</div> --}}
                 
                </div>
                {{-- <div class="cart-sec">
                    <div class="float-right">
                        <button class="btn btn-primary" style="margin: 34px 12px 0px 0px;">Buy</button>
                      </div>
                   <a href=""><img style="width: 40px;margin-top: 16px;" src="{{asset("images/cart.png")}}" alt="" height="24px"
                       class="cart-box-img"></a>
                </div> --}}
              </div>
            </div>
        </a>


            @endforeach

  </div>


    {{-- @endforeach --}}
    </div>    
@endsection