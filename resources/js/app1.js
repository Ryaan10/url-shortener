import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)
window.Vue = require('vue');
window.axios = require('axios');
window.Bus = new Vue()

Vue.component('dashboard-component', require('./components/DashboardComponent.vue').default);
Vue.component('flash-message', require('./components/FlashMessage.vue').default);
import {routes} from './routes.js'

const router = new VueRouter({
    routes
})

const app = new Vue({
    el: '#app', 
    router
});


