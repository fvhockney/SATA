<template>
    <b-modal :id="id" lazy title="Fare" @ok="saveAddOn" ok-title="Add/Update" cancel-title="Save & Exit">
        <b-form-group label="Price" lable-for="priceInput">
            <b-form-input id="priceInput" type="number" v-model="fare.price"></b-form-input>
        </b-form-group>
        <b-form-group label="Type" lable-for="priceInput">
            <b-form-select v-model="fare.type" :options="options"/>
        </b-form-group>
    </b-modal>
</template>

<script>
    import uuid from 'uuid/v1';

    export default {
        name: "AddFare",
        props: {
            id: String,
            passFare: {required: false},
            editingExisting: {required: false, default: false, type: Boolean},
            addToExisting: {required: false, default: false, type: Boolean},
            updateLink: {required: false, type: String},
        },
        data() {
            return {
                fare: {
                    localId: uuid(),
                    price: null,
                    type: null,
                },
                options: ['private', 'bus', 'train', 'plane']
            }
        },
        watch: {
            passFare: function () {
                this.fare = this.passFare
            }
        },
        methods: {
            saveAddOn() {
                if (this.editingExisting) {
                    this.$store.dispatch('Services/updateExistingAddon', {'item': this.fare})
                        .then(response => {
                            console.log(response)
                        })
                } else if (this.addToExisting) {
                    this.$store.dispatch('Services/addAddon', {
                        'item': this.fare,
                        'updateLink': this.updateLink,
                        'action': 'add fare'
                    })
                } else {
                    this.$store.commit('Services/saveAddOn', ['fares', this.fare])
                    Object.assign(this.$data, this.$options.data())
                }
            }
        }
    }
</script>

<style scoped>

</style>
