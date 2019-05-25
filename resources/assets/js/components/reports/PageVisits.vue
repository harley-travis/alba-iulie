<template>
    <div class="">

		<!-- JOB VISITS -->
		<section id="job-visits">
			<table class="table table-borderless table-hover">
				<thead>
					<tr>
						<th scope="col">ID</th>
						<th scope="col">Position</th>
						<th scope="col">Page Visits</th>
						<th scope="col">Date Created</th>
						<th scope="col">Date Filled</th>
					</tr>
				</thead>
				<tbody>

					<tr v-for="visit in visits">
						<td>{{visit.id}}</td>
						<td>{{visit.title}}</td>
						<td>{{visit.visits}}</td>
						<td>{{visit.created_at}}</td>
						<td>{{visit.date_filled}}</td>
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
			this.getPageVisits()
		},
		props: ['company'],
		methods: {
			getPageVisits(){
				window.axios.get('/api/reports/jobVisits/'+this.company).then(({ data }) => {
					 console.log(data, 'get the data')
					 this.visits = data
				});
			},
		}
	}
</script>
