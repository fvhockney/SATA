
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import Vue from 'vue';
import VueCharts from 'vue-chartjs';
import axios from 'axios';
import { store } from './store.js';
import {weatherStore} from './weatherStore.js';


window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('weather-temps', require('./components/Chart.vue'));


const app = new Vue({
    el: '#app',
    store
});

const weather = new Vue({
  el: '#weather',
  store: weatherStore
});