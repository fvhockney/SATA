<template>
    <b-form-group label="Service Information">
        <b-form-group id="serviceType" lable="Service Type" lable-for="serviceTypeSelect">
            <b-form-select id="serviceTypeSelect" :options="serviceOptions" required v-model="serviceType">
                <template slot="first">
                    <option :value=null disabled>-- Please select an option --</option>
                </template>
            </b-form-select>
        </b-form-group>
        <b-form-group label="Service Name" id="serviceName" lable-for="serviceNameInput">
            <b-form-input id="serviceNameInput" type="text" required v-model="serviceName"></b-form-input>
        </b-form-group>
    </b-form-group>
</template>

<script>
    import Services from '../store/modules/Services';
    import {mapState} from 'vuex';

    export default {
        name: "ServiceBasicInfo",
        computed: {
            serviceType: {
                get() {
                    return this.$store.getters['Services/serviceType']
                },
                set(value) {
                    this.$store.commit('Services/setServiceType', value)
                }
            },
            serviceName: {
                get() {
                   return this.$store.getters['Services/serviceName']
                },
                set(value) {
                    this.$store.commit('Services/setServiceName', value)
                }
            },
            ...mapState('Services', {
                serviceOptions: 'types'
            })
        },

    }
</script>

<style scoped>

</style>