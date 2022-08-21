@extends('admin.adminlayout')

@section('content')

<div class="container mb-5" style=" margin-top:60px;">
    <div class="card">
        <div class="card-header text-center"> <h5>User Details</h5></div>
        <div class="card-body">

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h6 class="">Give A Permission To {{$role->name}}</h6>
                            </div>
                            <div class="card-body">
                                <label for="fname">Name</label>
                                <div class="border mb-4 p-2" >{{$role->name}}</div>
        

                                  

                                 <form action="{{route('store-user-perm',['role_id'=>$role->id])}}" method="post">
                                    @csrf

                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" name="insert">
                                        <label class="form-check-label" for="flexSwitchCheckDefault">Insert</label>
                                      </div>
                         
                                      <div class="form-check form-switch mt-1">
                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" name="update">
                                        <label class="form-check-label" for="flexSwitchCheckDefault">Update</label>
                                      </div>
                         
                                      <div class="form-check form-switch mt-1">
                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" name="delete">
                                        <label class="form-check-label" for="flexSwitchCheckDefault">Delete</label>
                                      </div>
                         
                                      <div class="form-check form-switch mt-1">
                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" name="read">
                                        <label class="form-check-label" for="flexSwitchCheckDefault">Read</label>
                                      </div>
                         
                         
                         
                         
                                      <div class="form-check form-switch mt-1">
                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                                        <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox input</label>
                                      </div>
                                      <input type="submit" value="Submit" class="btn btn-primary mt-3">

                                </form>
                            </div>
                  
                           
                        </div>
        
                    </div>
                </div>
        
             
        </div>
    </div>
</div>


    
@endsection