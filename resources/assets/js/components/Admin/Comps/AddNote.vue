<template>
    <b-modal :id="id" lazy title="Note" @ok="saveAddOn" ok-title="Add/Update" cancel-title="Save & Exit">
        <b-form-group label="Note" lable-for="noteInput">
            <b-form-textarea id="noteInput" v-model="note.body" :rows="5"></b-form-textarea>
        </b-form-group>
    </b-modal>
</template>

<script>
    import uuid from 'uuid/v1';

    export default {
        name: "AddNote",
        props: {
            id: String,
            passNote: {required: false},
            editingExisting: {required: false, default: false, type: Boolean}
        },
        data() {
            return {
                note: {
                    localId: uuid(),
                    body: ''
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
                if (this.editingExisting) {
                    this.$store.dispatch('Services/saveAddOn', {'type': 'note', 'service': this.note})
                } else {
                    this.$store.commit('Services/saveAddOn', ['notes', this.note])
                    Object.assign(this.$data, this.$options.data())
                }
            }
        }
    }
</script>

<style scoped>

</style>
