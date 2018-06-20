<template>
    <div>
        <h2>Hotel Information</h2>
        <template v-if="loaded">
            <b-form-group horizontal :label-cols="1" label="Name" label-for="name">
                <b-form-input id="name" plaintext v-model.trim="profile.service.name"></b-form-input>
            </b-form-group>
        </template>

        <h2>Restaurants</h2>
        <template v-if="loaded">
            <b-form-group v-for="restaurant in profile.restaurant" horizontal :key="restaurant.id" :label-cols="2"
                          :label="'Restaurant '+restaurant.id" :label-for="'restaurant_'+restaurant.id">
                <b-form-input :id="'restaurant_'+restaurant.id" plaintext v-model.trim="restaurant.name"></b-form-input>
            </b-form-group>
        </template>
    </div>
</template>

<script>
    export default {
        name: "ServiceProfile",
        props: ['id', 'type'],
        data() {
            return {
                profile: {},
                loaded: false
            }
        },

        created() {
            axios.get('/admin/' + this.type + '/' + this.id)
                .then((response) => {
                    console.log(response.data.data)
                    this.profile = response.data.data
                    this.loaded = true
                })
        }
    }
</script>

<style scoped>

</style>