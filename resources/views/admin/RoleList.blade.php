@extends('admin.adminlayout')


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


@section('content')
<div class="container" style="margin-top: 80px;">
    <div class="card">
        <div class="card-header text-center">List Of Roles</div>

        <div class="mt-4">
            <h5 class="mb-2 mt-2">Click To Give A Permission</h5>

            <div class="card-body">
                <div class="list-group">
                    @foreach ($roles as $item)
                    <a href="{{route('permissionForm',['id'=>$item->id])}}" class="list-group-item list-group-item-action text-center h5">{{$item->name}}</a>
                        
                    @endforeach
                  </div>

                  
            </div>



    </div>
</div>

    
@endsection