<template>
    <div>
        <h2>Hotel Information</h2>
        <template v-if="loaded">
            <div>Name: {{ profile.service.name }}</div>
            <div>
                Address:<br>
                {{ profile.service.contact.street }}<br>
                {{ profile.service.contact.city }}, {{ profile.service.contact.zip }} {{ profile.service.contact.country }}
            </div>
            <div>Phone: {{ profile.service.contact.phone }}</div>
            <div>Email: {{ profile.service.contact.email }}</div>
        </template>

        <h2>Rooms</h2>
        <template v-if="loaded">
            <div v-for="room in profile.rooms">
                {{ room.type }} - {{ room.price }}
            </div>
        </template>

        <h2>Restaurants</h2>
        <template v-if="loaded">
            <div v-for="restaurant in profile.restaurant">
                {{ restaurant.name }}
            </div>
        </template>
    </div>
</template>

<script>
    export default {
        name: "ServiceProfile",
        props: ['id', 'type'],
        data() {
            return {
                profile: {},
                loaded: false
            }
        },

        created() {
            axios.get('/admin/' + this.type + '/' + this.id)
                .then((response) => {
                    this.profile = response.data
                    this.loaded = true
                })
        }
    }
</script>

<style scoped>

</style>