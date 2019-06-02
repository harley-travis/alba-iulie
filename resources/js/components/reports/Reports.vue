<template>
    <div class="">

		<p>Select a report to run</p>

		<div class="form-group">
			<select class="custom-select custom-select-lg mb-3" v-model="selected">
				<option disabled value="">Please select one</option>
				<option>Time To Fill Job</option>
				<option>Job Visits</option>
			</select>
		</div>
		<h2 class="text-success">{{ selected }}</h2>

		<timetofilljob-component v-if="selected === 'Time To Fill Job'" :company="company"></timetofilljob-component>
		<pagevisits-component v-if="selected === 'Job Visits'" :company="company"></pagevisits-component>

    </div>
</template>

<style scoped>
.custom-select {
    -webkit-appearance: menulist-button !important;
}
</style> 

<script>
    export default {

	data: function() {
		return {
			selected: ''
		}
	},
	props: ['company'],
	created() {
	},
	watch: {
	},
	methods: {
	}
}
</script>
