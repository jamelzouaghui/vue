import Vue from 'vue';
import App from './components/app.vue';
import Home from './components/home.vue';

global.axios = require('axios');


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
