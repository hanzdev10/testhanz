function add_wE() {
    let proceed = false;
    
    we_jobtitle = $('[name=we_jobtitle]').val();
    we_companyname = $('[name=we_companyname]').val();
    we_location = $('[name=we_location]').val();
    we_description = $('[name=we_description]').val();
    we_byMonth = $('[name=we_byMonth]').val();
    we_byYear = $('[name=we_byYear]').val();
    we_untilMonth = $('[name=we_untilMonth]').val();
    we_untilYear = $('[name=we_untilYear]').val();

    if (we_jobtitle == '') {
        $('[name=we_jobtitle]').addClass('is-invalid');
        proceed = false;
    }
    else {
        $('[name=we_jobtitle]').removeClass('is-invalid');
        proceed = true;
    }
    if (we_companyname == '') {
        $('[name=we_companyname]').addClass('is-invalid');
        proceed = false;
    }
    else {
        $('[name=we_companyname]').removeClass('is-invalid');
        proceed = true;
    }
    if (we_location == '') {
        $('[name=we_location]').addClass('is-invalid');
        proceed = false;
    }
    else {
        $('[name=we_location]').removeClass('is-invalid');
        proceed = true;
    }
    if (we_description == '') {
        $('[name=we_description]').addClass('is-invalid');
        proceed = false;
    }
    else {
        $('[name=we_description]').removeClass('is-invalid');
        proceed = true;
    }
    if (we_byMonth == '' || we_byMonth == null) {
        $('[name=we_byMonth]').addClass('is-invalid');
        proceed = false;
    }
    else {
        $('[name=we_byMonth]').removeClass('is-invalid');
        proceed = true;
    }
    if (we_byYear == '' || we_byYear == null) {
        $('[name=we_byYear]').addClass('is-invalid');
        proceed = false;
    }
    else {
        $('[name=we_byYear]').removeClass('is-invalid');
        proceed = true;
    }
    
    if ($('#we_iswh').prop('checked') != true) {
        if (we_untilMonth == '' || we_untilMonth == null) {
            $('[name=we_untilMonth]').addClass('is-invalid');
            proceed = false;
        }
        else {
            $('[name=we_untilMonth]').removeClass('is-invalid');
            proceed = true;
        }
        if (we_untilYear == '' || we_untilYear == null) {
            $('[name=we_untilYear]').addClass('is-invalid');
            proceed = false;
        }
        else {
            $('[name=we_untilYear]').removeClass('is-invalid');
            proceed = true;
        }
    }

    if (proceed == true) {
        if($('#wE_btnAddSave').html() == 'Toevoegen') {
            json_wE.push({
                'we_jobtitle' : we_jobtitle,
                'we_companyname' : we_companyname,
                'we_location' : we_location,
                'we_description' : we_description,
                'we_byMonth' : we_byMonth,
                'we_byYear' : we_byYear,
                'we_untilMonth' : we_untilMonth,
                'we_untilYear' : we_untilYear
            });
    
            $('#wE_form').hide();
            $('#wE_data').show();
    
            $('#addMore_wE').show();
            add_json_wE();
        }
        else {
            json_wE[wEedit_id].we_jobtitle = we_jobtitle;
            json_wE[wEedit_id].we_companyname = we_companyname;
            json_wE[wEedit_id].we_location = we_location;
            json_wE[wEedit_id].we_description = we_description;
            json_wE[wEedit_id].we_byMonth = we_byMonth;
            json_wE[wEedit_id].we_byYear = we_byYear;
            json_wE[wEedit_id].we_untilMonth = we_untilMonth;
            json_wE[wEedit_id].we_untilYear = we_untilYear;   

            $('#wE_form').hide();
            $('#wE_data').show();
    
            $('#addMore_wE').show();
            add_json_wE();
        }
        wE_clearFields();
    }
    $('[data-toggle="tooltip"]').tooltip();
}

function add_json_wE() {
    $('#wE_data').empty();

    for (let i=0; i<json_wE.length; i++) {
        let until = json_wE[i].we_untilMonth == null ? 'Tot Heden' : json_wE[i].we_untilMonth + ' ' + json_wE[i].we_untilYear;
        let byuntil = '<button class="btn btn-primary btn-by">'+json_wE[i].we_byMonth + ' ' + json_wE[i].we_byYear +' - '+until+'</button> ';
        if ($('#we_iswh').prop('checked') == true) {
            byuntil = '<button class="btn btn-primary btn-by">'+json_wE[i].we_byMonth + ' ' + json_wE[i].we_byYear +' - Tot Heden</button> '
        }

        $('#wE_data').append(
            '<div class="col-lg-12 mt-4 no-pad form-bg" id="json_wE_data'+i+'">'+
                '<div class="row mb-4">'+
                    '<div class="col-lg-6 order-lg-1 order-2">'+
                        '<h5>'+json_wE[i].we_jobtitle+'</h5>'+
                        '<p>'+
                            ''+json_wE[i].we_companyname+
                        '</p>'+
                    '</div>'+
                    '<div class="col-lg-6 order-lg-2 order-1">'+
                        '<div class="float-right">'+
                            '<button class="btn btn-warning btn-circle" data-toggle="tooltip" data-placement="bottom" title="Bewerken" onclick="edit_wE('+i+')"><i class="fa fa-pencil"></i></button> '+
                            '<button class="btn btn-danger btn-circle" data-toggle="tooltip" data-placement="bottom" title="Verwijderen" onclick="delete_wE('+i+')"><i class="fa fa-trash"></i></button>'+
                        '</div>'+
                    '</div>'+
                    '<div class="col-lg-12 order-3">'+
                        byuntil+
                        '<button class="btn btn-primary btn-by">'+json_wE[i].we_location +'</button>'+
                    '</div>'+
                    '<div class="col-lg-12 mt-3 order-4">'+
                        '<p>'+json_wE[i].we_description+'</p>'+
                    '</div>'+
                '</div>'+
            '</div>'
        )
    }
}

function wE_clearFields() {
    $('[name=we_jobtitle]').val('');
    $('[name=we_companyname]').val('');
    $('[name=we_location]').val('');
    $('[name=we_description]').val('');
    $('[name=we_byMonth]').val('');
    $('[name=we_byYear]').val('');
    $('[name=we_untilMonth]').val('');
    $('[name=we_untilYear]').val('');

    $('#we_iswh').prop('checked', false);
    $('[name=we_untilMonth]').prop('disabled', false);
    $('[name=we_untilYear]').prop('disabled', false);

    $('[name=we_jobtitle]').removeClass('is-invalid');
    $('[name=we_companyname]').removeClass('is-invalid');
    $('[name=we_location]').removeClass('is-invalid');
    $('[name=we_description]').removeClass('is-invalid');
    $('[name=we_byMonth]').removeClass('is-invalid');
    $('[name=we_byYear]').removeClass('is-invalid');
    $('[name=we_untilMonth]').removeClass('is-invalid');
    $('[name=we_untilYear]').removeClass('is-invalid');

    hideAddmoreWe();
}

function cancel_wE() {
    wE_clearFields();

    if (json_wE.length > 0) {
        $('#wE_form').hide();
        $('#addMore_wE').show();
    }
    else {
        $('#addMore_wE').hide();
    }
}

function addMore_wE() {
    wE_clearFields();

    $('#addMore_wE').hide();
    $('#wE_form').show();

    $('#wE_btnAddSave').html('Toevoegen');
}

function delete_wE(i) {
    wE_clearFields();

    $('#json_wE_data'+i).remove();
    json_wE.splice(i, 1);

    if (json_wE.length == 0) {
        $('#wE_form').show();
        $('#addMore_wE').hide();

        $('#wE_btnAddSave').html('Toevoegen');
    }
    else {
        $('#wE_btnAddSave').html('Toevoegen');
        
        $('#wE_form').hide();
        $('#addMore_wE').show();
    }
}

var wEedit_id = 0;
function edit_wE(i) {
    $('#wE_form').show();
    wE_clearFields();

    $('[name=we_jobtitle]').val(json_wE[i].we_jobtitle);
    $('[name=we_companyname]').val(json_wE[i].we_companyname);
    $('[name=we_location]').val(json_wE[i].we_location);
    $('[name=we_description]').val(json_wE[i].we_description);
    $('[name=we_byMonth]').val(json_wE[i].we_byMonth);
    $('[name=we_byYear]').val(json_wE[i].we_byYear);
    $('[name=we_untilMonth]').val(json_wE[i].we_untilMonth);
    $('[name=we_untilYear]').val(json_wE[i].we_untilYear);

    if (json_wE[i].we_untilMonth == null) {
        $('#we_iswh').prop('checked', true);
        $('[name=we_untilMonth]').prop('disabled', true);
        $('[name=we_untilYear]').prop('disabled', true);
    }
    else {
        $('#we_iswh').prop('checked', false);
        $('[name=we_untilMonth]').prop('disabled', false);
        $('[name=we_untilYear]').prop('disabled', false);
    }

    wEedit_id = i;

    $('#wE_btnAddSave').html('Opslaan');
}

$('#we_iswh').on('change', function() {
    if ($(this).prop('checked') == true) {
        $('[name=we_untilMonth]').attr('disabled', 'disabled');
        $('[name=we_untilYear]').attr('disabled', 'disabled');

        $('[name=we_untilMonth]').removeClass('is-invalid');
        $('[name=we_untilYear]').removeClass('is-invalid');

        $('[name=we_untilMonth]').val('');
        $('[name=we_untilYear]').val('');
    }
    else {
        $('[name=we_untilMonth]').removeAttr('disabled');
        $('[name=we_untilYear]').removeAttr('disabled');
    }
});

function hideAddmoreWe() {
    if (workExp == 1) {
        if (json_wE.length == 7)
            $('#addMore_wE').hide();
        else 
            $('#addMore_wE').show();
    }
    else {
        if (json_wE.length == 14)
            $('#addMore_wE').hide();
        else 
            $('#addMore_wE').show();
    }
}