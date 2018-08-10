import Vue from 'vue';

const app = new Vue({
    el: '#app',
    data: {
        navIsOpen: false
    },
    methods: {
        toggleNav: function () {
            this.navIsOpen = !this.navIsOpen;
        }
    }
});