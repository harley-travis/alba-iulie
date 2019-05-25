<template>
    <div class="">

			<p>This report shows you the page visits for each active job</p>

			<section>
				<table class="table table-borderless table-hover">
					<thead>
						<tr>
							<th scope="col">ID</th>
							<th scope="col">Position</th>
							<th scope="col">Page Visits</th>
							<th scope="col">Date Created</th>
						</tr>
					</thead>
					<tbody>

						<tr v-for="visit in visits">
							<td>{{visit.id}}</td>
							<td>{{visit.title}}</td>
							<td>{{visit.visits}}</td>
							<td>{{visit.created_at}}</td>
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
				visits: [],
			}
		},
		created() {
			this.getPageVisits()
		},
		props: ['company'],
		methods: {
			getPageVisits(){
				window.axios.get('/api/reports/jobVisits/'+this.company).then(({ data }) => {
					 this.visits = data
				});
			},
		}
	}
</script>
