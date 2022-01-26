/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('admin-lte');

window.Vue = require('vue').default;
import VueRouter from 'vue-router'

import moment from 'moment';

Vue.filter('formatDate', function(value) {
    if (value) {
        return moment(String(value)).startOf('hour').fromNow();
        
    }
});

Vue.use(VueRouter)

let routes = [
    { path: '/', component: require('./components/admin/Dashboard.vue').default },
    { path: '/details', component: require('./components/admin/Dashboard.vue').default },
    { path: '/profile', component: require('./components/admin/Profile.vue').default },
    { path: '/donations', component: require('./components/admin/Donations.vue').default },
    
    { path: '/users', component: require('./components/admin/users/Show.vue').default },
    { path: '/users/create', component: require('./components/admin/users/Create.vue').default },
    { path: '/users/:id', component: require('./components/admin/users/Create.vue').default },
    { name: 'UpdateUser', path: '/users/:id', component: require('./components/admin/users/Edit.vue').default },
    
    { name: 'Show', path: '/posts', component: require('./components/admin/posts/Show.vue').default },
    { name: 'Create', path: '/posts/create', component: require('./components/admin/posts/Create.vue').default },
    { name: 'CreatePost', path: '/posts/:id', component: require('./components/admin/posts/Create.vue').default },
    { name: 'UpdatePost', path: '/posts/:id', component: require('./components/admin/posts/Edit.vue').default },

    { name: 'Show', path: '/Photos', component: require('./components/admin/Photos/Show.vue').default },
    { name: 'Create', path: '/Photos/create', component: require('./components/admin/Photos/Create.vue').default },
    { name: 'CreatePhotos', path: '/Photos/:id', component: require('./components/admin/Photos/Create.vue').default },
    { name: 'UpdatePhotos', path: '/Photos/:id', component: require('./components/admin/Photos/Edit.vue').default },

    { name: 'Show', path: '/contact', component: require('./components/admin/contacts/Show.vue').default },
    { name: 'Create', path: '/contact/create', component: require('./components/admin/contacts/Create.vue').default },
    { name: 'Createcontact', path: '/contact/:id', component: require('./components/admin/contacts/Create.vue').default },
    { name: 'Updatecontact', path: '/contact/:id', component: require('./components/admin/contacts/Edit.vue').default },

    { name: 'Show', path: '/comments', component: require('./components/admin/comments/Show.vue').default },

    { name: 'settings', path: '/settings', component: require('./components/admin/settings.vue').default },
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
