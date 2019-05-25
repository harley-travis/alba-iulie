<template>
    <div class="">

        <p>This report shows you how long it took to fill the position of previous jobs</p>

		<section>
			<table class="table table-borderless table-hover">
				<thead>
					<tr>
						<th scope="col">ID</th>
						<th scope="col">Position</th>
						<th scope="col">Date Posted</th>
						<th scope="col">Date Filled</th>
						<th scope="col">Time to Fill</th>
					</tr>
				</thead>
				<tbody>

					<tr v-for="time in times">
						<td>{{time.id}}</td>
						<td>{{time.title}}</td>
						<td>{{time.created_at}}</td>
						<td>{{time.date_filled}}</td>
                        <td>{{ time.created_at - time.date_filled }}</td>
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
                times: []
			}
		},
		created() {
			this.getTimeToFillJobs()
		},
		props: ['company'],
		methods: {
			getTimeToFillJobs(){
				window.axios.get('/api/reports/time-to-fill-jobs/'+this.company).then(({ data }) => {
					 this.times = data
				});
			},
		}
	}
</script>
