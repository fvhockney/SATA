import Vue from 'vue';
import Vuex from 'vuex';
import Profile from './modules/Profile';
import Services from './modules/Services';
import Contacts from './modules/Contacts';

Vue.use(Vuex);

export default new Vuex.Store({
    modules: {
        Profile,
        Services,
        Contacts,
    },
});