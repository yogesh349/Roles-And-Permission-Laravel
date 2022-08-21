@extends('admin.adminlayout')

@section('inventory-list')

<div class="container" style="margin-top: 100px;">
  <div class="card">
    <div class="card-header text-center"> <h5> List of Inventory</h5></div>
    <div class="card-body">
      <table class="table table-bordered">
        <thead class="thead-light">
          <tr>
            <th scope="col" class="text-center">S N</th>
            <th scope="col" class="text-center">Name</th>
            <th scope="col" class="text-center">Quantity </th>
            <th scope="col" class="text-center">Description</th>
            <th scope="col" class="text-center">Action</th>
          </tr>
        </thead>
        <tbody>

           @php
           use App\Models\Product;
           use App\Models\Inventory;
            $quantity=array();
            $product=Product::has('inventory')->get();
            $inventory=Inventory::has('product')->get();
            foreach ($inventory as $inven) {
              $total=0;
              $product=Product::where('inventory_id',$inven->id)->get();
                foreach ($product as $value) {
              $total+=$value->quantity;     
                }

               $quantity[]=$total;
                echo '<tr>
            <th class="text-center" scope="row">'.$inven->id.'</th>
            <td class="text-center">'.$inven->name. '<img src="storage/productfile/'.$inven->image.'"'. '  width="100px" alt="">'. '</td>
            <td class="text-center">'.$total.'
            </td>
            <td class="text-center">'.$inven->description.'</td>
            <td class="text-center">
              <a href="" class="btn btn-warning btn-sm">Edit</a>
              <a href="" class="btn btn-danger btn-sm">Delete</a>
            </td>
          </tr>';
              
        
       }
           @endphp

        


        </tbody>
      </table>
  
  
    </div>
  </div>

</div>


    
@endsection