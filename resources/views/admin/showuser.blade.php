@extends('admin.adminlayout')
@section('title')
User View
    
@endsection



@section('content')
<div class="container" style="margin-top: 100px">
    @if (Session::get('status'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
       {{Session::get('status')}} {{Session::get('name')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        
    @else
    @endif
    <div class="card">
        <div class="card-header text-center">
            <h5>Users</h5>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead class="thead-light">
                  <tr>
                    <th  style="width:10%" scope="col">ID</th>
                    <th  style="width:10%" scope="col">Name</th>
                    <th  style="width:10%" scope="col">Email</th>
                    <th  style="width:10%" scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($users as $item)
                    <tr>
                        <th>{{$item->id}}</th>
                        <td>{{$item->name}}</td>
                        <td>{{$item->email}}</td>
                        <td>

                            <a class="btn btn-primary roles_btn" href="{{route('assign_roles',['id'=>$item->id])}}">Roles</a>
                            <a class="btn btn-danger" href="">Delete</a>
                        </td>
                      </tr>
                        
                    @endforeach
            

                </tbody>
              </table>
        </div>
    </div>

</div>

    
@endsection