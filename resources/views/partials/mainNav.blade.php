<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="{{ route('home') }}"><img src="http://via.placeholder.com/200x75" alt=""></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <div class="navbar-nav">
        <a class="nav-item nav-link active" href="{{ route('services') }}">Services</a>
        <a class="nav-item nav-link" href="{{ route('blog') }}">Blog</a>
        <a class="nav-item nav-link" href="{{ route('contact') }}">Contact</a>
      <div class="dropdown">
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
      </div>
    </div>
  </div>
</nav>
