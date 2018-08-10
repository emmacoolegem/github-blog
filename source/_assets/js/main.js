import Vue from 'vue';

import Stars from './components/Stars';

const app = new Vue({
    el: '#app',
    data: {
        navIsOpen: false
    },
    methods: {
        toggleNav: function () {
            this.navIsOpen = !this.navIsOpen;
        }
    },
    components: {
        Stars
    }
});