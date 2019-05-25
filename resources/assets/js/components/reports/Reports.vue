<template>
    <div class="container">

			<p>Select a report to run</p>

			<form action="" method="post" class="form-inline">
				<select name="action" class="form-control">		
					<option value="">-- Select Report --</option>
					<option value="0">Time To Fill Job</option>
					<option value="1">Job Visits</option>
				</select>
				
				<input type="submit" value="Run Report" class="btn btn-primary">
			</form>

			<pagevisits-component></pagevisits-component>
<!--
			1) select the from inside the form box
			2) pull in the component with that report
			2)a) how to import a component if something is selected


		-->
		
    </div>
</template>

<script>
    export default {

	data: function() {
		return {
			// id: this.$route.params.id,
			// streams: [],
			// live: [],
			// loading: true,
			// img: {
			// 	gif: require('../assets/img/loader.gif')
			// }
		}
	},
	created() {
		// this.getLiveStreams()
	},
	watch: {
		// in order to use the same componenet with different data points
		// we need to create a watch to see if there is a change in the code
		// the id is referenced in the data()
		// '$route' (to, from) {
		// this.id = to.params.id
		// this.getLiveStreams()
		// }
	},
	methods: {
		getPageVisits(){
		
		},
		getTimeToFillJobsReport() {

		},
	}
}
</script>
