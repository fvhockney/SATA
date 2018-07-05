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
          passRoom: {required: false}
        },
        data() {
            return {
                room: {
                    localId: uuid(),
                    price: null,
                    type: null,
                },
                options:
                    ['twin', 'double', 'luxury']
            }
        },
        watch: {
            passRoom: function () {
                this.room = this.passRoom
            }
        },
        methods: {
            saveAddOn() {
                this.$store.commit('Services/saveAddOn', ['rooms', this.room])
                Object.assign(this.$data, this.$options.data())
            }
        }
    }
</script>

<style scoped>

</style>