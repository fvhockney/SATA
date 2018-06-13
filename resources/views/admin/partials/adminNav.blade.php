<div id="admin-side-nav">
    {{--<div class="dropdown">
        <a href="#" class="nav-item nav-link dropdown-toggle" data-toggle="dropdown" role="button">Blog</a>
        <div class="dropdown-menu">
            <a href="{{ action('AdminPostController@index') }}" class="dropdown-item">Manage Posts</a>
            <a href="{{ action('AdminPostController@create') }}" class="dropdown-item">Create Post</a>
        </div>
    </div>--}}

    <div onclick="toggleDropDown(this)" class="nav-item"><i class="fa-fw fa-lg fas fa-handshake mr-1"></i>Vendors</div>
    <div class="admin-dropdown dropdown-hide">
        <a href="#" class="nav-item nav-link admin-dropdown-item"><i class="fa-fw fa-lg fas fa-plus mr-1"></i>New</a>
        <a href="#" class="nav-item nav-link admin-dropdown-item"><i class="fa-fw fa-lg fas fa-search mr-1"></i>Find</a>
    </div>

    <div onclick="toggleDropDown(this)" class="nav-item"><i class="fa-fw fa-lg fas fa-user-friends mr-1"></i>Customers</div>
    <div class="admin-dropdown dropdown-hide">
        <a href="#" class="nav-item nav-link admin-dropdown-item"><i class="fa-fw fa-lg fas fa-plus mr-1"></i>New</a>
        <a href="#" class="nav-item nav-link admin-dropdown-item"><i class="fa-fw fa-lg fas fa-search mr-1"></i>Find</a>
    </div>

    <a href="#" class="nav-item nav-link"><i class="fa-fw fa-lg fas fa-money-bill mr-1"></i>Finances</a>
    <a href="#" class="nav-item nav-link"><i class="fa-fw fa-lg fas fa-chart-bar mr-1"></i>Statistics</a>
    <a href="{{ route('adminTasks') }}" class="nav-item nav-link"><i class="fa-fw fa-lg fas fa-tasks mr-1"></i>Tasks</a>
    <a href="#" class="nav-item nav-link"><i class="fa-fw fa-lg fas fa-user mr-1"></i>Profile</a>
    <a href="#" class="nav-item nav-link"><i class="fa-fw fa-lg fas fa-users mr-1"></i>Users</a>
</div>

<script>
    function toggleDropDown(el){
        el.nextElementSibling.classList.toggle('dropdown-hide')
    }
</script>


