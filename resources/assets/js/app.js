
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component(
	'example-component', 
	require('./components/ExampleComponent.vue')
);


// Reports
Vue.component(
	'reports-component', 
	require('./components/reports/Reports.vue')
);
Vue.component(
	'pagevisits-component', 
	require('./components/reports/PageVisits.vue')
);

// Jobs
Vue.component(
	'jobs-overview',
	require('./components/jobs/JobsOverview.vue')
);
Vue.component(
	'create-job',
	require('./components/jobs/CreateJob.vue')
);

const app = new Vue({
	el: '#app'
});
