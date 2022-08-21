@extends('layout')

@section('inventory-list')

<div class="container" style="margin-top: 100px;">
  <div class="card">
    <div class="card-header text-center"> Product Description</div>
    <div class="card-body">
      <table class="table table-bordered">
        <thead class="thead-light">
          <tr>
            <th scope="col" class="text-center">S N</th>
            <th scope="col" class="text-center">Product</th>
            <th scope="col" class="text-center">Quantity </th>
            <th scope="col" class="text-center">Rate</th>
            <th scope="col" class="text-center">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th class="text-center" scope="row">1</th>
            <td class="text-center">Mark</td>
            <td class="text-center">Otto</td>
            <td class="text-center">@mdo</td>
            <td class="text-center">
              <a href="" class="btn btn-warning btn-sm">Edit</a>
              <a href="" class="btn btn-danger btn-sm">Danger</a>
            </td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
          </tr>
        </tbody>
      </table>
  
  
    </div>
  </div>

</div>


    
@endsection