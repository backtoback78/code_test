
  

  <nav class="nav-extended">
    <div class="nav-wrapper">
      <a href="{{route('home')}}" class="brand-logo">Code Tests Bienvenue: {{$user->username}}</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="{{route('home')}}">Sign out</a></li>      
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="{{route('home')}}">Sign out</a></li>
      </ul>
    </div>
    <div class="nav-content">
      <ul class="tabs tabs-transparent">
        <li class="tab"><a href="{{route('home')}}">Home</a></li>
        <li class="tab"><a class="active" href="{{url('question.index')}}">Dashboard</a></li>
      </ul>
    </div>
  </nav>
  <div id="test1" class="col s12"></div>
  <div id="test2" class="col s12"></div>
  