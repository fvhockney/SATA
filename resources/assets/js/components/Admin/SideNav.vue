<template>
    <div id="admin-side-nav">
        <router-link to="/" class="nav-item nav-link">
            <i class="fa-fw fa-lg fas fa-tachometer-alt mr-1"></i>Dashboard
        </router-link>

        <div @click="toggleDropDown" class="nav-item">
            <i class="fa-fw fa-lg fas fa-user-friends mr-1"></i>Customers
        </div>
        <div class="admin-dropdown dropdown-hide">
            <router-link to="/customer/add" class="nav-item nav-link admin-dropdown-item">
                <i class="fa-fw fa-lg fas fa-plus mr-1"></i>New
            </router-link>
            <router-link to="/customer/find" class="nav-item nav-link admin-dropdown-item">
                <i class="fa-fw fa-lg fas fa-search mr-1"></i>Find
            </router-link>
        </div>

        <div @click="toggleDropDown" class="nav-item">
            <i class="fa-fw fa-lg fas fa-boxes"></i>Services
        </div>
        <div class="admin-dropdown dropdown-hide">
            <router-link to="/service/add" class="nav-item nav-link admin-dropdown-item">
                <i class="fa-fw fa-lg fas fa-plus mr-1"></i>Add
            </router-link>
            <router-link to="/service/find" class="nav-item nav-link admin-dropdown-item">
                <i class="fa-fw fa-lg fas fa-search mr-1"></i>Find
            </router-link>
        </div>

        <router-link to="/finances" class="nav-item nav-link">
            <i class="fa-fw fa-lg fas fa-money-bill mr-1"></i>Finances
        </router-link>
        <router-link to="/stats" class="nav-item nav-link">
            <i class="fa-fw fa-lg fas fa-chart-bar mr-1"></i>Statistics
        </router-link>
        <router-link to="/task" class="nav-item nav-link">
            <i class="fa-fw fa-lg fas fa-tasks mr-1"></i>Tasks
        </router-link>
        <router-link to="/profile" class="nav-item nav-link">
            <i class="fa-fw fa-lg fas fa-user mr-1"></i>Profile
        </router-link>
        <router-link to="/users" class="nav-item nav-link">
            <i class="fa-fw fa-lg fas fa-users mr-1"></i>Users
        </router-link>
    </div>
</template>

<script>
    export default {
        name: "SideNav",
        data: function () {
            return {}
        },
        methods: {
            toggleDropDown(event) {
                event.target.nextElementSibling.classList.toggle('dropdown-hide')
            }
        },
    }
</script>

<style lang="scss" scoped>

</style>