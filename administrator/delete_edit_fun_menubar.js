$(document).ready(function () {
    $("#form_register").submit(function (e) {
        var section_type = $("#section_type").val();
        var field_type = $("#field_type").val();
        var field_value = $("#field_value").val();
        var create_date = $("#create_date").val();

        $.ajax({
            url: 'insert_form_fun.php',
            data: {
                section_type: section_type,
                field_value: field_value,
                field_type: field_type,
                create_date: create_date
            },
            type: 'POST',
            success: function (response) {
                $("#response").html(response);
                resetForm();
            }
        });
        e.preventDefault();
    });

    $("#form_update").submit(function (e) {
        var section_type = $("#section_type").val();
        var field_type = $("#field_type").val();
        var field_value = $("#field_value").val();
        var create_date = $("#create_date").val();
        var id = $("#id").val();

        $.ajax({
            url: 'edit_fun_menubar.php',
            data: {
                section_type: section_type,
                field_value: field_value,
                field_type: field_type,
                create_date: create_date,
                id: id
            },
            type: 'POST',
            success: function (response) {
                $("#response").html(response);
                setTimeout(function(){
                    window.location.href = 'about.php';
                },3000)
            }
        });
        e.preventDefault();
    });

    function resetForm() {
        $(".forminputs").val('');
    }
});

function delete_record(id){
    
    $.ajax({
        url: "delete_fun_genneral.php?id="+id,
        type: "GET",
        success: function(response){
            $("#response").html(response);
            $("#record_"+id).remove();
        }
    });
    return false;
}
