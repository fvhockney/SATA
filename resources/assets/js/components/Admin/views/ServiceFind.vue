<template>
    <div v-if="loadStatus === 'loaded'">
        <div>
            <b-form-group lable="Show:">
                <b-form-checkbox-group id="checkboxesTypes" name="showTypes" v-model="showTypes" :options="types">
                </b-form-checkbox-group>
            </b-form-group>
        </div>
        <filterable-table :items="items" :fields="fields" :area="area"></filterable-table>
    </div>
</template>

<script>
    import {mapState} from 'vuex';
    import FilterableTable from '../FilterableTable';

    export default {
        name: "ServiceFind",
        components: {FilterableTable},
        data: function () {
            return {
                fields: [
                    {
                        key: 'id',
                        sortable: true
                    },
                    {
                        key: 'name',
                        sortable: true
                    },
                    {
                        key: 'type',
                        sortable: true
                    },
                    {
                        key: 'view',
                        sortable: false
                    }
                ],
                showTypes: ['hotel'],
                types: [
                    {text: 'Hotels', value: 'hotel'},
                    {text: 'Restaurants', value: 'restaurant'},
                    {text: 'Transportation', value: 'transport'},
                    {text: 'Tours', value: 'tour'},
                    {text: 'Attractions', value: 'attraction'},
                ],
                area: 'service',
            }
        },

        computed: {
            items: function () {
                return _(this.all).pick(this.showTypes).values().concat().flatten().value()
            },
            ...mapState('Services', {
                loadStatus: 'loadStatus',
                all: 'all'
            }),
        },

        methods: {
        },

        created() {
            Promise.all([
                this.$store.dispatch('Services/getAllHotels'),
                this.$store.dispatch('Services/getAllRestaurants'),
                this.$store.dispatch('Services/getAllTours'),
                this.$store.dispatch('Services/getAllTransports'),
                this.$store.dispatch('Services/getAllAttractions')
            ]).then(()=>{
                this.$store.commit('Services/makeAll')
            })
        },
    }
</script>

<style scoped>

</style>