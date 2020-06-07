/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import Vue from 'vue';
import VueChatScroll from 'vue-chat-scroll';
Vue.use(VueChatScroll);
import { Form, HasError, AlertError } from 'vform'
window.Form = Form;
Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)
import swal from 'sweetalert2';
window.swal = swal;
const toast = swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 3000
});
window.toast = toast;

Vue.component('message', require('./components/MessageComponent.vue')).defualt;
Vue.component('kunnectome', require('./components/kunnectomeComponent.vue')).defualt;
Vue.component('opportunity',require('./components/opportunityComponent.vue')).defualt;
Vue.component('kunnec-to-you',require('./components/kunnectoyouComponent.vue')).defualt;
Vue.component('kunnec-to-you-post',require('./components/kunnectoyou/postComponent.vue')).defualt;
Vue.component('kunnec-to-you-my-services',require('./components/kunnectoyou/myservicesComponent.vue')).defualt;

const app = new Vue({
    el: '#app',

});




