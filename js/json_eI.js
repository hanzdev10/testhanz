function add_eI() {
    let proceed = false;
    
    let educationaldirection = $('[name=educationaldirection]').val();
    let level = $('[name=level]').val();
    let educationalinstitution = $('[name=educationalinstitution]').val();
    let location = $('[name=location]').val();
    let by = $('[name=by]').val();
    let until = $('[name=until]').val();
    let educationcompleted = $('[name=educationcompleted]:checked').val();
    let description = $('[name=description]').val();

    if (educationaldirection == '') {
        $('[name=educationaldirection]').addClass('is-invalid');
        proceed = false;
    }
    else {
        $('[name=educationaldirection]').removeClass('is-invalid');
        proceed = true;
    }
    if (level == '') {
        $('[name=level]').addClass('is-invalid');
        proceed = false;
    }
    else {
        $('[name=level]').removeClass('is-invalid');
        proceed = true;
    }
    if (educationalinstitution == '') {
        $('[name=educationalinstitution]').addClass('is-invalid');
        proceed = false;
    }
    else {
        $('[name=educationalinstitution]').removeClass('is-invalid');
        proceed = true;
    }
    if (location == '') {
        $('[name=location]').addClass('is-invalid');
        proceed = false;
    }
    else {
        $('[name=location]').removeClass('is-invalid');
        proceed = true;
    }
    if (by == '' || by == null) {
        $('[name=by]').addClass('is-invalid');
        proceed = false;
    }
    else {
        $('[name=by]').removeClass('is-invalid');
        proceed = true;
    }
    if (until == '' || by == null) {
        $('[name=until]').addClass('is-invalid');
        proceed = false;
    }
    else {
        $('[name=until]').removeClass('is-invalid');
        proceed = true;
    }
    if (description == '') {
        $('[name=description]').addClass('is-invalid');
        proceed = false;
    }
    else {
        $('[name=description]').removeClass('is-invalid');
        proceed = true;
    }

    if (proceed == true) {
        if($('#eI_btnAddSave').html() == 'Toevoegen') {
            json_eI.push({
                'educationaldirection' : educationaldirection,
                'level': level,
                'educationalinstitution' : educationalinstitution,
                'location' : location,
                'by' : by,
                'until' : until,
                'educationcompleted' : educationcompleted,
                'description' : description
            });
    
            $('#eI_form').hide();
            $('#eI_data').show();
    
            $('#addMore_eI').show();
            add_json_eI();
        }
        else {
            json_eI[eIeIedit_id].educationaldirection = educationaldirection;
            json_eI[eIeIedit_id].level = level;
            json_eI[eIeIedit_id].educationalinstitution = educationalinstitution;
            json_eI[eIeIedit_id].location = location;
            json_eI[eIeIedit_id].by = by;
            json_eI[eIeIedit_id].until = until;
            json_eI[eIeIedit_id].educationcompleted = educationcompleted;
            json_eI[eIeIedit_id].description = description;   

            $('#eI_form').hide();
            $('#eI_data').show();
    
            $('#addMore_eI').show();
            add_json_eI();
        }
        ei_clearFields();
    }
    $('[data-toggle="tooltip"]').tooltip();
}

function add_json_eI() {
    $('#eI_data').empty();
    for (let i=0; i<json_eI.length; i++) {
        $('#eI_data').append(
            '<div class="col-lg-12 mt-4 no-pad form-bg" id="json_eI_data'+i+'">'+
                '<div class="row mb-4">'+
                    '<div class="col-lg-6 order-lg-1 order-2">'+
                        '<h5>'+json_eI[i].educationaldirection+'</h5>'+
                        '<p>'+
                            ''+json_eI[i].level+' <br>'+
                            ''+json_eI[i].educationalinstitution+''+
                        '</p>'+
                    '</div>'+
                    '<div class="col-lg-6 order-lg-2 order-1">'+
                        '<div class="float-right">'+
                            '<button class="btn btn-warning btn-circle" data-toggle="tooltip" data-placement="bottom" title="Bewerken" onclick="edit_eI('+i+')"><i class="fa fa-pencil"></i></button> '+
                            '<button class="btn btn-danger btn-circle" data-toggle="tooltip" data-placement="bottom" title="Verwijderen" onclick="delete_eI('+i+')"><i class="fa fa-trash"></i></button>'+
                        '</div>'+
                    '</div>'+
                    '<div class="col-lg-12 order-3">'+
                        '<button class="btn btn-primary btn-by">'+json_eI[i].by+' - '+json_eI[i].until+'</button> '+
                        '<button class="btn btn-primary btn-by">'+json_eI[i].location+'</button>'+
                    '</div>'+
                    '<div class="col-lg-12 mt-3 order-4">'+
                        '<p>'+json_eI[i].description+'</p>'+
                    '</div>'+
                '</div>'+
            '</div>'
        )
    }
}

function ei_clearFields() {
    $('[name=educationaldirection]').val('');
    $('[name=level]').val('');
    $('[name=educationalinstitution]').val('');
    $('[name=location]').val('');
    $('[name=by]').val('');
    $('[name=until]').val('');
    $('#ecYes').prop('checked', true);
    $('[name=description]').val('');

    $('[name=educationaldirection]').removeClass('is-invalid');
    $('[name=level]').removeClass('is-invalid');
    $('[name=educationalinstitution]').removeClass('is-invalid');
    $('[name=location]').removeClass('is-invalid');
    $('[name=by]').removeClass('is-invalid');
    $('[name=until]').removeClass('is-invalid');
    $('[name=description]').removeClass('is-invalid');

    hideAddMoreEi();
}

function cancel_eI() {
    ei_clearFields();

    if (json_eI.length > 0) {
        $('#eI_form').hide();
        $('#addMore_eI').show();
    }
    else {
        $('#addMore_eI').hide();
    }
}

function addMore_eI() {
    ei_clearFields();

    $('#addMore_eI').hide();
    $('#eI_form').show();

    $('#eI_btnAddSave').html('Toevoegen');
}

function delete_eI(i) {
    ei_clearFields();

    $('#json_eI_data'+i).remove();
    json_eI.splice(i, 1);

    if (json_eI.length == 0) {
        $('#eI_form').show();
        $('#addMore_eI').hide();

        $('#eI_btnAddSave').html('Toevoegen');
    }
    else {
        $('#eI_btnAddSave').html('Toevoegen');
        
        $('#eI_form').hide();
        $('#addMore_eI').show();
    }
}

var eIeIedit_id = 0;
function edit_eI(i) {
    $('#eI_form').show();
    ei_clearFields();

    $('[name=educationaldirection]').val(json_eI[i].educationaldirection);
    $('[name=level]').val(json_eI[i].level);
    $('[name=educationalinstitution]').val(json_eI[i].educationalinstitution);
    $('[name=location]').val(json_eI[i].location);
    $('[name=by]').val(json_eI[i].by);
    $('[name=until]').val(json_eI[i].until);
    $('[name=description]').val(json_eI[i].description);
    json_eI[i].educationcompleted == 'Yes' ? $('#ecYes').prop('checked', true) : $('#ecNo').prop('checked', true);

    eIeIedit_id = i;

    $('#eI_btnAddSave').html('Opslaan');
}

function hideAddMoreEi() {
    if (json_eI.length == 3)
        $('#addMore_eI').hide();
    else 
        $('#addMore_eI').show();
}