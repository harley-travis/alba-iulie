<template>
    <div class="">

			<p>Select a report to run</p>

			<form action="" method="post" class="form-inline">
				<select name="action" class="form-control">		
					<option value="">-- Select Report --</option>
					<option value="0">Time To Fill Job</option>
					<option value="1">Job Visits</option>
				</select>
				
				<input type="submit" value="Run Report" class="btn btn-primary">
			</form>

			<pagevisits-component :company="company"></pagevisits-component>

    </div>
</template>

<script>
    export default {

	data: function() {
		return {

		}
	},
	props: ['company'],
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
