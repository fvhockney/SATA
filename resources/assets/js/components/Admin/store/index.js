import Vue from 'vue';
import Vuex from 'vuex';
import Profile from './modules/Profile';
import Services from './modules/Services';

Vue.use(Vuex);

export default new Vuex.Store({
    modules: {
        Profile,
        Services,
    },
});