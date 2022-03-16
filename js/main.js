var workExp = 1; // 1 = 0-7; 2 = 7 Above;
var cv = 0; // 0 = none;
var image = '';

// JSON -----------------------------------
var json_pI = {}; // personal information
var json_eI = []; // educational information
var json_wE = []; // work experience
var json_jS = []; // job skills
var json_aY = []; // about yourself
// ----------------------------------------

var cropper = $('#cropImage').croppie({
    viewport: {
        width: 264,
        height: 297
    }
});

!(function ($) {
    $('[data-toggle="tooltip"]').tooltip();
    
    $('.owl-carousel').owlCarousel({
        margin: 10,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            }
        }
    });

    $('.day').append(function(){
        let day = '';
        for (let i=1; i<=31; i++) {
            day += '<option value="'+i+'">'+i+'</option>';
        }
        return day;
    });

    $('.month').append(
        '<option value="Januari">Januari</option>'+
        '<option value="Februari">Februari</option>'+
        '<option value="Maart">Maart</option>'+
        '<option value="April">April</option>'+
        '<option value="Mei">Mei</option>'+
        '<option value="Juni">Juni</option>'+
        '<option value="Juli">Juli</option>'+
        '<option value="Augustus">Augustus</option>'+
        '<option value="September">September</option>'+
        '<option value="Oktober">Oktober</option>'+
        '<option value="November">November</option>'+
        '<option value="December">December</option>'
    );

    $('.year').append(function(){
        const d = new Date();
        let yyyy = d.getFullYear();

        let year = '';
        for (let i=yyyy; i>=1939; i--) {
            year += '<option value="'+i+'">'+i+'</option>';
        }
        return year;
    });

})(jQuery);

$('[name=image]').on('change', function() {
    var reader = new FileReader();
    reader.onload = function (e) {
        $('#modalCropper').modal('show');
        let img = e.target.result;
        cropper.croppie('bind', {
            url: img,
        });
    };
    reader.readAsDataURL(this.files[0]);
});

function crop() {
    cropper.croppie('result', 'base64').then(function(base64) {
        $('#img-placeholder').attr('src', base64);
        image = base64;
        $('#modalCropper').modal('hide');
    });
}

function page(pageNo) {
    if (pageNo == 1) {
        $('#page1').show();
        $('#page2').hide();
        $('#page3').hide();
        $('#page4').hide();
        $('#page5').hide();
        $('#page6').hide();
        $('#page7').hide();
    } 
    else if (pageNo == 2) {
        $('#page1').hide();
        $('#page2').show();
        $('#page3').hide();
        $('#page4').hide();
        $('#page5').hide();
        $('#page6').hide();
        $('#page7').hide();
        
        $('.btn-at').hide();
    } 
    else if (pageNo == 3) {
        $('#page1').hide();
        $('#page2').hide();
        $('#page3').show();
        $('#page4').hide();
        $('#page5').hide();
        $('#page6').hide();
        $('#page7').hide();
    } 
    else if (pageNo == 4) {
        $('#page1').hide();
        $('#page2').hide();
        $('#page3').hide();
        $('#page4').show();
        $('#page5').hide();
        $('#page6').hide();
        $('#page7').hide();
    } 
    else if (pageNo == 5) {
        $('#page1').hide();
        $('#page2').hide();
        $('#page3').hide();
        $('#page4').hide();
        $('#page5').show();
        $('#page6').hide();
        $('#page7').hide();
    } 
    else if (pageNo == 6) {
        $('#page1').hide();
        $('#page2').hide();
        $('#page3').hide();
        $('#page4').hide();
        $('#page5').hide();
        $('#page6').show();
        $('#page7').hide();
    } 
    else if (pageNo == 7) {
        $('#page1').hide();
        $('#page2').hide();
        $('#page3').hide();
        $('#page4').hide();
        $('#page5').hide();
        $('#page6').hide();
        $('#page7').show();
    }
    else if (pageNo == 0) {
        $.confirm({
            theme: 'modern',
            title: '<img src="img/ok-check.png">'+
                    '<br><br><br>'+
                    'Gefeliciteerd!',
            content: 'Je cv is compleet.',
            buttons: {
                OK: {
                    btnClass: 'btn-primary btn-primary-ok',
                    action: function () {
                        page(-1);
                        
                        $.ajax({
                            url: '../pdf.php',
                            type: 'POST',
                            data: {
                                'cv' : cv,
                                'json_pI' : json_pI,
                                'json_eI' : json_eI,
                                'json_wE' : json_wE,
                                'json_jS_knowAbout' : json_jS_knowAbout,
                                'json_jS_language' : json_jS_language,
                                'json_jS_certificates' : json_jS_certificates,
                                'json_aY' : json_aY
                            },
                            success: function(msg) {
                                console.log(msg);
                            },
                            error: function(msg) {
                                console.log(msg);
                            }
                        });
                    }
                },
            }
        });
    }
    else if (pageNo == -1) {
        $('#page1').show();
        $('#page2').hide();
        $('#page3').hide();
        $('#page4').hide();
        $('#page5').hide();
        $('#page6').hide();
        $('#page7').hide();
        $('#page8').hide();

        $('.whatNow').show();

        let count = 20;
        let timer = setInterval(function() {
            $("#countDown").html(count--);
            if(count == 1){
                location.reload();
                clearInterval(timer);
            } 
        }, 1000);
    }
}

$('.cv1').click(function () {
    cv = 1;

    $('.cv1, .cv1 > .selected').addClass('active');
    $('.cv2, .cv2 > .selected').removeClass('active');
    $('.cv3, .cv3 > .selected').removeClass('active');
    $('.cv4, .cv4 > .selected').removeClass('active');
    $('.cv5, .cv5 > .selected').removeClass('active');
    $('.cv6, .cv6 > .selected').removeClass('active');

    $('.btn-at').css('display', 'inline-block');

    $('#cropImage').croppie('destroy');
    $('#cropImage').croppie({
        viewport: {
            width: 264,
            height: 297
        }
    });
});

$('.cv2').click(function () {
    cv = 2;

    $('.cv1, .cv1 > .selected').removeClass('active');
    $('.cv2, .cv2 > .selected').addClass('active');
    $('.cv3, .cv3 > .selected').removeClass('active');
    $('.cv4, .cv4 > .selected').removeClass('active');
    $('.cv5, .cv5 > .selected').removeClass('active');
    $('.cv6, .cv6 > .selected').removeClass('active');

    $('.btn-at').css('display', 'inline-block');

    $('#cropImage').croppie('destroy');

    $('#cropImage').croppie({
        viewport: {
            width: 174,
            height: 206
        }
    });
});

$('.cv3').click(function () {
    cv = 3;
    $('.cv1, .cv1 > .selected').removeClass('active');
    $('.cv2, .cv2 > .selected').removeClass('active');
    $('.cv3, .cv3 > .selected').addClass('active');
    $('.cv4, .cv4 > .selected').removeClass('active');
    $('.cv5, .cv5 > .selected').removeClass('active');
    $('.cv6, .cv6 > .selected').removeClass('active');

    $('.btn-at').css('display', 'inline-block');

    $('#cropImage').croppie('destroy');

    $('#cropImage').croppie({
        viewport: {
            width: 198,
            height: 243
        }
    });
});

$('.cv4').click(function () {
    cv = 4;
    $('.cv1, .cv1 > .selected').removeClass('active');
    $('.cv2, .cv2 > .selected').removeClass('active');
    $('.cv3, .cv3 > .selected').removeClass('active');
    $('.cv4, .cv4 > .selected').addClass('active');
    $('.cv5, .cv5 > .selected').removeClass('active');
    $('.cv6, .cv6 > .selected').removeClass('active');

    $('.btn-at').css('display', 'inline-block');

    $('#cropImage').croppie('destroy');

    $('#cropImage').croppie({
        viewport: {
            width: 137,
            height: 137
        }
    });
});

$('.cv5').click(function () {
    cv = 5;

    $('.cv1, .cv1 > .selected').removeClass('active');
    $('.cv2, .cv2 > .selected').removeClass('active');
    $('.cv3, .cv3 > .selected').removeClass('active');
    $('.cv4, .cv4 > .selected').removeClass('active');
    $('.cv5, .cv5 > .selected').addClass('active');
    $('.cv6, .cv6 > .selected').removeClass('active');

    $('.btn-at').css('display', 'inline-block');

    $('#cropImage').croppie('destroy');

    $('#cropImage').croppie({
        viewport: {
            width: 214,
            height: 184
        }
    });
});

$('.cv6').click(function () {
    cv = 6;

    $('.cv1, .cv1 > .selected').removeClass('active');
    $('.cv2, .cv2 > .selected').removeClass('active');
    $('.cv3, .cv3 > .selected').removeClass('active');
    $('.cv4, .cv4 > .selected').removeClass('active');
    $('.cv5, .cv5 > .selected').removeClass('active');
    $('.cv6, .cv6 > .selected').addClass('active');

    $('.btn-at').css('display', 'inline-block');

    $('#cropImage').croppie('destroy');

    $('#cropImage').croppie({
        viewport: {
            width: 280,
            height: 286
        }
    });
});

$('#accept').on('change', function(){
    if(this.checked)
        $('#btn_done').prop('disabled', false);
    else
        $('#btn_done').prop('disabled', true);
});