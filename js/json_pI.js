function personalInformation() {
    let proceed = false;
    
    let dl = $('[name="dl[]"]:checked');
    let gender = $('[name=gender]:checked').val();
    let firstname = $('[name=firstname]').val();
    let infixes = $('[name=infixes]').val();
    let lastname = $('[name=lastname]').val();
    let dobDay = $('[name=dobDay]').val();
    let dobMonth = $('[name=dobMonth]').val();
    let dobYear = $('[name=dobYear]').val();
    let email = $('[name=email]').val();
    let phonenumber = $('[name=phonenumber]').val();
    let postalcode = $('[name=postalcode]').val();
    let housenumber = $('[name=housenumber]').val();
    let addon = $('[name=addon]').val();
    let street = $('[name=street]').val();
    let residence = $('[name=residence]').val();
    let country = $('[name=country]').val();

    let driversLicense = [];
    for (let i=0; i<dl.length; i++) {
        driversLicense.push(dl[i].value);
    }

    if (image == '' || image == null) {
        $('[name=image]').addClass('is-invalid');
    }
    else {
        $('[name=image]').removeClass('is-invalid');
    }
    if (gender == '') {
        $('[name=gender]').addClass('is-invalid');
    }
    else {
        $('[name=gender]').removeClass('is-invalid');
    }
    if (firstname == '') {
        $('[name=firstname]').addClass('is-invalid');
    }
    else {
        $('[name=firstname]').removeClass('is-invalid');
    }
    if (lastname == '') {
        $('[name=lastname]').addClass('is-invalid');
    }
    else {
        $('[name=lastname]').removeClass('is-invalid');
    }
    if (dobDay == null) {
        $('[name=dobDay]').addClass('is-invalid');
    }
    else {
        $('[name=dobDay]').removeClass('is-invalid');
    }
    if (dobMonth == null) {
        $('[name=dobMonth]').addClass('is-invalid');
    }
    else {
        $('[name=dobMonth]').removeClass('is-invalid');
    }
    if (dobYear == null) {
        $('[name=dobYear]').addClass('is-invalid');
    }
    else {
        $('[name=dobYear]').removeClass('is-invalid');
    }
    if (email == '') {
        $('[name=email]').addClass('is-invalid');
    }
    else {
        $('[name=email]').removeClass('is-invalid');
    }
    if (phonenumber == '') {
        $('[name=phonenumber]').addClass('is-invalid');
    }
    else {
        $('[name=phonenumber]').removeClass('is-invalid');
    }
    if (postalcode == '') {
        $('[name=postalcode]').addClass('is-invalid');
    }
    else {
        $('[name=postalcode]').removeClass('is-invalid');
    }
    if (housenumber == '') {
        $('[name=housenumber]').addClass('is-invalid');
    }
    else {
        $('[name=housenumber]').removeClass('is-invalid');
    }
    if (street == '') {
        $('[name=street]').addClass('is-invalid');
    }
    else {
        $('[name=street]').removeClass('is-invalid');
    }
    if (residence == '') {
        $('[name=residence]').addClass('is-invalid');
    }
    else {
        $('[name=residence]').removeClass('is-invalid');
    }
    if (country == '') {
        $('[name=country]').addClass('is-invalid');
    }
    else {
        $('[name=country]').removeClass('is-invalid');
    }

    if (image != '' && gender != '' && firstname != '' && lastname != '' && dobDay != null && dobMonth != null && dobYear != null && email != '' && phonenumber != '' && postalcode != '' && housenumber != '' && street != '' && residence != '' && country != '') {
        proceed = true;
    }

    if (proceed == true) {
        json_pI = {
            'image' : image,
            'driversLicense': driversLicense,
            'gender' : gender,
            'firstname' : firstname,
            'infixes' : infixes,
            'lastname' : lastname,
            'dobDay' : dobDay,
            'dobMonth' : dobMonth,
            'dobYear' : dobYear,
            'email' : email,
            'phonenumber' : phonenumber,
            'postalcode' : postalcode,
            'housenumber' : housenumber,
            'addon' : addon,
            'street' : street,
            'residence' : residence,
            'country' : country
        };
        page(3);
    }
}