<template>
    <div>
        <h1>Welcome {{ user.name }}</h1>
        <h4>You have:</h4>
        <ul>
            <li>0: New Messages</li>
            <li>4: Notifications</li>
            <li>1: Upcoming Event</li>
            <li>2: Urgent Matters</li>
        </ul>
    </div>
</template>

<script>
    import {mapState} from 'vuex';

    export default {
        name: "Dashboard",
        computed: {
            ...mapState('Profile', {
                user: 'user',
            }),
        }
    }
</script>

<style scoped>

</style>