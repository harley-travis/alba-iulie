var WJ = {
    Init: function() {
    },
    Widget: { 
        GetJobs: function() {
			var company_id = 1;
            $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
              });
            $.ajax({
                url: 'http://localhost:8000/api/company/'+company_id,
                dataType: "json",
                crossDomain: true,
                success: function(data) {
                    
                    console.log(data);

                    $('#wj').html('<table id="wj-table" class="table table-hover"><tr><th scope="col">Position</th><th scope="col">Department</th><th scope="col">Location</th><th scope="col"></th></tr>');
                        
                    for(var i = 0; i < data.length; i++) {
                        var job = data[i];
                        var html = "<tr><td>"+job.title+"</td><td>"+job.department+"</td><td>"+job.location+"</td><td><a href='http://localhost:8000/postings/company/"+job.company_id+"/job/"+job.id+"' class='btn btn-success btn-sm' target='_blank'>View Job</a></td></tr>"
                        $("#wj-table").find('tbody').append(html);
                    }
                },
                error: function() {
                    console.log('there was an error retriving the data from the API');
                }
            });
        }
    }
}

$(document).ready(function(){
    WJ.Widget.GetJobs();
});

/**
 * make the html return custom classes, where advanced devs can target all the elements in HTML and customize it! 
 */