
  
    <nav>
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo">LogoCode Tests Bienvenue: {{$user->username}}</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="{{route('home')}}">Home</a></li>
        <li class="tab"><a class="active" href="{{route('question.index')}}">Dashboard</a></li>
        <li><a href="{{route('home')}}">Sign out</a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="{{route('home')}}">Home</a></li>
        <li class="tab"><a class="active" href="{{url('question.index')}}">Dashboard</a></li>
        <li><a href="{{route('home')}}">Sign out</a></li>
      </ul>
    </div>
  </nav>