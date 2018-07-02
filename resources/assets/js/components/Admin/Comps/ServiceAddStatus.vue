<template>
    <div>
        <p>{{ contacts.length }} contacts added
            <span v-show="contacts.length > 0" v-b-toggle.collapseContact>
                <i class="fas fa-plus-square"></i>
            </span>
        </p>
        <b-collapse id="collapseContact">
            <ul>
                <li v-for="contact in contacts">
                    {{ contact.name}}
                    <span @click="removeContact(contact)"><i class="fas fa-trash-alt"></i>
                </span>
                </li>
            </ul>
        </b-collapse>

        <p v-show="service.type === 'hotel'">{{ service.rooms.length }} rooms added
            <span v-show="service.rooms.length > 0" v-b-toggle.collapseRooms>
                <i class="fas fa-plus-square"></i>
            </span>
        </p>
        <b-collapse id="collapseRooms">
            <ul>
                <li v-for="room in service.rooms">
                    {{ room.type }} - {{ room.price }}
                    <span @click="removeService(['rooms', room])">
                <i class="fas fa-trash-alt"></i>
                </span>
                </li>
            </ul>
        </b-collapse>

        <p v-show="service.type === 'hotel'">{{ service.restaurants.length }} restaurants added
            <span v-show="service.restaurants.length > 0" v-b-toggle.collapseRestaurants>
                <i class="fas fa-plus-square"></i>
            </span>
        </p>
        <b-collapse id="collapseRestaurants">
            <ul>
                <li v-for="restaurant in service.restaurants">
                    {{ restaurant.name}}
                    <span @click="removeService(['restaurants', restaurant])">
                <i class="fas fa-trash-alt"></i>
                </span>
                </li>
            </ul>
        </b-collapse>

        <p v-show="service.type === 'restaurant'">{{ service.dishes.length }} dishes added
            <span v-show="service.dishes.length > 0" v-b-toggle.collapseDishes>
                <i class="fas fa-plus-square"></i>
            </span>
        </p>
        <b-collapse id="collapseDishes">
            <ul>
                <li v-for="dish in service.dishes">
                    {{ dish.type }} - {{ dish.price }}
                    <span @click="removeService(['dishes', dish])">
                <i class="fas fa-trash-alt"></i>
                </span>
                </li>
            </ul>
        </b-collapse>

        <p v-show="service.type === 'transport'">{{ service.fares.length }} fares added
            <span v-show="service.fares.length > 0" v-b-toggle.collapseFares>
                <i class="fas fa-plus-square"></i>
            </span>
        </p>
        <b-collapse id="collapseFares">
            <ul>
                <li v-for="fare in service.fares">
                    {{ fare.type }} - {{ fare.price }}
                    <span @click="removeService(['fares', fare])">
                <i class="fas fa-trash-alt"></i>
                </span>
                </li>
            </ul>
        </b-collapse>

        <p>{{ service.notes.length }} notes added
            <span v-show="service.notes.length > 0" v-b-toggle.collapseNotes>
                <i class="fas fa-plus-square"></i>
            </span>
        </p>
        <b-collapse id="collapseNotes">
            <ul>
                <li v-for="note in service.notes">
                    {{ note }}
                    <span @click="removeService(['notes', note])">
                <i class="fas fa-trash-alt"></i>
                </span>
                </li>
            </ul>
        </b-collapse>
    </div>
</template>

<script>
    import {mapState, mapMutations} from 'vuex';
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
        },
        methods: {
            ...mapMutations('Contacts', {
                removeContact: 'removeContact'
            }),
            ...mapMutations('Services', {
                removeService: 'removeServiceAddOn'
            })
        }
    }
</script>

<style scoped lang="scss">

</style>