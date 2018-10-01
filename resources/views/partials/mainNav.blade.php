<nav id="main-nav" class="navbar fixed-top navbar-expand-lg navbar-light bg-light" {{ \Request::route()->getName()==='home'?"style=opacity:0;":null }}>
  <a class="navbar-brand" href="{{ route('home') }}"><img class="rounded-circle" height="45px" width="auto" src="/imgs/stork_logo_1.png" alt="Fernweh Logo"><img height="45px" width="auto" class="ml-2" src="/imgs/fernweh.png" alt="Fernweh Logo Text"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <div class="navbar-nav mx-auto">
        <a class="nav-item nav-link {{\Request::route()->getName()==='services'?'active':null}}" href="{{ route('services') }}">Services</a>
        <a class="nav-item nav-link {{\Request::route()->getName()==='info'?'active':null}}" href="{{ route('info') }}">Info</a>
        <a class="nav-item nav-link {{\Request::route()->getName()==='galleries'?'active':null}}" href="{{ route('galleries') }}">Galleries</a>
        <a class="nav-item nav-link {{\Request::route()->getName()==='contact'?'active':null}}" href="{{ route('contact') }}">Contact</a>
    </div>
  </div>
</nav>

{{-- <div class="dropdown">
        <a href="#" class="nav-item nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About Israel</a>
        <div class="dropdown-menu">
          <a href="{{ route('history') }}" class="dropdown-item">History</a>
          <a href="{{ route('weather') }}" class="dropdown-item">Weather</a>
          <a href="{{ route('money') }}" class="dropdown-item">Money</a>
          <a href="{{ route('language') }}" class="dropdown-item">Language</a>
          <a href="{{ route('geography') }}" class="dropdown-item">Geography</a>
          <a href="{{ route('safety') }}" class="dropdown-item">Safety</a>
          <a href="{{ route('travelConsiderations') }}" class="dropdown-item">Travel Considerations</a>
        </div>
      </div>--}}
