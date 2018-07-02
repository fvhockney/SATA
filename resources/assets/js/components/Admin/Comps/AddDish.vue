<template>
    <b-modal id="dish" lazy title="Dish" @ok="saveAddOn" ok-title="Add/Update" cancel-title="Save & Exit">
        <b-form-group label="Price" lable-for="priceInput">
            <b-form-input id="priceInput" type="text" v-model="dish.price"></b-form-input>
        </b-form-group>
        <b-form-group label="Type" lable-for="priceInput">
            <b-form-select v-model="dish.type" :options="options"/>
        </b-form-group>
    </b-modal>
</template>

<script>

    export default {
        name: "AddDish",
        data() {
            return {
                dish: {
                    price: null,
                    type: null,
                },
                options: ['halal', 'vegan', 'vegetarian', 'kosher']
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