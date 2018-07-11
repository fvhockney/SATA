<template>
    <div>
        <template v-if="loaded">
            <b-button variant="primary" @click="shouldEdit = !shouldEdit">Edit</b-button>
            <h2>{{ type | capitalize}} Information</h2>
            <div>Name: {{ profile[type].name }}</div>

            <h2>Contacts</h2>
            <div v-if="shouldEdit">
                <span v-b-modal.AddContact>
                    <i class="fas fa-plus"></i>
                </span>
            </div>
            <div v-for="contact in profile.contacts" class="mb-2">
                <div>
                    {{ contact.name }}<br>
                    Address:<br>
                    {{ contact.street }}<br>
                    {{ contact.city }}, {{ contact.zip }} {{ contact.country }}
                </div>
                <div>Phone: {{ contact.phone }}</div>
                <div>Email: {{ contact.email }}</div>
                <span v-if="shouldEdit">
                <span v-b-modal.EditContact @click="editContact(contact)">
                    <i class="fas fa-edit"></i>
                </span>
                <span @click="removeContact({'contact':contact})">
                        <i class="fas fa-trash-alt"></i>
                </span>
                </span>
            </div>

            <template v-if="type === 'hotel'">
                <h2>Rooms</h2>
                <div v-if="shouldEdit">
                <span v-b-modal.AddRoomModal>
                    <i class="fas fa-plus"></i>
                </span>
                </div>
                <div v-for="room in profile.rooms">
                    {{ room.type }} - {{ room.price }}
                    <span v-if="shouldEdit">
                    <span v-b-modal.EditRoomModal @click="editService(room)">
                        <i class="fas fa-edit"></i>
                    </span>
                    <span @click="removeAssociation({'item':room})">
                        <i class="fas fa-trash-alt"></i>
                    </span>
                    </span>
                </div>
            </template>

            <template v-if="type === 'hotel'">
                <h2 class="text-muted">Restaurants <i class="small">future feature</i></h2>
                <div v-for="restaurant in profile.restaurant">
                    {{ restaurant.name }}
                    <span v-if="shouldEdit">
                    <span v-b-modal.EditRestaurantModal @click="editService(restaurant)">
                        <i class="fas fa-edit"></i>
                    </span>
                    <span @click="removeAssociation({'item':restaurant})">
                        <i class="fas fa-trash-alt"></i>
                    </span>
                    </span>
                </div>
            </template>

            <template v-if="type === 'restaurant'">
                <h2>Dishes</h2>
                <div v-if="shouldEdit">
                <span v-b-modal.AddDishModal>
                    <i class="fas fa-plus"></i>
                </span>
                </div>
                <div v-for="dish in profile.dishes">
                    {{ dish.type }} - {{ dish.price}}
                    <span v-if="shouldEdit">
                    <span v-b-modal.EditDishModal @click="editService(dish)">
                        <i class="fas fa-edit"></i>
                    </span>
                    <span @click="removeAssociation({'item':dish})">
                        <i class="fas fa-trash-alt"></i>
                    </span>
                    </span>
                </div>
            </template>

            <template v-if="type === 'transport'">
                <h2>Fares</h2>
                <div v-if="shouldEdit">
                <span v-b-modal.AddFareModal>
                    <i class="fas fa-plus"></i>
                </span>
                </div>
                <div v-for="fare in fares">
                    {{ fare.type }} - {{ fare.price }}
                    <span v-if="shouldEdit">
                    <span v-b-modal.EditFareModal @click="editService(fare)">
                        <i class="fas fa-edit"></i>
                    </span>
                    <span @click="removeAssociation({'item':fare})">
                        <i class="fas fa-trash-alt"></i>
                    </span>
                    </span>
                </div>
            </template>


            <add-contact id="AddContact" :updateLink="profile[type].updateLink" add-to-existing></add-contact>
            <add-dish id="AddDishModal" :updateLink="profile[type].updateLink" add-to-existing></add-dish>
            <add-fare id="AddFareModal" :updateLink="profile[type].updateLink" add-to-existing></add-fare>
            <add-note id="AddNoteModal" :updateLink="profile[type].updateLink" add-to-existing></add-note>
            <add-room id="AddRoomModal" :updateLink="profile[type].updateLink" add-to-existing></add-room>

            <add-contact id="EditContact" :passContact="editingContact" editingExisting></add-contact>
            <add-dish id="EditDishModal" :passDish="editingService" editingExisting></add-dish>
            <add-fare id="EditFareModal" :passFare="editingService" editingExisting></add-fare>
            <add-note id="EditNoteModal" :passNote="editingService" editingExisting></add-note>
            <add-room id="EditRoomModal" :passRoom="editingService" editingExisting></add-room>
        </template>
        <progress v-else></progress>
    </div>
</template>

<script>
    import {mapActions} from 'vuex';
    import AddContact from '../Comps/AddContact';
    import AddDish from '../Comps/AddDish';
    import AddFare from '../Comps/AddFare';
    import AddNote from '../Comps/AddNote';
    import AddRoom from '../Comps/AddRoom';

    export default {
        name: "ServiceProfile",
        components: {AddContact, AddDish, AddFare, AddNote, AddRoom},
        props: ['id', 'type'],
        data() {
            return {
                profile: {},
                loaded: false,
                shouldEdit: false,
                editingContact: {},
                editingService: {},
            }
        },

        created() {
            axios.get(`/admin/${this.type}/${this.id}`)
                .then((response) => {
                    this.profile = response.data.data
                    this.loaded = true
                })
        },
        methods: {
            editContact(contact) {
                this.editingContact = contact
            },
            editService(service) {
                this.editingService = service
            },
            removeContact(payload) {
                this.$store.dispatch('Contacts/removeContact', {
                    'contact': payload.item,
                    'updateLink': this.profile[this.type].updateLink
                })
            },
            ...mapActions('Services', [
                'removeAssociation'
            ]),
        }
    }
</script>

<style scoped>

</style>
