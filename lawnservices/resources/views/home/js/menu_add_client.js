$(document).ready(function() {
    //calendar
    $('#btn_client_clear_fields').click(function() {
        $('#txt_client_firstname').val('')
        $('#txt_client_surname').val('')
        $('#txt_client_displayname').val(''),
            $('#txt_client_streetno').val(''),
            $('#txt_client_street').val(''),
            $('#txt_client_suburb').val(''),
            $('#txt_client_postcode').val(''),
            $('#txt_client_phone1').val(''),
            $('#txt_client_phone2').val(''),
            $('#txt_client_email').val(''),
            $('#txt_client_fax').val('')
    });

    $('#btn_client_add_as_new').click(function() {
        var data = {
            firstName: $('#txt_client_firstname').val(),
            surname: $('#txt_client_surname').val(),
            displayName: $('#txt_client_displayname').val(),
            active: $("#select_client_active option:selected").val(),
            streetNo: $('#txt_client_streetno').val(),
            street: $('#txt_client_street').val(),
            suburb: $('#txt_client_suburb').val(),
            postCode: $('#txt_client_postcode').val(),
            phone1: $('#txt_client_phone1').val(),
            phone2: $('#txt_client_phone2').val(),
            email: $('#txt_client_email').val(),
            fax: $('#txt_client_fax').val(),
        }
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: "clients",
            method: "POST",
            data: data,
            dataType: "json",
            success: function(resp) {
                if (resp.status == "success")
                    alert('Data saved successfully');
                $('#table_clients tbody').html('');
                var html = '';

                $.each(resp.clients, function(i, client) {
                    var st = '';
                    if (client.active == '1') st = 'Active'
                    else st = 'Inactive';
                    html += "<tr><td><input class='sel_client_active_radio' name='sel_client_active_radio' value='" + client.id + "' type='radio'></td>" +
                        "<td>" + (i + 1) + "</td>" +
                        "<td>" + st + "</td>" +
                        "<td>" + client.firstName + "</td>" +
                        "<td>" + client.surname + "</td>" +
                        "<td>" + client.displayName + "</td>" +
                        "<td>" + client.streetNo + "</td>" +
                        "<td>" + client.street + "</td>" +
                        "<td>" + client.suburb + "</td>" +
                        "<td>" + client.postCode + "</td>" +
                        "<td>" + client.phone1 + "</td>" +
                        "<td>" + client.phone2 + "</td>" +
                        "<td>" + client.email + "</td>" +
                        "<td>" + client.fax + "</td>";
                })
                $('#table_clients tbody').html(html);
            },
            error: function(xhr, status, errorThrown) {
                alert('Please insert data');
            }
        });
    });


    $('.sel_client_active_radio').click(function() {
        if ($(this).parents('tr').find('td').eq(2).text() != 'Active') $("#select_client_active option").eq(1).attr('selected', true);
        $('#txt_client_firstname').val($(this).parents('tr').find('td').eq(3).text());
        $('#txt_client_surname').val($(this).parents('tr').find('td').eq(4).text())
        $('#txt_client_displayname').val($(this).parents('tr').find('td').eq(5).text()),
            $('#txt_client_streetno').val($(this).parents('tr').find('td').eq(6).text()),
            $('#txt_client_street').val($(this).parents('tr').find('td').eq(7).text()),
            $('#txt_client_suburb').val($(this).parents('tr').find('td').eq(8).text()),
            $('#txt_client_postcode').val($(this).parents('tr').find('td').eq(9).text()),
            $('#txt_client_phone1').val($(this).parents('tr').find('td').eq(10).text()),
            $('#txt_client_phone2').val($(this).parents('tr').find('td').eq(11).text()),
            $('#txt_client_email').val($(this).parents('tr').find('td').eq(12).text()),
            $('#txt_client_fax').val($(this).parents('tr').find('td').eq(13).text())
    });

    $('#btn_client_delete').click(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: "clients/destroy",
            method: "DELETE",
            dataType: "json",
            data: { id: $('input[name=sel_client_active_radio]:checked').val() },
            success: function(resp) {
                if (resp.status == "success")
                    alert('Data deleted successfully');
                $('#table_clients tbody').html('');
                var html = '';
                $.each(resp.clients, function(i, client) {
                    var st = '';
                    if (client.active == '1') st = 'Active'
                    else st = 'Inactive';
                    html += "<tr><td><input class='sel_client_active_radio' name='sel_client_active_radio' value='" + client.id + "' type='radio'></td>" +
                        "<td>" + (i + 1) + "</td>" +
                        "<td>" + st + "</td>" +
                        "<td>" + client.firstName + "</td>" +
                        "<td>" + client.surname + "</td>" +
                        "<td>" + client.displayName + "</td>" +
                        "<td>" + client.streetNo + "</td>" +
                        "<td>" + client.street + "</td>" +
                        "<td>" + client.suburb + "</td>" +
                        "<td>" + client.postCode + "</td>" +
                        "<td>" + client.phone1 + "</td>" +
                        "<td>" + client.phone2 + "</td>" +
                        "<td>" + client.email + "</td>" +
                        "<td>" + client.fax + "</td>";
                })
                $('#table_clients tbody').html(html);
            },
            error: function(xhr, status, errorThrown) {
                alert('Connection failure');
            }
        });
    });

    $('#btn_client_update').click(function() {
        var data = {
            id: $('input[name=sel_client_active_radio]:checked').val(),
            firstName: $('#txt_client_firstname').val(),
            surname: $('#txt_client_surname').val(),
            displayName: $('#txt_client_displayname').val(),
            active: $("#select_client_active option:selected").val(),
            streetNo: $('#txt_client_streetno').val(),
            street: $('#txt_client_street').val(),
            suburb: $('#txt_client_suburb').val(),
            postCode: $('#txt_client_postcode').val(),
            phone1: $('#txt_client_phone1').val(),
            phone2: $('#txt_client_phone2').val(),
            email: $('#txt_client_email').val(),
            fax: $('#txt_client_fax').val(),
        }
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: "clients/update",
            method: "PUT",
            data: data,
            dataType: "json",
            success: function(resp) {
                if (resp.status == "success")
                    alert('Data updated successfully');
                $('#table_clients tbody').html('');
                var html = '';
                $.each(resp.clients, function(i, client) {
                    var st = '';
                    if (client.active == '1') st = 'Active'
                    else st = 'Inactive';
                    html += "<tr><td><input class='sel_client_active_radio' name='sel_client_active_radio' value='" + client.id + "' type='radio'></td>" +
                        "<td>" + (i + 1) + "</td>" +
                        "<td>" + st + "</td>" +
                        "<td>" + client.firstName + "</td>" +
                        "<td>" + client.surname + "</td>" +
                        "<td>" + client.displayName + "</td>" +
                        "<td>" + client.streetNo + "</td>" +
                        "<td>" + client.street + "</td>" +
                        "<td>" + client.suburb + "</td>" +
                        "<td>" + client.postCode + "</td>" +
                        "<td>" + client.phone1 + "</td>" +
                        "<td>" + client.phone2 + "</td>" +
                        "<td>" + client.email + "</td>" +
                        "<td>" + client.fax + "</td>";
                })
                $('#table_clients tbody').html(html);
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
        format: 'LL'
    });
})