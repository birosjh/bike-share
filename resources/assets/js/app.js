
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
var $ = require('jquery');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    data: {
        code: "",
        notify: false,
        message: ""
    },
    created: function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    },
    methods: {
        onSubmit: function(transaction) {
            var url = "/bikes/" + this.code;
            $.ajax({
               url: url,
               type: 'PUT',
               data: { transaction: transaction },
               success: function(response) {
                 console.log(response.message);
                 app.notify = true;
                 app.message = response.message;
               }
            });
        }
    }
});
