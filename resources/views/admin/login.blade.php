@extends('layout')
@section('title')
    Admin Login
@endsection

@section('inventory-form')
<h2 class="text-center mt-5 text-danger">Admin Login</h2>
<div class="container" style="display: flex; justify-content: center; margin-top:40px;">

    <form action="{{route('admin.check')}}" method="post">
        @if (Session::get('fail'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Holy guacamole!</strong> {{Session::get('fail')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        @endif
        @if (Session::get('logout'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Holy guacamole!</strong> {{Session::get('logout')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        @endif
        @csrf
        <div class="form-group">
          <label for="email">Email address</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" style="width:23em" value="{{old('email')}}">  
          @error('email')
          <span class="text-danger">{{$message}}</span>
              
          @enderror
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Password" style="width:23em" value="{{old('password')}}">
          @error('password')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <button type="submit" class="btn btn-primary">Login</button>
      </form>
</div>

@endsection