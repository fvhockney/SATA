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
          passFare: {required: false}
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
        watch:{
          passFare: function(){
              this.fare = this.passFare
          }
        },
        methods: {
            saveAddOn() {
                this.$store.commit('Services/saveAddOn', ['fares', this.fare])
                Object.assign(this.$data, this.$options.data())
            }
        }
    }
</script>

<style scoped>

</style>