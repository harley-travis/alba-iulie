<template>
    <div class="container">
    
		<!-- JOB VISITS -->
		<section id="job-visits">
			<table class="table table-borderless">
				<thead>
					<tr>
						<th scope="col">ID</th>
						<th scope="col">Position</th>
						<th scope="col">Visits</th>
						<th scope="col">Date Created</th>
						<th scope="col">Date Filled</th>
					</tr>
				</thead>
				<tbody>

					<tr>
						<th scope="row">1</th>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>

				</tbody>
			</table>
		</section>

    </div>
</template>

<script>
  export default {

		data: function() {
			return {
				id: [],
				position: [],
				visits: [],
				date_created: [],
				date_filled: [],
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
		}
	}
</script>
