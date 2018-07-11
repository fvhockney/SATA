<template>
    <b-modal :id="id" lazy title="Room" @ok="saveAddOn" ok-title="Add/Update" cancel-title="Save & Exit">
        <b-form-group label="Price" lable-for="priceInput">
            <b-form-input id="priceInput" type="number" v-model="room.price"></b-form-input>
        </b-form-group>
        <b-form-group label="Type" lable-for="priceInput">
            <b-form-select v-model="room.type" :options="options"/>
        </b-form-group>
    </b-modal>
</template>

<script>
    import uuid from 'uuid/v1';

    export default {
        name: "AddRoom",
        props: {
            id: String,
            passRoom: {required: false},
            editingExisting: {required: false, default: false, type: Boolean},
            addToExisting: {required: false, default: false, type: Boolean},
            updateLink: {required: false, type: String},
        },
        data() {
            return {
                room: {
                    localId: uuid(),
                    price: null,
                    type: null,
                },
                options:
                    ['twin', 'double', 'luxury', 'single']
            }
        },
        watch: {
            passRoom: function () {
                this.room = this.passRoom
            }
        },
        methods: {
            saveAddOn() {
                if (this.editingExisting) {
                    this.$store.dispatch('Services/updateExistingAddon', {'item': this.room})
                } else if (this.addToExisting) {
                    this.$store.dispatch('Services/addAddon', {
                        'item': this.room,
                        'updateLink': this.updateLink,
                        'action': 'add room'
                    })
                } else {
                    this.$store.commit('Services/saveAddOn', ['rooms', this.room])
                    Object.assign(this.$data, this.$options.data())
                }
            }
        }
    }
</script>

<style scoped>

</style>
