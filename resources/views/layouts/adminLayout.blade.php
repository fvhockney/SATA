<!DOCTYPE html>


@include('partials.siteHeader')

<body>


<div id="admin">
    <admin-layout :user="{!! auth()->user()->id !!}"></admin-layout>
</div>

@include('partials.commonJS')
<script src={{ mix('js/adminApp.js') }}></script>
</body>

</html>
