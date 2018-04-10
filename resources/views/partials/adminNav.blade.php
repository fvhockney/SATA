<div class="nav nav-tabs">
  <a href="{{ route('adminDashboard') }}" class="nav-item nav-link active">Dashboard</a>
  <div class="dropdown">
    <a href="#" class="nav-item nav-link dropdown-toggle" data-toggle="dropdown" role="button">Blog</a>
    <div class="dropdown-menu">
      <a href="{{ action('AdminPostController@index') }}" class="dropdown-item">Manage Posts</a>
      <a href="{{ action('AdminPostController@create') }}" class="dropdown-item">Create Post</a>
    </div>
  </div>
  <a href="#" class="nav-item nav-link">Profile</a>
  <form class="ml-auto" method="POST" action="{{ action('SessionController@destroy') }}">
    {{ csrf_field() }}
    <button type="submit" class="btn btn-danger">Logout</button>
  </form>
</div>
