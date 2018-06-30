<template>
    <b-modal id="contact" lazy title="Contact" @ok="saveContact" ok-title="Add/Update" cancel-title="Save & Exit">
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
    </b-modal>
</template>

<script>

    export default {
        name: "AddContact",
        data() {
            return {
                contact: {
                    street: '',
                    city: '',
                    zip: '',
                    country: '',
                    phone: '',
                    email: '',
                    name: '',
                }
            }
        },
        methods: {
            saveContact() {
                this.$store.commit('Contacts/saveContact', this.contact)
            }
        }
    }
</script>

<style scoped>

</style>