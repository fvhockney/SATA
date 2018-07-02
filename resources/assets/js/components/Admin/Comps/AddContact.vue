<template>
    <b-modal id="contact" :return-focus="returnFocus" lazy title="Contact" @ok="saveContact" ok-title="Add/Update" cancel-title="Save & Exit">
        <b-form-group label="Search for Existing" label-for="existingSearch">
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
            <b-form-input id="emailInput" type="text" v-model="contact.email"></b-form-input>
        </b-form-group>
        <b-form-group label="Note" label-for="contactNote">
            <b-form-textarea id="contactNote" v-model="contact.note"></b-form-textarea>
        </b-form-group>
    </b-modal>
</template>

<script>
    import Contacts from '../store/modules/Contacts';
    import {mapGetters, mapState} from 'vuex';

    export default {
        name: "AddContact",
        props: ['returnFocus'],
        data() {
            return {
                contact: {
                    id: null,
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
                this.$store.commit('Contacts/saveContact', this.contact)
                Object.assign(this.$data, this.$options.data())
            },
            selectContact(contact) {
                this.searchTerm = '';
                let foundContact = _.filter(this.addressbook, c=>{return c.id === contact.id})[0]
                _.each(this.contact, (v,k) => {
                    if (_.has(foundContact, k)){
                        _.set(this.contact, k, foundContact[k])
                    }
                })
            }
        }
    }
</script>

<style scoped>

</style>