<header class="header">

  <div class="slidebar-nav" >
    {{-- <div class="p-2"><a class="text-decoration-none"  href="{{route('home')}}">Home</a></div> --}}
    



    <div class="p-2"> <a class="text-decoration-none" href="">Electronics</a></div>
    <div class="p-2"><a class="text-decoration-none"  href="{{route('userBills')}}">Mobiles</a> </div>
    <div class="p-2"><a class="text-decoration-none"  href="{{route('show_form_product')}}"> Guitars</a></div>
  
    
    <div class="p-2"><a class="text-decoration-none"  href="{{route('userBills')}}">Your Sales Bill</a> </div>

    @can('update', 'App\Models\Product')
    <div class="p-2"><a class="text-decoration-none"  href="{{route('productlist')}}">Products</a> </div>     
    @endcan

  </div>

  
  <div class="header_sec">
    <div class="header_1">
      <div class="m">
        <i style="cursor: pointer;" id="ham_logo" class="fa fa-solid fa-bars"></i>
      </div>
      <div class="m"> <a  href=""><img class="logo_m" src="" width="100px" alt=""></a> </div>
      <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    </div>
    <div class="header_2">
      @auth
      <form action="{{route('logout')}}" method="post">
        @csrf

      <input type="submit" value="Logout" class="btn btn-danger">
      </form>
      {{-- <a style="color: black;" class="btn btn-danger" href="{{route('logout')}}">Logout</a> --}}
      @endauth

      @guest
      <div class="login"><a class="btn btn-primary" style="text-decoration: none; color: black;" href=" {{route('login')}}">Signup/Login</a></div>
      @endguest


    </div>
  </div>
</header>