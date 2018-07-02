<template>
    <b-button-group>
        <b-button v-b-modal.contact>Add Contact</b-button>
        <b-button v-b-modal.room v-show="serviceType === 'hotel'">Add Room</b-button>
        <b-button v-show="serviceType === 'hotel'">Add Restaurant</b-button>
        <b-button v-b-modal.fare v-show="serviceType === 'transport'">Add Fare</b-button>
        <b-button v-b-modal.dish v-show="serviceType === 'restaurant'">Add Dish</b-button>
        <b-button v-b-modal.note>Add Note</b-button>
    </b-button-group>
</template>

<script>
    export default {
        name: "AddServiceMenu",
        props: ['serviceType']
    }
</script>

<style scoped>

</style>