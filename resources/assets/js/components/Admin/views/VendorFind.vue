<template>
    <div v-if="loadStatus === 'loaded'">
        <filterable-table :items="vendors" :fields="fields" :area="area"></filterable-table>
    </div>
</template>

<script>
    import { mapState } from 'vuex';
    import FilterableTable from '../FilterableTable';

    export default {
        name: "VendorsFind",
        components: { FilterableTable },
        data: function () {
            return {
                fields: [
                    {
                        key: 'id',
                        sortable: true
                    },
                    {   key: 'name',
                        sortable: true
                    },
                    {   key: 'view',
                        sortable: false
                    }
                ],
                area: 'vendor',
            }
        },

        computed: {
            ...mapState('Vendors', {
                loadStatus: 'loadStatus',
                vendors: 'all',
            })
        },

        methods: {
        },

        created() {
            this.$store.dispatch('Vendors/getAllVendors')
        },
    }
</script>

<style scoped>

</style>