$(document).ready(function() {
    $('.sel_job_active_radio').click(function() {

        $('#txt_future_job_edit_date').val($(this).parents('tr').find('td').eq(2).text());
        $('#txt_future_job_description').val($(this).parents('tr').find('td').eq(3).text())
            //$('#txt_client_displayname').val($(this).parents('tr').find('td').eq(4).text()),
        $('#txt_future_notes').val($(this).parents('tr').find('td').eq(5).text());
        $.each($("#select_future_job_status option"), function(i, op) {
            if ($(op).text() == $(this).parents('tr').find('td').eq(6).text()) $(op).attr('selected', true);
        })
        $.each($("#select_future_job_edit_emplyee option"), function(i, op) {
            if ($(op).text() == $(this).parents('tr').find('#hidden_future_employeeId').val()) $(op).attr('selected', true);
        })
        var sel_client_id = $(this).parents('tr').find('td').eq(6).find('input').eq(0).val();
        $.each($("#select_future_job_client option"), function(i, op) {
            if ($(op).val() == sel_client_id) $(op).attr('selected', true);
        })
        $.each($("#select_future_received_from option"), function(i, op) {
            if ($(op).val() == sel_client_id) $(op).attr('selected', true);
        })
        $('#table_list_service tbody').find('tr').eq(0).find('td').eq(2).text($(this).parents('tr').find('td').eq(3).text());
        $('#table_list_service tbody').find('tr').eq(0).find('td').eq(3).text($(this).parents('tr').find('td').eq(4).text());
        $('#table_list_service tbody').find('tr').eq(0).find('td').eq(4).text($(this).parents('tr').find('td').eq(6).find('input').eq(2).val());
    });
})