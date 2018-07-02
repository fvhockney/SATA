<template>
    <b-modal id="note" lazy title="Note" @ok="saveAddOn" ok-title="Add/Update" cancel-title="Save & Exit">
        <b-form-group label="Note" lable-for="noteInput">
            <b-form-textarea id="noteInput" v-model="note" :rows="5"></b-form-textarea>
        </b-form-group>
    </b-modal>
</template>

<script>

    export default {
        name: "AddNote",
        data() {
            return {
                note: '',
            }
        },
        methods: {
            saveAddOn() {
                this.$store.commit('Services/saveAddOn', ['notes',this.note])
                Object.assign(this.$data, this.$options.data())
            }
        }
    }
</script>

<style scoped>

</style>