<template>
    <div class="nav" id="admin-header">
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
            {{ this.$store.state.Profile.user.name }}
        </div>
        <button type="submit" class="btn btn-danger" @click="logout">Logout</button>
    </div>
</template>

<script>
    export default {
        name: "AdminNav",
        methods: {
            logout() {
                axios.post('/admin/logout')
                    .then((response)=>{
                        response.status === 204 ? document.location.href='/admin/login' : null
                    })
            }
        },
    }
</script>

<style scoped>

</style>