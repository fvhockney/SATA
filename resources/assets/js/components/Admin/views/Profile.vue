<template>
    <div>
        Name: {{ user.name }} <br>
        Title: {{ user.title }} <br>
        Address: <br>
        Phone: <br>
        Email: {{ user.email }} <br>
        Roles: <br>
    </div>
</template>

<script>
    import { mapState, mapActions, mapMutations } from 'vuex';
    export default {
        name: "Profile",
        computed: {
            ...mapState('Profile',{
                user: 'user',
            })
        },
    }
</script>

<style scoped>

</style>