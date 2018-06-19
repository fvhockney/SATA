<template>
    <div>
        <router-view></router-view>
    </div>
</template>

<script>
    export default {
        name: "Service",
        props: ['id', 'type']
    }
</script>

<style scoped>

</style>