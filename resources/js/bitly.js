require('./bootstrap');

window.Vue = require('vue');

Vue.component('bitly-url-shortener', require('./components/BitylShortener.vue').default);

const app = new Vue({
    el: '#app',
});
