<!DOCTYPE html>
<html lang="en">

@include('partials.siteHeader')

<body>

  {{--@include('partials.mainNav')--}}

  @yield('content')

  @include('partials.mainFoot')

  @include('partials.commonJS')
</body>
</html>
