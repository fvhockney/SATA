<template>
    <b-modal :id="id" lazy title="Contact" @ok="saveContact" ok-title="Add/Update" cancel-title="Exit">
        <b-form-group v-if="!editingExisting" label="Search for Existing" label-for="existingSearch">
            <b-form-input id="existingSearch" type="text" v-model="searchTerm"></b-form-input>
            <ul v-show="visible">
                <li v-for="(result, key) in results" :key="key" @click="selectContact(result)">{{ result.name }}</li>
            </ul>
        </b-form-group>
        <b-form-group label="Name" lable-for="nameInput">
            <b-form-input id="nameInput" type="text" v-model="contact.name"></b-form-input>
        </b-form-group>
        <b-form-group label="Street" lable-for="streetInput">
            <b-form-input id="streetInput" type="text" v-model="contact.street"></b-form-input>
        </b-form-group>
        <b-form-group label="City" lable-for="cityInput">
            <b-form-input id="cityInput" type="text" v-model="contact.city"></b-form-input>
        </b-form-group>
        <b-form-group label="ZIP" lable-for="zipInput">
            <b-form-input id="zipInput" type="text" v-model="contact.zip"></b-form-input>
        </b-form-group>
        <b-form-group label="Country" lable-for="countryInput">
            <b-form-input id="countryInput" type="text" v-model="contact.country"></b-form-input>
        </b-form-group>
        <b-form-group label="Phone" lable-for="phoneInput">
            <b-form-input id="phoneInput" type="text" v-model="contact.phone"></b-form-input>
        </b-form-group>
        <b-form-group label="Email" lable-for="emailInput">
            <b-form-input id="emailInput" type="email" v-model="contact.email"></b-form-input>
        </b-form-group>
        <b-form-group label="Note" label-for="contactNote">
            <b-form-textarea disabled id="contactNote" v-model="contact.note" placeholder="Future Release Feature"></b-form-textarea>
        </b-form-group>
    </b-modal>
</template>

<script>
    import Contacts from '../store/modules/Contacts';
    import {mapGetters, mapState} from 'vuex';
    import uuid from 'uuid/v1';

    export default {
        name: "AddContact",
        props: {
            passContact: {required: false},
            id: String,
            editingExisting: {required: false, default: false, type:Boolean},
            addToExisting: {required:false, default:false, type:Boolean},
            updateLink: {required:false, type:String},
        },
        data() {
            return {
                contact:
                    {
                        id: null,
                        localId: uuid(),
                        street: '',
                        city: '',
                        zip: '',
                        country: '',
                        phone: '',
                        email: '',
                        name: '',
                        note: '',
                    },
                searchTerm: '',
            }
        },
        watch: {
            passContact: function () {
                this.contact = this.passContact
            }
        },
        computed: {
            visible: function () {
                return this.searchTerm.length !== 0
            },
            results: function () {
                return this.searchableContacts.filter(c => {
                    return c.name.toLowerCase().match(this.searchTerm
                        .toLowerCase())
                })
            },
            ...mapGetters('Contacts', {
                searchableContacts: 'searchableContacts'
            }),
            ...mapState('Contacts', {
                addressbook: 'addressbook'
            })
        },
        methods: {
            saveContact() {
                if (this.editingExisting) {
                    this.$store.dispatch('Contacts/updateContact', this.contact)
                        .then(response => {
                            Object.assign(this.$data, this.$options.data())
                        })
                } else if (this.addToExisting) {
                    this.$store.dispatch('Contacts/addContact', {'contact':this.contact,'updateLink': this.updateLink, 'action': 'add contact'})
                        .then(response => {
                            console.log(response)
                        })
                } else {
                    this.$store.commit('Contacts/saveContact', this.contact)
                    Object.assign(this.$data, this.$options.data())
                }
            },
            selectContact(contact) {
                this.searchTerm = '';
                let foundContact = _.filter(this.addressbook, c => {
                    return c.id === contact.id
                })[0]
                this.contact = foundContact
            }
        }
    }
</script>

<style scoped>

</style>