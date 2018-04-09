<!DOCTYPE html>
<html lang="en">

@include('partials.siteHeader')

<body>

  @include('partials.mainNav')

  <div class="container py-5">
    @yield('content')
  </div>

  @include('partials.mainFoot')

  @include('partials.commonJS')
</body>
</html>
