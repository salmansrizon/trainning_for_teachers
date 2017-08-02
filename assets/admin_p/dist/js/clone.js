var j = 1;
var total = 0;

// function set_total(id) {
//     var index = id.slice(-1);
//     $("#total" + index + "").text(parseInt($("#qty" + index + "").val()) * parseInt($("#default_price" + index + "").val()));
//     total += parseInt($("#total" + index + "").text());
//     $("#total_so_value").text(total);
// }

function change_id(clone_var, ids) {
    $.each(ids, function(key, ids_array) {
        for (var i = 0; i < ids_array.length; i++) {
            var id_no_number = ids_array[i].slice(0, -1);
            clone_var.find("#" + ids_array[i]).attr('name', id_no_number + j);
            clone_var.find("#" + ids_array[i]).attr('id', id_no_number + j);
        }
    });
    return clone_var;
}

function reset_param(clone_var, ids) {
    $.each(ids, function(key, ids_array_val) {
        for (var i = 0; i < ids_array_val.length; i++) {
            clone_var.find("#" + ids_array_val[i] + "").attr("value", "");
           // clone_var.find("#" + ids_array_val[i] + "").attr("text", "");
        }
    });
    $.each(ids['txt_ids'], function(key, ids_array_txt) {
//        for (var i = 0; i < ids_array_txt.length; i++) {
            clone_var.find("#" + ids_array_txt + "").attr("text", "");
//        }
    });
    return clone_var;
}

function clone_res(id_to_clone, td_array) {
    var new_row = $('#' + id_to_clone + '').clone();
    new_row = reset_param(new_row,td_array);
    //alert('in');
    new_row = change_id(new_row, td_array);
    
    j++;
    return new_row;
}

