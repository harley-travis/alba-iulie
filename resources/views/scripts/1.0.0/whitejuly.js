var WJ = {
    Init: function() {
    },
    Widget: { 
        GetJobs: function() {
			// figure out how to put in this company_id dynamcially 
			var company_id = 1;
            $.ajax({
                url: 'http://localhost:8000/api/company/'+company_id,
                dataType: "json",
                crossDomain: true,
                success: function(data) {

                    $('#wj').html('<table id="wj-table" class="table table-hover"><tr><th scope="col">Position</th><th scope="col">Department</th><th scope="col">Location</th><th scope="col"></th></tr>');
                        
                    for(var i = 0; i < data.length; i++) {
                        var job = data[i];
                        var html = "<tr><td>"+job.title+"</td><td>"+job.department+"</td><td>"+job.location+"</td><td><a href='http://localhost:8000/postings/view/"+company_id+"/"+job.id+"' class='btn btn-success btn-sm' target='_blank'>View Job</a></td></tr>"
                        $("#wj-table").find('tbody').append(html);
                    }
                },
                error: function() {
                    console.log('nope');
                }
            });
        },
    }
}

$(document).ready(function(){
    WJ.Widget.GetJobs();
});
