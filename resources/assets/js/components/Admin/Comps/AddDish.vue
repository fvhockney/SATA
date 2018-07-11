<template lang="html">
    <b-modal :id="id" lazy title="Dish" @ok="saveAddOn" ok-title="Add/Update" cancel-title="Save & Exit">
        <b-form-group label="Name" label-for="nameInput">
            <b-form-input id="nameInput" type="text" v-model="dish.name"></b-form-input>
        </b-form-group>
        <b-form-group label="Price" label-for="priceInput">
            <b-form-input id="priceInput" type="text" v-model="dish.price"></b-form-input>
        </b-form-group>
        <b-form-group label="Type" label-for="priceInput">
            <b-form-select v-model="dish.type" :options="options"></b-form-select>
        </b-form-group>
    </b-modal>
</template>

<script>
    import uuid from 'uuid/v1';

    export default {
        name: "AddDish",
        props: {
            passDish: {required: false},
            id: String,
            editingExisting: {required: false, default: false, type: Boolean},
            addToExisting: {required: false, default: false, type: Boolean},
            updateLink: {required: false, type: String},
        },
        data() {
            return {
                dish: {
                    localId: uuid(),
                    price: null,
                    type: null,
                    name: '',
                },
                options: ['halal', 'vegan', 'vegetarian', 'kosher']
            }
        },
        watch: {
            passDish: function () {
                this.dish = this.passDish
            }
        },
        methods: {
            saveAddOn() {
                if (this.editingExisting) {
                    this.$store.dispatch('Services/updateExistingAddon', {'item': this.dish})
                        .then(response => {
                            console.log(response);
                        })
                } else if (this.addToExisting) {
                    this.$store.dispatch('Services/addAddon', {
                        'item': this.dish,
                        'updateLink': this.updateLink,
                        'action': 'add dish'
                    })
                        .then(response => {
                            console.log(response)
                        })
                } else {
                    this.$store.commit('Services/saveAddOn', ['dishes', this.dish])
                    Object.assign(this.$data, this.$options.data())
                }
            }
        }
    }
</script>

<style scoped>

</style>
