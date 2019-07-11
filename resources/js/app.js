require('./bootstrap');
require('./header');
window.Vue = require('vue');

Vue.component(
    'ideas-component',
    require('./components/IdeasComponent.vue').default
);
Vue.component(
	'participants-section',
	require('./components/ParticipantsSection.vue').default
);
Vue.component(
	'participants-component',
	require('./components/ParticipantsComponent.vue').default
);

const app = new Vue({
    el: '#app',
    components: ''
});