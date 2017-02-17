<nav>
    <div class="nav-wrapper light-green">
      <a href="{{route('home')}}" class="brand-logo">Code Tests</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down ">
       <li><a href="{{route('home')}}">Home</a></li>
        @foreach($categories as $category)
        <li><a href="{{url('category', [$category->id, $category->name])}}">{{$category->name}}</a></li>
        @endforeach
        @if(auth()->check())
         <!--<li><a href="{{url('dashboard/profile')}}">Profil</a></li>-->
          <li><a href="{{url('logout')}}">Logout</a></li>
         @else
          <li><a href="{{url('login')}}">Sign In</a></li>
         @endif
      </ul>
      <ul class="side-nav" id="mobile-demo">
       @foreach($categories as $category)
        <li><a href="{{url('category', [$category->id, $category->name])}}">{{$category->name}}</a></li>
         @endforeach
      </ul>
    </div>
  </nav>
