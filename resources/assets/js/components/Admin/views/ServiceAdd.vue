<template>
    <div>
        <service-basic-info></service-basic-info>
        <add-service-menu v-show="service.type !== null" :serviceType="service.type"></add-service-menu>
        <service-add-status v-show="service.type !== null"></service-add-status>
        <b-form-group>
            <b-button @click="onSubmit" variant="primary">Create</b-button>
        </b-form-group>

        <add-contact></add-contact>
        <add-room></add-room>
    </div>
</template>

<script>
    import {mapState} from 'vuex';
    import AddContact from '../Comps/AddContact';
    import AddRoom from '../Comps/AddRoom';
    import Services from '../store/modules/Services';
    import ServiceBasicInfo from '../Comps/ServiceBasicInfo';
    import AddServiceMenu from '../Comps/AddServiceMenu';
    import ServiceAddStatus from '../Comps/ServiceAddStatus';

    export default {
        name: "ServiceAdd",
        components: {AddContact, ServiceBasicInfo, AddServiceMenu, ServiceAddStatus, AddRoom},
        data() {
            return {}
        },

        computed: {
            ...mapState('Services', {
                service: 'service'
    })
        },

        methods: {
            showComp(comp) {
                this.visComps[comp] = true
            },
            onSubmit(evt) {
                evt.preventDefault()
                axios.post('/admin/' + this.form.service.type, this.form)
                    .then(response => {
                        console.log(response)
                    })
            }
        }
    }
</script>

<style scoped>

</style>
