<nav class="sticky-top py-2">
  <ul class="nav nav-fill align-items-center">
    <li class="nav-item">
      <a href="#" class="nav-link active">Services</a>
    </li>
    <li class="nav-item dropdown">
      <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About Israel</a>
      <div class="dropdown-menu">
        <a href="{{ route('home') }}" class="dropdown-item">History</a>
        <a href="{{ route('weather') }}" class="dropdown-item">Weather</a>
        <a href="{{ route('money') }}" class="dropdown-item">Money</a>
        <a href="{{ route('language') }}" class="dropdown-item">Language</a>
        <a href="{{ route('geography') }}" class="dropdown-item">Geography</a>
        <a href="{{ route('safety') }}" class="dropdown-item">Safety</a>
        <a href="{{ route('travelConsiderations') }}" class="dropdown-item">Travel Considerations</a>
      </div>
    </li>
    <li class="nav-item">
      <a href="#"><img src="http://via.placeholder.com/200x75" alt=""></a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link">Blog</a>
    </li>
    <li class="nav-item">
      <a href="{{ route('contact') }}" class="nav-link">Contact Us</a>
    </li>
  </ul>
</nav>
