<template>
    <b-modal :id="id" lazy title="Note" @ok="saveAddOn" ok-title="Add/Update" cancel-title="Save & Exit">
        <b-form-group label="Note" lable-for="noteInput">
            <b-form-textarea id="noteInput" v-model="note.note" :rows="5"></b-form-textarea>
        </b-form-group>
    </b-modal>
</template>

<script>
import uuid from 'uuid/v1';

    export default {
        name: "AddNote",
        props: {
          id: String,
          passNote: {required: false}
        },
        data() {
            return {
                note:{
                    localId: uuid(),
                    note: ''
                }
            }
        },
        watch: {
          passNote: function () {
              this.note = this.passNote
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