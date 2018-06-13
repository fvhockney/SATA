<div class="nav" id="admin-header">
    <div class="fa-2x mr-3">
        <a href="{{ route('adminDashboard') }}"><i class="fa-fw fas fa-tachometer-alt"></i></a>

    </div>
    <div class="fa-2x mr-3">
        <span class="fa-layers fa-fw">
            <i class="fas fa-envelope"></i>
            <span class="fa-layers-bottom-right fa-layers-counter fa-lg" style="background:Tomato">1,419</span>
        </span>
    </div>
    <div class="fa-2x">
        <span class="fa-layers fa-fw">
            <i class="far fa-bell"></i>
            <span class="fa-layers-bottom-right fa-layers-counter fa-lg" style="background: Tomato;">4</span>
        </span>
    </div>
    <div class="ml-auto mr-2">
        {{ auth()->user()->name }}
    </div>
    <form method="POST" action="{{ action('SessionController@destroy') }}">
        {{ csrf_field() }}
        <button type="submit" class="btn btn-danger">Logout</button>
    </form>
</div>