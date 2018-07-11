<template>
    <b-modal size="lg" no-cloe-on-backdrop no-close-on-esc ok-only lazy :visible="created" @hidden="$emit('hidden')">
        <h4 class="modal-header">Your Record Was Created!!!</h4>
        <div v-if="created === true">
            <h2>{{ message.type | capitalize}} Information</h2>
            <div>Name: {{ message[message.type].name }}</div>

            <h2>Contacts</h2>
            <div v-for="contact in message.contacts" class="mb-2">
                <div>
                    {{ contact.name }}<br>
                    Address:<br>
                    {{ contact.street }}<br>
                    {{ contact.city }}, {{ contact.zip }} {{ contact.country }}
                </div>
                <div>Phone: {{ contact.phone }}</div>
                <div>Email: {{ contact.email }}</div>
            </div>

            <template v-if="message.type === 'hotel'">
                <h2>Rooms</h2>
                <div v-for="room in message.rooms">
                    {{ room.type }} - {{ room.price }}
                </div>
            </template>

            <template v-if="message.type === 'hotel'">
                <h2>Restaurants</h2>
                <div v-for="restaurant in message.restaurants">
                    {{ restaurant.name }}
                </div>
            </template>

            <template v-if="message.type === 'restaurant'">
                <h2>Dishes</h2>
                <div v-for="dish in message.dishes">
                    {{ dish.type }} - {{ dish.price}}
                </div>
            </template>

            <template v-if="message.type === 'transport'">
                <div v-for="fare in message">
                    {{ fare.type }} - {{ fare.price }}
                </div>
            </template>
        </div>
    </b-modal>
</template>

<script>
    export default {
        name: "CreateConfirm",
        props: {
            message: {
                required: true,
            },
            created: {
                required: true,
            },
        },
    }
</script>

<style scoped>

</style>