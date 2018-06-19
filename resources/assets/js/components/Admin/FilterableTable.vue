<template>
    <div>
        <b-row>
            <b-col md="8" class="my-1">
                <b-form-group horizontal label="Filter" class="mb-0">
                    <b-input-group>
                        <b-form-input v-model="filter" placeholder="Type to Search"></b-form-input>
                        <b-input-group-append>
                            <b-btn :disabled="!filter" @click="filter = ''">Clear</b-btn>
                        </b-input-group-append>
                    </b-input-group>
                </b-form-group>
            </b-col>
            <b-col md="4" class="my-1">
                <b-form-group horizontal label="Per page" class="mb-0">
                    <b-form-select :options="pageOptions" v-model="perPage"></b-form-select>
                </b-form-group>
            </b-col>
        </b-row>

        <b-table striped hover :items="items" :fields="fields" :filter="filter" @filter="onFiltered"
                 :current-page="currentPage" :per-page="perPage">
            <template slot="view" slot-scope="row">
                <router-link :to="viewRequested(row)"><i class="fa-lg far fa-eye"></i></router-link>
            </template>
        </b-table>
        <b-row>
            <b-col md="6" class="my-1">
                <b-pagination :total-rows="totalRows" :per-page="perPage" v-model="currentPage"
                              class="my-0"></b-pagination>
            </b-col>
        </b-row>
    </div>
</template>

<script>
    export default {
        name: "FilterableTable",
        props: ['items' , 'fields', 'area'],
        data: function () {
            return {
                filter: null,
                currentPage: 1,
                perPage: 5,
                pageOptions: [5, 10, 15, 20],
            }
        },

        computed: {
            totalRows() {
                return this.items.length;
            }
        },

        methods: {
            onFiltered(filteredItems) {
                this.totalRows = filteredItems.length
                this.currentPage = 1
            },
            viewRequested(row){
                return "/"+this.area+"/"+row.item.type+"/"+row.item.id
            }
        },
    }
</script>

<style scoped>

</style>