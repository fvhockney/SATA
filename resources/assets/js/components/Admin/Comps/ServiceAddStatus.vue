<template>
    <div>
        <p>{{ contacts.length }} contacts added</p>
        <p v-show="service.type === 'hotel'">{{ service.rooms.length }} rooms added</p>
        <p v-show="service.type === 'hotel'">{{ service.restaurants.length }} restaurants added</p>
        <p v-show="service.type === 'restaurant'">{{ service.dishes.length }} dishes added</p>
        <p v-show="service.type === 'transport'">{{ service.fares.length }} fares added</p>
        <p v-show="service.type === 'transport'">{{ service.fares.length }} fares added</p>
        <p>{{ service.notes.length }} notes added</p>
    </div>
</template>

<script>
    import {mapState} from 'vuex';
    import Contacts from '../store/modules/Contacts';
    import Services from '../store/modules/Services';

    export default {
        name: "ServiceAddStatus",
        computed: {
            ...mapState('Services', {
                service: 'service'
            }),
            ...mapState('Contacts', {
                contacts: 'newContacts'
            })
        }
    }
</script>

<style scoped>

</style>