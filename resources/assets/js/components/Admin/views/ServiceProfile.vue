<template>
    <div>
        <template v-if="loaded">
            <h2>{{ type | capitalize}} Information</h2>
            <div>Name: {{ profile[type].name }}</div>

            <h2>Contacts</h2>
            <div v-for="contact in profile.contacts" class="mb-2">
                <div>
                    {{ contact.name }}<br>
                    Address:<br>
                    {{ contact.street }}<br>
                    {{ contact.city }}, {{ contact.zip }} {{ contact.country }}
                </div>
                <div>Phone: {{ contact.phone }}</div>
                <div>Email: {{ contact.email }}</div>
            </div>

            <template v-if="type === 'hotel'">
                <h2>Rooms</h2>
                <div v-for="room in profile.rooms">
                    {{ room.type }} - {{ room.price }}
                </div>
            </template>

            <template v-if="type === 'hotel'">
            <h2>Restaurants</h2>
            <div v-for="restaurant in profile.restaurant">
                {{ restaurant.name }}
            </div>
            </template>

            <template v-if="type === 'restaurant'">
                <h2>Dishes</h2>
                <div v-for="dish in profile.dishes">
                    {{ dish.type }} - {{ dish.price}}
                </div>
            </template>

            <template v-if="type === 'transport'">
                <div v-for="fare in fares">
                    {{ fare.type }} - {{ fare.price }}
                </div>
            </template>
        </template>
        <progress v-else></progress>
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
                    this.profile = response.data.data
                    this.loaded = true
                })
        }i
    }
</script>

<style scoped>

</style>