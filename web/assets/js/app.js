import Vue from 'vue';
import App from './components/app.vue';


var app = new Vue({
    el: '#app',
    components: {
        'hello': App

    },
    delimiters: ['${', '}'],
    data: {
        message: 'hello bonjour !'
    }

})
