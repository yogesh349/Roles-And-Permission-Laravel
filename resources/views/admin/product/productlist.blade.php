@extends('layout')


@section('content')
<div class="container" style="margin-top: 100px">
    <div class="card">
        <div class="card-header text-center">
            List of Products
        </div>
        <div class="card-body">
            <div class="table">

                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                      </tr>
                    </thead>
                    <tbody>

                     @foreach ($products as $item)
                         
                     @endforeach
                      <tr>
                        <th scope="row">{{$item->id}}</th>
                        <td>{{$item->name}}</td>
                        <td>{{$item->rate}}</td>
                        <td>
                            <a href="" class="btn btn-success">Edit</a>
                            <a href="" class="btn btn-danger">Delete</a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</div> 
@endsection
