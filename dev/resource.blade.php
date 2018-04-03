<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  <title>Document</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body class="m-3">
  <nav class="sticky-top bg-white py-2">
    <ul class="nav nav-fill align-items-center bg-white">
      <li class="nav-item">
        <a href="#" class="nav-link active">Services</a>
      </li>
      <li class="nav-item dropdown">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About Israel</a>
        <div class="dropdown-menu">
          <a href="#" class="dropdown-item">History</a>
          <a href="#" class="dropdown-item">Weather</a>
          <a href="#" class="dropdown-item">Money</a>
          <a href="#" class="dropdown-item">Language</a>
          <a href="#" class="dropdown-item">Geography</a>
          <a href="#" class="dropdown-item">Safety</a>
          <a href="#" class="dropdown-item">Travel Considerations</a>
        </div>
      </li>
      <li class="nav-item">
        <a href="#"><img src="http://via.placeholder.com/200x75" alt=""></a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">Blog</a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">Contact Us</a>
      </li>
    </ul>
  </nav>
  <div class="jumbotron">
    <h1 class="display-3">Hello, world!</h1>
    <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
    <hr class="m-y-md">
    <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
    <p class="lead">
      <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
    </p>
  </div>
  <div class="d-flex justify-content-around flex-wrap">
    <img src="http://via.placeholder.com/150x150" alt="" class="rounded-circle">
    <img src="http://via.placeholder.com/150x150" alt="" class="rounded-circle">
    <img src="http://via.placeholder.com/150x150" alt="" class="rounded-circle">
    <img src="http://via.placeholder.com/150x150" alt="" class="rounded-circle">
    <img src="http://via.placeholder.com/150x150" alt="" class="rounded-circle">
  </div>
  <div class="card-deck-wrapper mt-5 mx-auto" style="width: 85%;">
    <div class="card-deck">
      <div class="card">
        <img class="card-img-top" src="http://via.placeholder.com/75x75" alt="Card image cap">
        <div class="card-block">
          <h4 class="card-title">Card title</h4>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
        <div class="card-footer text-center">
          <a class="btn-lg btn-primary" href="#" role="button">Do Something</a>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="http://via.placeholder.com/75x75" alt="Card image cap">
        <div class="card-block">
          <h4 class="card-title">Card title</h4>
          <p class="card-text">This card has supporting text below as a natural lead-in to additional content. And then some more text to make it long enough.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
        <div class="card-footer text-center">
          <a class="btn-lg btn-primary" href="#" role="button">Do Something</a>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="http://via.placeholder.com/75x75" alt="Card image cap">
        <div class="card-block">
          <h4 class="card-title">Card title</h4>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
        <div class="card-footer text-center">
          <a class="btn-lg btn-primary" href="#" role="button">Do Something</a>
        </div>
      </div>
    </div>
  </div>

  <div class="mt-4">
    <h3>Text Colors</h3>
  <p class="text-primary">.text-primary</p>
  <p class="text-secondary">.text-secondary</p>
  <p class="text-success">.text-success</p>
  <p class="text-danger">.text-danger</p>
  <p class="text-warning">.text-warning</p>
  <p class="text-info">.text-info</p>
  <p class="text-light bg-dark">.text-light</p>
  <p class="text-dark">.text-dark</p>
  <p class="text-muted">.text-muted</p>
  <p class="text-white bg-dark">.text-white</p>
  </div>

  <div class="mt-4">
    <h3>Link colors</h3>
  <p><a href="#" class="text-primary">Primary link</a></p>
  <p><a href="#" class="text-secondary">Secondary link</a></p>
  <p><a href="#" class="text-success">Success link</a></p>
  <p><a href="#" class="text-danger">Danger link</a></p>
  <p><a href="#" class="text-warning">Warning link</a></p>
  <p><a href="#" class="text-info">Info link</a></p>
  <p><a href="#" class="text-light bg-dark">Light link</a></p>
  <p><a href="#" class="text-dark">Dark link</a></p>
  <p><a href="#" class="text-muted">Muted link</a></p>
  <p><a href="#" class="text-white bg-dark">White link</a></p>
  </div>

  <div class="mt-4">
    <h3>Solid Colors</h3>
  <div class="p-3 mb-2 bg-primary text-white">.bg-primary</div>
  <div class="p-3 mb-2 bg-secondary text-white">.bg-secondary</div>
  <div class="p-3 mb-2 bg-success text-white">.bg-success</div>
  <div class="p-3 mb-2 bg-danger text-white">.bg-danger</div>
  <div class="p-3 mb-2 bg-warning text-dark">.bg-warning</div>
  <div class="p-3 mb-2 bg-info text-white">.bg-info</div>
  <div class="p-3 mb-2 bg-light text-dark">.bg-light</div>
  <div class="p-3 mb-2 bg-dark text-white">.bg-dark</div>
  <div class="p-3 mb-2 bg-white text-dark">.bg-white</div>
  </div>

  <div class="mt-4">
    <h3>Gradiant Colors</h3>
  <div class="p-3 mb-2 bg-gradient-primary text-white">.bg-gradient-primary</div>
  <div class="p-3 mb-2 bg-gradient-secondary text-white">.bg-gradient-secondary</div>
  <div class="p-3 mb-2 bg-gradient-success text-white">.bg-gradient-success</div>
  <div class="p-3 mb-2 bg-gradient-danger text-white">.bg-gradient-danger</div>
  <div class="p-3 mb-2 bg-gradient-warning text-dark">.bg-gradient-warning</div>
  <div class="p-3 mb-2 bg-gradient-info text-white">.bg-gradient-info</div>
  <div class="p-3 mb-2 bg-gradient-light text-dark">.bg-gradient-light</div>
  <div class="p-3 mb-2 bg-gradient-dark text-white">.bg-gradient-dark</div>
  </div>

  <div class="mt-4">
    <h3>Alerts</h3>
    <div class="alert alert-primary" role="alert">
  This is a primary alert—check it out!
</div>
<div class="alert alert-secondary" role="alert">
  This is a secondary alert—check it out!
</div>
<div class="alert alert-success" role="alert">
  This is a success alert—check it out!
</div>
<div class="alert alert-danger" role="alert">
  This is a danger alert—check it out!
</div>
<div class="alert alert-warning" role="alert">
  This is a warning alert—check it out!
</div>
<div class="alert alert-info" role="alert">
  This is a info alert—check it out!
</div>
<div class="alert alert-light" role="alert">
  This is a light alert—check it out!
</div>
<div class="alert alert-dark" role="alert">
  This is a dark alert—check it out!
</div>
  </div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>
