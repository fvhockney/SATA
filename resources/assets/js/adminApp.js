require('./bootstrap');
const uuid = require('uuid/v1');

import Vue from 'vue';
import BootstrapVue from 'bootstrap-vue';
import router from './components/Admin/router';
import store from './components/Admin/store';
import AdminLayout from './components/Admin/views/AdminLayout';

window.Vue = require('vue');
Vue.use(BootstrapVue);

const Admin = new Vue({
    router,
    store,
    components: {AdminLayout},
    el:'#admin'
});
