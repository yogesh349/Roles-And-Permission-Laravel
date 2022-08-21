@extends('admin.adminlayout')

@section('content')
<div class="container mb-5" style="margin-top: 80px">
    <div class="card">
        <div class="card-header text-center"> <h5>User Details</h5></div>
        <div class="card-body">

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h6 class="">Give A Role And Permission To User</h6>
                            </div>
                            <div class="card-body">
                                <label for="fname">Name</label>
                                <div class="border mb-2 p-2" >{{$user->name}}</div>
        
                                <label for="fname">Email</label>
                                <div class="border mb-2 p-2" >{{$user->email}}</div>
                                  

                                 <form action="{{route('store-roles')}}" method="post">
                                    @csrf
                                    <div>
                                        <input type="hidden" name="user_id" value="{{$user->id}}">
                                        <select name="role_id" class="form-select mt-3" aria-label="Default select example">
                                            <option disabled>Select Role</option>
                                            @foreach ($roles as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                                
                                            @endforeach

                                          </select>
    
                                    </div>

                             

                                    

                                  <input class="btn btn-success mt-3" type="submit" value="Submit">
                                </form>
                            </div>
                  
                           
                        </div>
        
                    </div>
                </div>
        
             
        </div>
    </div>
</div>
    
@endsection
