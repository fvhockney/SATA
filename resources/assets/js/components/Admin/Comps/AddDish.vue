<template>
    <b-modal :id="id" lazy title="Dish" @ok="saveAddOn" ok-title="Add/Update" cancel-title="Save & Exit">
        <b-form-group label="Price" lable-for="priceInput">
            <b-form-input id="priceInput" type="number" v-model="dish.price"></b-form-input>
        </b-form-group>
        <b-form-group label="Type" lable-for="priceInput">
            <b-form-select v-model="dish.type" :options="options"/>
        </b-form-group>
    </b-modal>
</template>

<script>
import uuid from 'uuid/v1';

    export default {
        name: "AddDish",
        props: {
            passDish: {required: false},
            id: String
        },
        data() {
            return {
                dish: {
                    localId: uuid(),
                    price: null,
                    type: null,
                },
                options: ['halal', 'vegan', 'vegetarian', 'kosher']
            }
        },
        watch: {
          passDish: function(){
              this.dish = this.passDish
          }
        },
        methods: {
            saveAddOn() {
                this.$store.commit('Services/saveAddOn', ['dishes',this.dish])
                Object.assign(this.$data, this.$options.data())
            }
        }
    }
</script>

<style scoped>

</style>