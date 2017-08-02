$(document).ready(function () {

        
    var $modal = $("#myModal");
    var $modal2 = $("#myModal2");
    var _url = $("#_url").val();


    $.ajax({
      type: 'POST',
      url: _url+'main/get_course_drop_down',
      success: function(data){
        $("#course_id").html(data);
      }
    });

    $('#course_id').on('change',function(){
        var course_id = $("#course_id option:selected").val();
        // console.log('course_id: '+ course_id);
        $.ajax({
          type: 'POST',
          url: _url+'main/get_batch_drop_down',
          data: { course_id: course_id},
          success: function(data){
            // console.log(data);
            $("#batch_schedule_id").html(data);
          }
        });
    })


    //$('#batch_schedule_id')




    //
    //    
    //      $('#submit').on('click', function(){
    // //         alert("hh");
            
    //         setTimeout(showcase,3000);
             
    //      });
    
    // var showcase = function(){
    //     $modal.modal('hide');
    //     $modal2.modal();
        
    // };


    // $("#submit").click(function (e) {
    //     e.preventDefault();
    //     $modal.modal();

    //     $.post( _url + 'main/registration', 

    //         $('#registration_form').serialize()
            
    //     ).done(function(data){

    //         // alert(data);
    //         console.log(data);
    //         //showcase();

    //         // window.location = _url;
    //         // var _url = $("#_url").val();
    //         // if ($.isNumeric(data)) {

    //         //     
    //         // }
    //         // else {
    //         //     $('#ibox_form').unblock();
    //         //     var body = $("html, body");
    //         //     body.animate({scrollTop:0}, '1000', 'swing');
    //         //     $("#emsgbody").html(data);
    //         //     $("#emsg").show("slow");
    //         // }
    //     }).fail(function(response) {
    //         console.log('Error: ' + response.responseText);
    //     });

    //     // $.ajax({
    //     //   type:'POST',
    //     //   data: $('#registration_form').serialize(),
    //     //   url: _url + 'main/registration',
    //     //   success:function (data) {
    //     //     console.log(data);
    //     //   }
    //     // });


    // });
    
    

 

});