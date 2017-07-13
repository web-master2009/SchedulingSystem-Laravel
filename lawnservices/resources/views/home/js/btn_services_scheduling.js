$(document).ready(function() {
    //btn-servce scheduling in btn - add new service?   
    $('#btn_clear_fields').click(function() {
        $('#txt_service').val('');
        $('#txt_service_code').val('');
        $("#select_gl_account option").eq(0).prop("selected", true);
    });
    var sel_radio = function() {

        $('#txt_service').val($(this).parents('tr').find('td').eq(3).text());
        $(this).prop("selected", true);
        $('#txt_service_code').val($(this).parents('tr').find('td').eq(4).text());
        if ($(this).parents('tr').find('td').eq(6).text() == 'Default') $('input[name=status]').eq(1).prop('checked', true);
    };
    $('.sel_radio').click(sel_radio);

    $('#btn_add_as_new').click(function() {
        var data = {
            service: $('#txt_service').val(),
            serviceCode: $('#txt_service_code').val(),
            defaultGLAccount: $("#select_gl_account option:selected").text(),
            status: $('input[name=status]:checked').val()
        }
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: "services",
            method: "POST",
            data: data,
            dataType: "json",
            success: function(resp) {
                if (resp.status == "success")
                    alert('Data saved successfully');
                $('#table_services tbody').html('');
                var html = '';

                $.each(resp.services, function(i, service) {
                    var st = '';
                    if (service.status == '1') st = 'Rgular'
                    else st = 'Default';
                    html += "<tr><td><input name='sel_radio' value='" + service.id + "' class='sel_radio' type='radio'><td><td>" + (i + 1) + "</td>" +
                        "<td>" + service.service + "</td>" +
                        "<td>" + service.serviceCode + "</td>" +
                        "<td>" + service.defaultGLAccount + "</td>" +
                        "<td>" + st + "</td></tr>";
                })
                $('#table_services tbody').html(html);
                $('.sel_radio').click(sel_radio);
            },
            error: function(xhr, status, errorThrown) {
                alert('Please insert data');
            }
        });
    });

    $('#btn_service_delete').click(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: "services/destroy",
            method: "DELETE",
            dataType: "json",
            data: { id: $('input[name=sel_radio]:checked').val() },
            success: function(resp) {
                if (resp.status == "success")
                    alert('Data deleted successfully');
                $('#table_services tbody').html('');
                var html = '';

                $.each(resp.services, function(i, service) {

                    var st = '';
                    if (service.status == '1') st = 'Rgular'
                    else st = 'Default';
                    html += "<tr><td><input name='sel_radio' value='" + service.id + "' class='sel_radio' type='radio'><td><td>" + (i + 1) + "</td>" +
                        "<td>" + service.service + "</td>" +
                        "<td>" + service.serviceCode + "</td>" +
                        "<td>" + service.defaultGLAccount + "</td>" +
                        "<td>" + st + "</td></tr>";
                })
                $('#table_services tbody').html(html);
                $('.sel_radio').click(sel_radio);
            },
            error: function(xhr, status, errorThrown) {
                alert('Connection failure');
            }
        });
    });

    $('#btn_service_update').click(function() {
        var data = {
            service: $('#txt_service').val(),
            serviceCode: $('#txt_service_code').val(),
            defaultGLAccount: $("#select_gl_account option:selected").text(),
            status: $('input[name=status]:checked').val(),
            id: $('input[name=sel_radio]:checked').val()
        }
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: "services/update",
            method: "PUT",
            data: data,
            dataType: "json",
            success: function(resp) {
                if (resp.status == "success")
                    alert('Data updated successfully');
                $('#table_services tbody').html('');
                var html = '';

                $.each(resp.services, function(i, service) {

                    var st = '';
                    if (service.status == '1') st = 'Rgular'
                    else st = 'Default';
                    html += "<tr><td><input name='sel_radio' value='" + service.id + "' class='sel_radio' type='radio'><td><td>" + (i + 1) + "</td>" +
                        "<td>" + service.service + "</td>" +
                        "<td>" + service.serviceCode + "</td>" +
                        "<td>" + service.defaultGLAccount + "</td>" +
                        "<td>" + st + "</td></tr>";
                })
                $('#table_services tbody').html(html);
                $('.sel_radio').click(sel_radio);
            },
            error: function(xhr, status, errorThrown) {
                alert('connection failure');
            }
        });
    });
    $('.datepicker-only-init').datetimepicker({

        widgetPositioning: {
            horizontal: 'left'
        },
        icons: {
            time: "fa fa-clock-o",
            date: "fa fa-calendar",
            up: "fa fa-arrow-up",
            down: "fa fa-arrow-down",
            previous: 'fa fa-arrow-left',
            next: 'fa fa-arrow-right'
        },
        format: 'YYYY-MM-DD'
    });


    //btn-servce scheduling in btn-Create Schedule based on the services shown above...
    if ($("#select_schedule_job_type option:selected").val() == '1') var times = 5;
    else var times = 1;


    $('#btn_create_schedule').click(function() {
        var data = {
            firstName: $('#txt_schedule_client_firstname').val(),
            surname: $('#txt_schedule_client_surname').val(),
            displayName: $('#txt_schedule_client_displayname').val(),
            active: $("#select_schedule_client_active option:selected").val(),
            streetNo: $('#txt_schedule_client_streetno').val(),
            street: $('#txt_schedule_client_street').val(),
            suburb: $("#select_schedule_client_suburb option:selected").val(),
            postCode: $('#txt_schedule_client_postcode').val(),
            phone1: $('#txt_schedule_client_phone1').val(),
            phone2: $('#txt_schedule_client_phone2').val(),
            email: $('#txt_schedule_client_email').val(),
            fax: $('#txt_schedule_client_fax').val(),
            serviceId: $("#select_schedule_service option:selected").val(),
            price: $('#txt_schedule_price_gst').val(),
            notes: $('#txt_schedule_job_notes').val(),
            jobtype: $("#select_schedule_job_type option:selected").val(),
            startdate: $('#txt_schedule_start_date').val(),
            frequency: $("#select_schedule_frequency option:selected").val(),
            employeeId: $("#select_schedule_employee option:selected").val(),
            times: times
        }
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: "jobs",
            method: "POST",
            data: data,
            dataType: "json",
            success: function(resp) {
                if (resp.status == "success")
                    alert('Schedule created successfully');
            },
            error: function(xhr, status, errorThrown) {
                alert('connection failure');
            }
        });
    });
});