
require('./bootstrap');

Vue.config.debug = true;

Vue.component('list-note', require('./components/note/All.vue'));
Vue.component('list-radio', require('./components/radio/List.vue'));
Vue.component('form-radio', require('./components/radio/Form.vue'));
Vue.component('table-radio', require('./components/dashboard/radio/Table.vue'));

const app = new Vue({   
    el: '#app'
});
