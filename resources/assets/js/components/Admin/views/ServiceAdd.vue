<template>
    <div>
        <service-basic-info></service-basic-info>
        <add-service-menu v-show="service.type !== null" :serviceType="service.type"></add-service-menu>
        <service-add-status v-show="service.type !== null"></service-add-status>
        <b-form-group>
            <b-button @click="sendService(contacts)" variant="primary">Create</b-button>
        </b-form-group>

        <add-contact id="AddContactModal"></add-contact>
        <add-room id="AddRoomModal"></add-room>
        <add-dish id="AddDishModal"></add-dish>
        <add-fare id="AddFareModal"></add-fare>
        <add-note id="AddNoteModal"></add-note>
        <error :errorPresent="errorPresent" :error="error" @dismissed="clearError"></error>
        <vue-progress :progressShow="sendingStatus"></vue-progress>
        <create-confirm @hidden="processProofService" :message="proofService" :created="isCreated"></create-confirm>


    </div>
</template>

<script>
    import {mapState, mapActions, mapMutations} from 'vuex';
    import AddContact from '../Comps/AddContact';
    import AddRoom from '../Comps/AddRoom';
    import AddDish from '../Comps/AddDish';
    import AddFare from '../Comps/AddFare';
    import AddNote from '../Comps/AddNote';
    import Services from '../store/modules/Services';
    import ServiceBasicInfo from '../Comps/ServiceBasicInfo';
    import AddServiceMenu from '../Comps/AddServiceMenu';
    import ServiceAddStatus from '../Comps/ServiceAddStatus';
    import Error from '../Comps/Error';
    import VueProgress from '../Comps/Progress';
    import CreateConfirm from '../Comps/CreateConfirm';

    export default {
        name: "ServiceAdd",
        components: {
            AddContact,
            ServiceBasicInfo,
            AddServiceMenu,
            ServiceAddStatus,
            AddRoom,
            AddDish,
            AddFare,
            AddNote,
            Error,
            VueProgress,
            CreateConfirm,
        },
        data() {
            return {}
        },

        computed: {
            ...mapState('Services', {
                service: 'service',
                error: 'error',
                errorPresent: 'errorPresent',
                sendingStatus: 'sendingStatus',
                isCreated: 'created',
                proofService: 'proofService'
            }),
            ...mapState('Contacts', {
                contacts: 'newContacts',
            })
        },

        methods: {
            processProofService(){
                this.resetProofService()
            },
            clearError(){
              this.clearError()
            },
            ...mapActions('Services', {
               sendService: 'sendService'
            }),
            ...mapMutations('Services', {
                resetProofService: 'resetProofService',
                clearError: 'clearError'
            }),
        }
    }
</script>

<style scoped>

</style>
