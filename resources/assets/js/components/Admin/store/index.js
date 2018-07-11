import Vue from 'vue';
import Vuex from 'vuex';
import Profile from './modules/Profile';
import Services from './modules/Services';
import Contacts from './modules/Contacts';
import Error from './modules/Error';

Vue.use(Vuex);

export default new Vuex.Store({
    modules: {
        Profile,
        Services,
        Contacts,
        Error,
    },
});