require('./bootstrap');
const uuid = require('uuid/v1');

import Vue from 'vue';
import BootstrapVue from 'bootstrap-vue';
import router from './components/Admin/router';
import store from './components/Admin/store';
import AdminLayout from './components/Admin/views/AdminLayout';

window.Vue = require('vue');
Vue.use(BootstrapVue);

Vue.filter('capitalize', function (value) {
    if (!value) return ''
    value = value.toString()
    return value.charAt(0).toUpperCase() + value.slice(1)
})

const Admin = new Vue({
    router,
    store,
    components: {AdminLayout},
    el:'#admin'
});
