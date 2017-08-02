$(document).ready(function() {

    var _url = $('#_url').val();


    $('#reg_data').DataTable( {
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url": _url + "admin/registration_data",
            "type": "POST"
        },
        "columns": [
            { "data": "id" },
            { "data": "course_id" },
            { "data": "batch_schedule_id" },
            { "data": "full_name" },
            { "data": "contact_number" },
            { "data": "email" },
            { "data": "prefession" },
            { "data": "university" },
            { "data": "uni_pass_date" },
            { "data": "college" },
            { "data": "col_pass_date" },
            { "data": "school" },
            { "data": "sch_pass_date" },
            { "data": "cv" }
        ]
    });


});