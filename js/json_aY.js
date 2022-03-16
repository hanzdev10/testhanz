function aboutYourself() {
    let proceed = false;
    
    let ay_characteristics = $('[name=ay_characteristics]').val();
    let ay_about = $('[name=ay_about]').val();
    let ay_hobbies = $('[name=ay_hobbies]').val();
    let ay_activities = $('[name=ay_activities]').val();

    if (ay_characteristics == '') {
        $('[name=ay_characteristics]').addClass('is-invalid');
        proceed = false;
    }
    else {
        $('[name=ay_characteristics]').removeClass('is-invalid');
        proceed = true;
    }
    if (ay_about == '') {
        $('[name=ay_about]').addClass('is-invalid');
        proceed = false;
    }
    else {
        $('[name=ay_about]').removeClass('is-invalid');
        proceed = true;
    }
    if (ay_hobbies == '') {
        $('[name=ay_hobbies]').addClass('is-invalid');
        proceed = false;
    }
    else {
        $('[name=ay_hobbies]').removeClass('is-invalid');
        proceed = true;
    }
    if (ay_activities == '') {
        $('[name=ay_activities]').addClass('is-invalid');
        proceed = false;
    }
    else {
        $('[name=ay_activities]').removeClass('is-invalid');
        proceed = true;
    }

    if (proceed == true) {
        json_aY = {
            'ay_characteristics' : ay_characteristics,
            'ay_about': ay_about,
            'ay_hobbies' : ay_hobbies,
            'ay_activities' : ay_activities,
        };
        page(7);
    }
}