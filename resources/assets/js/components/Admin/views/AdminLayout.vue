<template>
    <div id="admin-container">
        <admin-nav></admin-nav>
        <side-nav></side-nav>
        <router-view id="dashboard-container" class="container my-5"></router-view>
    </div>
</template>

<script>
    import SideNav from '../SideNav';
    import AdminNav from '../AdminNav';

    export default {
        name: "AdminLayout",
        components: {SideNav, AdminNav},
        props: ['user'],
        created () {
            this.$store.dispatch('Profile/getProfile', this.user)
        }
    }
</script>

<style scoped>

</style>