<!DOCTYPE html>


@include('partials.siteHeader')

@include('partials.commonJS')
<body>
<div id="admin-container">

    @include('admin.partials.adminHeader')
    @include('admin.partials.adminNav')
    <div id="dashboard-container">
        @yield('content')
    </div>

</div>

</body>

</html>
