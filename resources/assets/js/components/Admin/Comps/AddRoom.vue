<template>
    <b-modal id="room" lazy title="Room" @ok="saveRoom" ok-title="Add/Update" cancel-title="Save & Exit">
        <b-form-group label="Price" lable-for="priceInput">
            <b-form-input id="priceInput" type="text" v-model="room.price"></b-form-input>
        </b-form-group>
        <b-form-group label="Type" lable-for="priceInput">
            <b-form-select v-model="room.type" :options="options"/>
        </b-form-group>
    </b-modal>
</template>

<script>

    export default {
        name: "AddContact",
        data() {
            return {
                room: {
                    price: null,
                    type: null,
                },
                options: ['twin', 'double', 'luxury']
            }
        },
        methods: {
            saveRoom() {
                this.$store.commit('Services/saveRoom', this.room)
            }
        }
    }
</script>

<style scoped>

</style>