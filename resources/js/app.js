
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('toaster', require('./components/Shared/Toaster.vue').default);
Vue.component('create-post', require('./components/Admin/CreatePost.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    data: function() {
        return {
            success: {
                message: null,
                popped: false
            },
            error: {
                message: null,
                popped: false
            },
            timeOOut: null
        }
    },
    methods: {
        popSuccess(message, callback) {
            clearTimeout(this.timeOut);
            this.success.popped = true;
            this.success.message = message;

            this.timeOut = setTimeout(() => {
                this.clearSuccess();
                callback && callback();
            }, 3000);
        },
        popError(message) {
            clearTimeout(this.timeOut);
            this.error.popped = true;
            this.error.message = message;

            this.timeOut = setTimeout(() => {
                this.clearError();
            }, 3000);
        },
        clearSuccess() {
            this.success.popped = false;
            this.success.message = null;
        }
        ,
        clearError() {
            this.error.popped = false;
            this.error.message = null;
        }
    }
});
