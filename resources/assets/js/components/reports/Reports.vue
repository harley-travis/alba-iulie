<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">

						<p>Select a report to run</p>

						<form action="" method="post" class="form-inline">
							<select name="action" class="form-control">		
								<option value="">-- Select Report --</option>
								<option value="0">Time To Fill Job</option>
								<option value="1">Job Visits</option>
							</select>
							
							<input type="submit" value="Run Report" class="btn btn-primary">
						</form>


                        Reports dude!
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
