/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('admin-lte');

window.Vue = require('vue').default;
import VueRouter from 'vue-router'

Vue.use(VueRouter)

let routes = [
    { path: '/', component: require('./components/Dashboard.vue').default },
    { path: '/users', component: require('./components/users/ShowUsers.vue').default },
    { path: '/users/create', component: require('./components/users/CreateUser.vue').default },
    { path: '/users/:id', component: require('./components/users/CreateUser.vue').default },
    { name: 'UpdateUser', path: '/users/:id', component: require('./components/users/EditUser.vue').default },
    { path: '/profile', component: require('./components/Profile.vue').default }
  ]

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);

const router = new VueRouter({
    // mode: 'history',
    routes // short for `routes: routes`
  })


const app = new Vue({
    el: '#app',
    router
});
