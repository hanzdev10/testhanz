let json_jS_knowAbout = [];
let json_jS_language = [];
let json_jS_certificates = [];

function jobSkills() {
    let proceed = false;

    if (json_jS_knowAbout.length == 0) {
        $('[name=js_knowAbout]').addClass('is-invalid');
    }
    else {
        $('[name=js_knowAbout]').removeClass('is-invalid');
    }
    if (json_jS_language.length == 0) {
        $('[name=js_language]').addClass('is-invalid');
    }
    else {
        $('[name=js_language]').removeClass('is-invalid');
    }
    if (json_jS_certificates.length == 0) {
        $('[name=js_certificates]').addClass('is-invalid');
    }
    else {
        $('[name=js_certificates]').removeClass('is-invalid');
    }

    if (json_jS_knowAbout.length != 0 && json_jS_language.length != 0 && json_jS_certificates.length != 0)
        proceed = true;

    if (proceed == true) {
        page(6);
    }
}

function add_knowAbout() {
    if ($('[name=js_knowAbout]').val() == '') {
        $('[name=js_knowAbout]').addClass('is-invalid');
    }
    else {
        $('[name=js_knowAbout]').removeClass('is-invalid');

        json_jS_knowAbout.push({
            title: $('[name=js_knowAbout]').val(),
            rate: 0
        });
        
        get_knowAbout();
    }
}

function get_knowAbout() {
    $('#counter_knowAbout').html(json_jS_knowAbout.length + "/5");
    
    if (json_jS_knowAbout.length < 5) {
        $('[name=js_knowAbout]').attr('disabled', false);
    }
    else {
        $('[name=js_knowAbout]').attr('disabled', true);
    }


    $('[name=js_knowAbout]').val('');

    if (json_jS_knowAbout.length > 0) {
        $('#item_knowAbout').html(
            '<div class="col-lg-12 mb-2">'+
                '<small><b>Beoordeel jouw skills</b></small>'+
            '</div>'
        );
            
        for (let i=0; i<json_jS_knowAbout.length; i++) {
            let star1 = json_jS_knowAbout[i]['rate'] >= 1 ? 'active' : '';
            let star2 = json_jS_knowAbout[i]['rate'] >= 2 ? 'active' : '';
            let star3 = json_jS_knowAbout[i]['rate'] >= 3 ? 'active' : '';
            let star4 = json_jS_knowAbout[i]['rate'] >= 4 ? 'active' : '';
            let star5 = json_jS_knowAbout[i]['rate'] >= 5 ? 'active' : '';

            $('#item_knowAbout').append(
                '<div class="col-lg-3 mb-3" class="raties" id="knowAbout'+i+'">'+
                    '<div class="raties">'+
                        '<small>'+json_jS_knowAbout[i]['title']+'</small>'+
                        '<span class="float-right">'+
                            '<a href="#" class="text-light" data-toggle="tooltip" data-placement="bottom" title="Delete" onclick="delete_knowAbout('+i+')"><i class="far fa-times"></i></a>'+
                        '</span>'+
                        '<div class="star mt-2">'+
                            '<i class="fa fa-star mr-1 star1 '+star1+'" onclick="rate_knowAbout(1, '+i+')"></i>'+
                            '<i class="fa fa-star mr-1 star2 '+star2+'" onclick="rate_knowAbout(2, '+i+')"></i>'+
                            '<i class="fa fa-star mr-1 star3 '+star3+'" onclick="rate_knowAbout(3, '+i+')"></i>'+
                            '<i class="fa fa-star mr-1 star4 '+star4+'" onclick="rate_knowAbout(4, '+i+')"></i>'+
                            '<i class="fa fa-star star5 '+star5+'" onclick="rate_knowAbout(5, '+i+')"></i>'+
                        '</div>'+
                    '</div>'+
                '</div>'
            )
        }
    }
    else {
        $('#item_knowAbout').html('');
    }
}

function delete_knowAbout(id) {
    json_jS_knowAbout.splice(id, 1);

    get_knowAbout();
}

function rate_knowAbout(rate, id) {
    json_jS_knowAbout[id].rate = rate;

    get_knowAbout();
}

/* ------------------ */

function add_language() {
    if ($('[name=js_language]').val() == '') {
        $('[name=js_language]').addClass('is-invalid');
    }
    else {
        $('[name=js_language]').removeClass('is-invalid');

        json_jS_language.push({
            title: $('[name=js_language]').val(),
            rate: 0
        });
        
        get_language();
    }
}

function get_language() {
    $('#counter_language').html(json_jS_language.length + "/5");
    
    if (json_jS_language.length < 5) {
        $('[name=js_language]').attr('disabled', false);
    }
    else {
        $('[name=js_language]').attr('disabled', true);
    }

    $('[name=js_language]').val('');

    if (json_jS_language.length > 0) {
        $('#item_language').html(
            '<div class="col-lg-12 mb-2">'+
                '<small><b>Beordeel jouw taalvaardigheid</b></small>'+
            '</div>'
        );
            
        for (let i=0; i<json_jS_language.length; i++) {
            let star1 = json_jS_language[i]['rate'] >= 1 ? 'active' : '';
            let star2 = json_jS_language[i]['rate'] >= 2 ? 'active' : '';
            let star3 = json_jS_language[i]['rate'] >= 3 ? 'active' : '';
            let star4 = json_jS_language[i]['rate'] >= 4 ? 'active' : '';
            let star5 = json_jS_language[i]['rate'] >= 5 ? 'active' : '';

            $('#item_language').append(
                '<div class="col-lg-3 mb-3" class="raties" id="language'+i+'">'+
                    '<div class="raties">'+
                        '<small>'+json_jS_language[i]['title']+'</small>'+
                        '<span class="float-right">'+
                            '<a href="#" class="text-light" data-toggle="tooltip" data-placement="bottom" title="Delete" onclick="delete_language('+i+')"><i class="far fa-times"></i></a>'+
                        '</span>'+
                        '<div class="star mt-2">'+
                            '<i class="fa fa-star mr-1 star1 '+star1+'" onclick="rate_language(1, '+i+')"></i>'+
                            '<i class="fa fa-star mr-1 star2 '+star2+'" onclick="rate_language(2, '+i+')"></i>'+
                            '<i class="fa fa-star mr-1 star3 '+star3+'" onclick="rate_language(3, '+i+')"></i>'+
                            '<i class="fa fa-star mr-1 star4 '+star4+'" onclick="rate_language(4, '+i+')"></i>'+
                            '<i class="fa fa-star star5 '+star5+'" onclick="rate_language(5, '+i+')"></i>'+
                        '</div>'+
                    '</div>'+
                '</div>'
            )
        }
    }
    else {
        $('#item_language').html('');
    }
}

function delete_language(id) {
    json_jS_language.splice(id, 1);

    get_language();
}

function rate_language(rate, id) {
    json_jS_language[id].rate = rate;

    get_language();
}

/* ------------------------------------- */

function add_certificates() {
    if ($('[name=js_certificates]').val() == '') {
        $('[name=js_certificates]').addClass('is-invalid');
    }
    else {
        $('[name=js_certificates]').removeClass('is-invalid');

        json_jS_certificates.push({
            title: $('[name=js_certificates]').val()
        });
        
        get_certificates();
    }
}

function get_certificates() {
    $('#counter_certificates').html(json_jS_certificates.length + "/5");
    
    if (json_jS_certificates.length < 5) {
        $('[name=js_certificates]').attr('disabled', false);
    }
    else {
        $('[name=js_certificates]').attr('disabled', true);
    }

    $('[name=js_certificates]').val('');

    if (json_jS_certificates.length > 0) {
        $('#item_certificates').html('');
            
        for (let i=0; i<json_jS_certificates.length; i++) {
            $('#item_certificates').append(
                '<div class="col-lg-3 mb-3" class="certs" id="certificates'+i+'">'+
                    '<div class="certs">'+
                        '<small>'+json_jS_certificates[i]['title']+'</small>'+
                        '<span class="float-right">'+
                            '<a href="#" class="text-light" data-toggle="tooltip" data-placement="bottom" title="Delete" onclick="delete_certificates('+i+')"><i class="far fa-times"></i></a>'+
                        '</span>'+
                    '</div>'+
                '</div>'
            )
        }
    }
    else {
        $('#item_certificates').html('');
    }
}

function delete_certificates(id) {
    json_jS_certificates.splice(id, 1);

    get_certificates();
}

function rate_certificates(rate, id) {
    json_jS_certificates[id].rate = rate;

    get_certificates();
}