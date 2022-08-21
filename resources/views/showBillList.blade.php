@extends('layout')

@section('content')
<h4  style="margin-top:100px;" class="text-center"> Sales Product</h4>

<div class="container mt-5">

  <div class="card">
    <div class="card-header">
      Sales Product Bill
    </div>
    <div class="card-body">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Invoice Number</th>
            <th scope="col">Product Name</th>
            <th scope="col">Price</th>
            <th scope="col">Quantity</th>
            <th scope="col">Discount</th>
            <th scope="col">Total</th>
          </tr>
        </thead>
        <tbody>
          @php
                  $total=0;
          @endphp
 
            @foreach ($sales as $item)
            <tr>
                <th scope="row">{{$item->invoice_num}}</th>
                <td>{{$item->products->name}}
                    <img src="{{asset('storage/productfile/'.$item->products->image)}}" alt="" width="100px">
                </td>
                <td>{{$item->products->rate}}</td>
                <td>{{$item->quantity}}</td>
                <td>{{$item->discount}}</td>
                <td>@php
              
                  $price=(int)$item->products->rate;
                  $discount=(int)$item->discount;
                  $qty=(int)$item->quantity;
                  $discount_price=($discount*$price)/100;
                  $actual_price=$price-$discount_price;
                  $total_price= $actual_price*$qty;
                  echo $total_price;
                  $total+=$total_price;
                
                @endphp</td>
              </tr>
            @endforeach

 
        </tbody>
      </table>
      <h5 class="text-right mb-5">Grand Total: @php
          echo $total;
      @endphp</h5>

    </div>
  </div>

</div>

    
@endsection