<template>
    <b-button-group>
        <b-button v-b-modal.AddContactModal>Add Contact</b-button>
        <b-button v-b-modal.AddRoomModal v-show="serviceType === 'hotel'">Add Room</b-button>
        <b-button disabled v-show="serviceType === 'hotel'">Add Restaurant</b-button>
        <b-button v-b-modal.AddFareModal v-show="serviceType === 'transport'">Add Fare</b-button>
        <b-button v-b-modal.AddDishModal v-show="serviceType === 'restaurant'">Add Dish</b-button>
        <b-button disabled v-b-modal.AddNoteModal>Add Note</b-button>
    </b-button-group>
</template>

<script>
    export default {
        name: "AddServiceMenu",
        props: ['serviceType'],
        computed: {}
    }
</script>

<style scoped>

</style>