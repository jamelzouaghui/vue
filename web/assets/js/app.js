import Vue from 'vue';
import App from './components/app.vue';
import Home from './components/home.vue';

global.jQuery = require('jquery');
global.axios = require('axios');
require('bootstrap-sass');


var app = new Vue({
    el: '#app',
    components: {
        'hello': App,
        'home': Home

    },
    delimiters: ['${', '}'],
    data: {
        message: 'hello bonjour !'
    }

})
