<!DOCTYPE html>


@include('partials.siteHeader')

@include('partials.commonJS')
<body>

  @include('partials.mainNav')

  <div class="container py-5">


    @include('partials.adminNav')

    @yield('content')

  </div>

  @include('partials.mainFoot')


</body>

</html>
