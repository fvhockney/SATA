<template>
    <div>
        <div>{{ contacts.length }} contacts added
            <span v-show="contacts.length > 0" v-b-toggle.collapseContact>
                <i class="fas fa-plus-square"></i>
            </span>
            <b-collapse id="collapseContact">
                <div v-for="contact in contacts">
                    {{ contact.name}}
                    <span v-b-modal.EditContact @click="editContact(contact)">
                        <i class="fas fa-edit"></i>
                    </span>
                    <span @click="removeContact(contact)">
                        <i class="fas fa-trash-alt"></i>
                    </span>
                </div>
            </b-collapse>
        </div>

        <div v-show="service.type === 'hotel'">{{ service.rooms.length }} rooms added
            <span v-show="service.rooms.length > 0" v-b-toggle.collapseRooms>
                <i class="fas fa-plus-square"></i>
            </span>
            <b-collapse id="collapseRooms">
                <div v-for="room in service.rooms">
                    {{ room.type }} - {{ room.price }}
                    <span v-b-modal.EditRoomModal @click="editService(room)">
                        <i class="fas fa-edit"></i>
                    </span>
                    <span @click="removeService(['rooms', room])">
                <i class="fas fa-trash-alt"></i>
                </span>
                </div>
            </b-collapse>
        </div>

        <div v-show="service.type === 'hotel'">
            <s>{{ service.restaurants.length }} restaurants added</s>
            <span v-show="service.restaurants.length > 0" v-b-toggle.collapseRestaurants>
                <i class="fas fa-plus-square"></i>
            </span>
            <b-collapse id="collapseRestaurants">
                <div v-for="restaurant in service.restaurants">
                    {{ restaurant.name}}
                    <span @click="removeService(['restaurants', restaurant])">
                <i class="fas fa-trash-alt"></i>
                </span>
                </div>
            </b-collapse>
        </div>

        <div v-show="service.type === 'restaurant'">{{ service.dishes.length }} dishes added
            <span v-show="service.dishes.length > 0" v-b-toggle.collapseDishes>
                <i class="fas fa-plus-square"></i>
            </span>
            <b-collapse id="collapseDishes">
                <div v-for="dish in service.dishes">
                    {{ dish.type }} - {{ dish.price }}
                    <span v-b-modal.EditDishModal @click="editService(dish)">
                        <i class="fas fa-edit"></i>
                    </span>
                    <span @click="removeService(['dishes', dish])">
                <i class="fas fa-trash-alt"></i>
                </span>
                </div>
            </b-collapse>
        </div>

        <div v-show="service.type === 'transport'">{{ service.fares.length }} fares added
            <span v-show="service.fares.length > 0" v-b-toggle.collapseFares>
                <i class="fas fa-plus-square"></i>
            </span>
            <b-collapse id="collapseFares">
                <div v-for="fare in service.fares">
                    {{ fare.type }} - {{ fare.price }}
                    <span v-b-modal.EditFareModal @click="editService(fare)">
                        <i class="fas fa-edit"></i>
                    </span>
                    <span @click="removeService(['fares', fare])">
                <i class="fas fa-trash-alt"></i>
                </span>
                </div>
            </b-collapse>
        </div>

        <div><s>{{ service.notes.length }} notes added</s>
            <span v-show="service.notes.length > 0" v-b-toggle.collapseNotes>
                <i class="fas fa-plus-square"></i>
            </span>
            <b-collapse id="collapseNotes">
                <div v-for="note in service.notes">
                    {{ note.note }}
                    <span v-b-modal.EditNoteModal @click="editService(note)">
                        <i class="fas fa-edit"></i>
                    </span>
                    <span @click="removeService(['notes', note])">
                <i class="fas fa-trash-alt"></i>
                </span>
                </div>
            </b-collapse>
        </div>

        <add-contact id="EditContact" :passContact="contact"></add-contact>
        <add-dish id="EditDishModal" :passDish="passService"></add-dish>
        <add-fare id="EditFareModal" :passFare="passService"></add-fare>
        <add-note id="EditNoteModal" :passNote="passService"></add-note>
        <add-room id="EditRoomModal" :passRoom="passService"></add-room>

    </div>
</template>

<script>
    import {mapState, mapMutations} from 'vuex';
    import Contacts from '../store/modules/Contacts';
    import Services from '../store/modules/Services';
    import AddContact from './AddContact';
    import AddDish from './AddDish';
    import AddFare from './AddFare';
    import AddNote from './AddNote';
    import AddRoom from './AddRoom';

    export default {
        name: "ServiceAddStatus",
        components: {
            AddContact,
            AddDish,
            AddFare,
            AddNote,
            AddRoom
        },
        data() {
            return {
                contact: {},
                passService: {}
            }
        },
        computed: {
            ...mapState('Services', {
                service: 'service'
            }),
            ...mapState('Contacts', {
                contacts: 'newContacts'
            })
        },
        methods: {
            editService(editableService) {
                this.passService = editableService
            },
            editContact(contact) {
                this.contact = contact
            },
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