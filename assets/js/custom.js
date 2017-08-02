$('.timeline-panel').click(function() {
    $('.timeline-body', this).toggle(); // p00f
});

//reg //
$(function(){
    $('.btn-circle').on('click',function(){
        $('.btn-circle.btn-info').removeClass('btn-info').addClass('btn-default');
        $(this).addClass('btn-info').removeClass('btn-default').blur();
    });

    $('.next-step, .prev-step').on('click', function (e){
        var $activeTab = $('.tab-pane.active');

        $('.btn-circle.btn-info').removeClass('btn-info').addClass('btn-default');

        if ( $(e.target).hasClass('next-step') )
        {
            var nextTab = $activeTab.next('.tab-pane').attr('id');
            $('[href="#'+ nextTab +'"]').addClass('btn-info').removeClass('btn-default');
            $('[href="#'+ nextTab +'"]').tab('show');
        }
        else
        {
            var prevTab = $activeTab.prev('.tab-pane').attr('id');
            $('[href="#'+ prevTab +'"]').addClass('btn-info').removeClass('btn-default');
            $('[href="#'+ prevTab +'"]').tab('show');
        }
    });
});
//reg //

$(document).ready(function() {
    $('#datePicker')
        .datepicker({
        format: 'mm/dd/yyyy'
    })
        .on('changeDate', function(e) {
        // Revalidate the date field
        $('#eventForm').formValidation('revalidateField', 'date');
    });

    //    $('#eventForm').formValidation({
    //        framework: 'bootstrap',
    //        icon: {
    //            valid: 'glyphicon glyphicon-ok',
    //            invalid: 'glyphicon glyphicon-remove',
    //            validating: 'glyphicon glyphicon-refresh'
    //        },
    //        fields: {
    //            name: {
    //                validators: {
    //                    notEmpty: {
    //                        message: 'The name is required'
    //                    }
    //                }
    //            },
    //            date: {
    //                validators: {
    //                    notEmpty: {
    //                        message: 'The date is required'
    //                    },
    //                    date: {
    //                        format: 'MM/DD/YYYY',
    //                        message: 'The date is not a valid'
    //                    }
    //                }
    //            }
    //        }
    //    });


    $( function() {
        $( "#datepicker1" ).datepicker({
            dateFormat: 'yy'
        });
    } );

    $( function() {
        $( "#datepicker2" ).datepicker({ dateFormat: 'yy' });
    } );

    $( function() {
        $( "#datepicker3" ).datepicker({ dateFormat: 'yy' });
    } );
});


//log in 



$(window, document, undefined).ready(function() {

    $('input').blur(function() {
        var $this = $(this);
        if ($this.val())
            $this.addClass('used');
        else
            $this.removeClass('used');
    });

    var $ripples = $('.ripples');

    $ripples.on('click.Ripples', function(e) {

        var $this = $(this);
        var $offset = $this.parent().offset();
        var $circle = $this.find('.ripplesCircle');

        var x = e.pageX - $offset.left;
        var y = e.pageY - $offset.top;

        $circle.css({
            top: y + 'px',
            left: x + 'px'
        });

        $this.addClass('is-active');

    });

    $ripples.on('animationend webkitAnimationEnd mozAnimationEnd oanimationend MSAnimationEnd', function(e) {
        $(this).removeClass('is-active');
    });

});



//file upload show

//upload one

document.getElementById('upload').onchange = uploadOnChange;
    
function uploadOnChange() {
    var filename = this.value;
    var lastIndex = filename.lastIndexOf("\\");
    if (lastIndex >= 0) {
        filename = filename.substring(lastIndex + 1);
    }
    document.getElementById('list').value = filename;
}

//upload two

document.getElementById('up').onchange = upOnChange;
    
function upOnChange() {
    var filena = this.value;
    var lastIn = filena.lastIndexOf("\\");
    if (lastIn >= 0) {
        filena = filena.substring(lastIn + 1);
    }
    document.getElementById('li').value = filena;
}
