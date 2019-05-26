/*!
  * WhiteJuly v1.0.0 (https://whitejuly.com)
  * Copyright 2019 White July 
  * All rights reserved
*/
var WJ = {
    Widget: { 
        GetJobs: function(c) {
            var url = 'http://localhost:8000';
            var company_id = c;
            jQuery.ajax({
                url: url+'/api/company/'+company_id,
                dataType: "json",
                crossDomain: true,
                success: function(data) {
                    if(data <= 0) {
                        jQuery("#wj-app").html('<div class="jumbotron position-relative text-center"><span class="display-4">Sorry there are no current openings</span><p class="lead mt-5">Check back soon!</p><small class="position-absolute" style="right:3%;bottom:7%">Powered by <a href="'+url+'" target="_blank">WhiteJuly.com</a></small></div>');
                    } else {
                        jQuery('#wj-app').html('<table id="wj-table" class="table table-hover position-relative"><tr><th scope="col">Position</th><th scope="col">Department</th><th scope="col">Location</th><th scope="col"></th></tr>');
                        
                        for(var i = 0; i < data.length; i++) {
                            var job = data[i];
                            var html = "<tr><td><a href='"+url+"/postings/view/"+company_id+"/"+job.id+"' target='_blank'>"+job.title+"</a></td><td>"+job.department+"</td><td>"+job.location+"</td><td><a href='"+url+"/postings/view/"+company_id+"/"+job.id+"' class='btn btn-success btn-sm' target='_blank'>View Job</a></td></tr>"
                            jQuery("#wj-table").find('tbody').append(html);
                        }

                        jQuery("#wj-app").append("<div class='mt-5 text-right'><small>Powered by <a href='"+url+"' target='_blank'>WhiteJuly.com</a></small></div>");
                    }
                },
                error: function() {
                    console.log('There was an error loading the data from White July');
                }
            });
        },
    }
}

jQuery(document).ready(function(){
    var id = document.getElementById('wj-app').className;
    var c = id.replace('wj-','');
    WJ.Widget.GetJobs(c);
});
