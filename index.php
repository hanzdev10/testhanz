<?php
    $rootUrl = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';

    $files = glob('output-cvs/'."*");
    $now   = time();

    foreach ($files as $file) {
        if (is_file($file)) {
            if ($now - filemtime($file) >= 60 * 60 * 24 * 10) {
                unlink($file);
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV Maker</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">

    <link rel="stylesheet" href="plugins/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="plugins/owlcarousel/owl.theme.default.min.css">

    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="plugins/croppie/croppie.css">

</head>

<body>

    <div class="container">
        <div class="card">
            <div class="card-header bg-primary">
                <h1 class="cv-title">Gratis CV-Maker</h1>
            </div>
            <div class="card-body">
                <div class="container cv-content">
                    <!-- PAGE 1 -------------------------------------------------------------------->
                    <div class="cv-pages" id="page1">
                        <div class="row">
                            <div class="col-lg-12 whatNow">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h5 class="float-left">Wat nu?</h5>
                                        <a href="javascript:void(0)" onclick="$('.whatNow').hide();">
                                            <h5 class="float-right" style="color: #003974;"><i class="fa fa-times"></i>
                                            </h5>
                                        </a>
                                    </div>
                                </div>
                                <p class="wn-message">
                                    Je ontvangt binnen enkele minuten van ons een e-mail.
                                    <br>
                                    Daarin vind je een link om je nieuwe CV te downloaden.
                                </p>
                                <p class="wn-tip">
                                    Tip: download je CV binnen <b><i>10 dagen.</i></b> Na 10 dagen wordt de CV 
                                    wegens privacy en veiligheid redenen, verwijderd.
                                </p>
                                <button class="btn btn-primary btn-ok" onclick="$('.whatNow').hide();">OK</button>
                                <br>
                                <br>
                                <p class="wn-tip">
                                    Pagina word gerefresht in <span id="countDown">20</span>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 no-pad sub-title">
                                <div>
                                    <span class="blue-line">
                                        <hr></span>
                                    <h2>Wij hebben <strong>6 beschikbare</strong> CV templates</h2>
                                    <p class="text-dark">Selecteer de template and klik op de knop “Template gebruiken”</p>
                                    <div class="btn-container mb-3">
                                        <button class="btn btn-primary btn-at" onclick="page(2)">Template gebruiken</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 no-pad">
                                <div class="owl-carousel owl-theme">
                                    <div class="item cv1" onclick="workExp = 1;">
                                        <span class="selected">Geselecteerd </span>
                                        <img src="cvs/1.png" alt="">
                                    </div>
                                    <div class="item cv2" onclick="workExp = 1;">
                                        <span class="selected">Geselecteerd </span>
                                        <img src="cvs/2.png" alt="">
                                    </div>
                                    <div class="item cv3" onclick="workExp = 1;">
                                        <span class="selected">Geselecteerd </span>
                                        <img src="cvs/3.png" alt="">
                                    </div>
                                    <div class="item cv4" onclick="workExp = 2;">
                                        <span class="selected">Geselecteerd </span>
                                        <img src="cvs/4.png" alt="">
                                    </div>
                                    <div class="item cv5" onclick="workExp = 2;">
                                        <span class="selected">Geselecteerd </span>
                                        <img src="cvs/5.png" alt="">
                                    </div>
                                    <div class="item cv6" onclick="workExp = 2;">
                                        <span class="selected">Geselecteerd </span>
                                        <img src="cvs/6.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END PAGE 1 -------------------------------------------------------------------->

                    <!-- PAGE 2 -------------------------------------------------------------------->
                    <div class="cv-pages" id="page2">
                        <div class="row">
                            <div class="col-lg-12 no-pad">
                                <div class="row">
                                    <div class="col-lg-12 order-2 order-lg-1">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <h3>Persoonlijke gegevens</h3>
                                            </div>
                                            <div class="col-lg-6 text-lg-right text-sm-left">
                                                <h3 class="steps">Stap 1 van 6</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 order-1 order-lg-2 mb-3">
                                        <div class="row">
                                            <div class="col-2 tab">
                                                <span class="page-tab active">
                                                    <hr></span>
                                            </div>
                                            <div class="col-2 tab">
                                                <span class="page-tab">
                                                    <hr></span>
                                            </div>
                                            <div class="col-2 tab">
                                                <span class="page-tab">
                                                    <hr></span>
                                            </div>
                                            <div class="col-2 tab">
                                                <span class="page-tab">
                                                    <hr></span>
                                            </div>
                                            <div class="col-2 tab">
                                                <span class="page-tab">
                                                    <hr></span>
                                            </div>
                                            <div class="col-2 tab">
                                                <span class="page-tab">
                                                    <hr></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mt-4 no-pad form-bg">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-6">
                                                <div class="form-group">
                                                    <img src="img/img-placeholder.png" class="img" id="img-placeholder"
                                                        alt="img-placeholder">
                                                    <input type="file" class="form-control" name="image"
                                                        accept="image/png, image/jpeg" hidden>
                                                    <button class="btn btn-primary btn-upload"
                                                        onclick="$('[name=image]').click();">Foto uploaden</button>
                                                    <div class="invalid-feedback">Upload foto</div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-6 mb-5">
                                                <div class="form-group">
                                                    <label>Rijbewijs</label>
                                                </div>
                                                <div class="row dls">
                                                    <div class="col-lg-6">
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" name="dl[]"
                                                                id="dl_a" value="A">
                                                            <label class="form-check-label" for="dl_a">A</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" name="dl[]"
                                                                id="dl_A1" value="A1">
                                                            <label class="form-check-label" for="dl_A1">A1</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" name="dl[]"
                                                                id="dl_A2" value="A2">
                                                            <label class="form-check-label" for="dl_A2">A2</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" name="dl[]"
                                                                id="dl_AM" value="AM">
                                                            <label class="form-check-label" for="dl_AM">AM</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" name="dl[]"
                                                                id="dl_B" value="B">
                                                            <label class="form-check-label" for="dl_B">B</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" name="dl[]"
                                                                id="dl_BE" value="BE">
                                                            <label class="form-check-label" for="dl_BE">BE</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" name="dl[]"
                                                                id="dl_B+" value="B+">
                                                            <label class="form-check-label" for="dl_B+">B+
                                                                (code&nbsp;96)</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" name="dl[]"
                                                                id="dl_C" value="C">
                                                            <label class="form-check-label" for="dl_C">C</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" name="dl[]"
                                                                id="dl_CE" value="CE">
                                                            <label class="form-check-label" for="dl_CE">CE</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" name="dl[]"
                                                                id="dl_C1" value="C1">
                                                            <label class="form-check-label" for="dl_C1">C1</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" name="dl[]"
                                                                id="dl_C1E" value="C1E">
                                                            <label class="form-check-label" for="dl_C1E">C1E</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" name="dl[]"
                                                                id="dl_d" value="D">
                                                            <label class="form-check-label" for="dl_d">D</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" name="dl[]"
                                                                id="dl_THE" value="THE">
                                                            <label class="form-check-label" for="dl_THE">THE</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" name="dl[]"
                                                                id="dl_D1" value="D1">
                                                            <label class="form-check-label" for="dl_D1">D1</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" name="dl[]"
                                                                id="dl_T" value="T">
                                                            <label class="form-check-label" for="dl_T">T</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" name="dl[]"
                                                                id="dl_none" value="NDL" checked>
                                                            <label class="form-check-label" for="dl_none">Geen rijbewijs</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>Geslacht</label>
                                                    <div class="form-check">
                                                        <span class="gender-group">
                                                            <input type="radio" class="form-check-input" name="gender" id="male" value="Vrouw" checked>
                                                            <label class="form-check-label" for="male">Vrouw</label>
                                                        </span>

                                                        <span class="gender-group">
                                                            <input type="radio" class="form-check-input" name="gender" id="female" value="Man">
                                                            <label class="form-check-label" for="female">Man</label>
                                                        </span>
                                                        
                                                        <span class="gender-group">
                                                            <input type="radio" class="form-check-input" name="gender" id="pntd" value="Non-binair">
                                                            <label class="form-check-label" for="pntd">Non-binair</label>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-5">
                                                <div class="form-group">
                                                    <label>Voornaam</label>
                                                    <input type="text" class="form-control" name="firstname">
                                                    <div class="invalid-feedback">Enter voornaam</div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Tussenvoegsels</label>
                                                    <input type="text" class="form-control" name="infixes">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label>Achternaam</label>
                                                    <input type="text" class="form-control" name="lastname">
                                                    <div class="invalid-feedback">Enter achternaam</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Geboortedatum</label>
                                                    <select class="form-control day" name="dobDay">
                                                        <option value="" selected disabled></option>
                                                    </select>
                                                    <div class="invalid-feedback">Selecteer dag</div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label>&nbsp;</label>
                                                    <select class="form-control month" name="dobMonth">
                                                        <option value="" selected disabled></option>
                                                    </select>
                                                    <div class="invalid-feedback">Selecteer maand </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>&nbsp;</label>
                                                    <select class="form-control year" name="dobYear">
                                                        <option value="" selected disabled></option>
                                                    </select>
                                                    <div class="invalid-feedback">Selecteer jaar</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <hr>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>E-mailadres</label>
                                                    <input type="email" class="form-control" name="email">
                                                    <div class="invalid-feedback">Enter e-mailadres</div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>Telefoonnummer</label>
                                                    <input type="text" class="form-control" name="phonenumber">
                                                    <div class="invalid-feedback">Enter telefoonnummer</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <hr>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Postcode</label>
                                                    <input type="text" class="form-control" name="postalcode">
                                                    <div class="invalid-feedback">Enter postcode</div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Huisnummer</label>
                                                    <input type="text" class="form-control" name="housenumber">
                                                    <div class="invalid-feedback">Enter huisnummer</div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label>Toevoeging</label>
                                                    <input type="text" class="form-control" name="addon">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>Straat</label>
                                                    <input type="text" class="form-control" name="street">
                                                    <div class="invalid-feedback">Enter straat</div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>Woonplaats</label>
                                                    <input type="text" class="form-control" name="residence">
                                                    <div class="invalid-feedback">Enter woonplaats</div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>Land</label>
                                                    <input type="text" class="form-control" name="country">
                                                    <div class="invalid-feedback">Enter land</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 no-pad text-center text-lg-right text-md-right">
                                <div class="btn-container">
                                    <button class="btn btn-primary btn-prev" onclick="page(1)">Vorige</button>
                                    <button class="btn btn-primary btn-next" onclick="personalInformation()">Volgende</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END PAGE 2 -------------------------------------------------------------------->

                    <!-- PAGE 3 -------------------------------------------------------------------->
                    <div class="cv-pages" id="page3">
                        <div class="row">
                            <div class="col-lg-12 no-pad">
                                <div class="row">
                                    <div class="col-lg-12 order-2 order-lg-1">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <h3>Opleidingen</h3>
                                            </div>
                                            <div class="col-lg-6 text-lg-right text-sm-left">
                                                <h3 class="steps">Stap 2 van 6</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 order-1 order-lg-2 mb-3">
                                        <div class="row">
                                            <div class="col-2 tab">
                                                <span class="page-tab active">
                                                    <hr></span>
                                            </div>
                                            <div class="col-2 tab">
                                                <span class="page-tab active">
                                                    <hr></span>
                                            </div>
                                            <div class="col-2 tab">
                                                <span class="page-tab">
                                                    <hr></span>
                                            </div>
                                            <div class="col-2 tab">
                                                <span class="page-tab">
                                                    <hr></span>
                                            </div>
                                            <div class="col-2 tab">
                                                <span class="page-tab">
                                                    <hr></span>
                                            </div>
                                            <div class="col-2 tab">
                                                <span class="page-tab">
                                                    <hr></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 mt-4 no-pad">
                                <div class="alert alert-danger" role="alert">
                                    Als je geen opleiding wil toevoegen, kun je deze <a href="javascript:void(0)"
                                        onclick="page(4)">stap overslaan.</a>
                                </div>
                            </div>
                            <div class="col-12 no-pad form-bg" id="eI_form">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Opleidingsrichting</label>
                                            <input type="text" class="form-control" name="educationaldirection">
                                            <div class="invalid-feedback">Enter opleidingsrichting</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Niveau</label>
                                            <input type="text" class="form-control" name="level">
                                            <div class="invalid-feedback">Enter niveau</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Onderwijsinstelling</label>
                                            <input type="text" class="form-control" name="educationalinstitution">
                                            <div class="invalid-feedback">Enter onderwijsinstelling </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Locatie</label>
                                            <input type="text" class="form-control" name="location">
                                            <div class="invalid-feedback">Enter locatie</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>Van</label>
                                            <select class="form-control year" name="by">
                                                <option value="" selected disabled></option>
                                            </select>
                                            <div class="invalid-feedback">Selecteer jaar</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>Tot</label>
                                            <select class="form-control year" name="until">
                                                <option value="" selected disabled></option>
                                            </select>
                                            <div class="invalid-feedback">Selecteer jaar</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Opleiding afgerond?</label>
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="educationcompleted"
                                                    id="ecYes" value="Ja" checked>
                                                <label class="form-check-label" for="ecYes">Ja</label>

                                                <input type="radio" class="form-check-input" name="educationcompleted"
                                                    id="ecNo" value="Nee">
                                                <label class="form-check-label" for="ecNo">Nee</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Beschrijving</label>
                                            <textarea class="form-control" name="description" rows="4"
                                                maxlength="200"></textarea>
                                            <div class="invalid-feedback">Enter beschrijving</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-lg-12">
                                        <button class="btn btn-primary btn-cancel" onclick="cancel_eI()">Annuleer</button>
                                        <button class="btn btn-primary btn-add" id="eI_btnAddSave"
                                            onclick="add_eI()">Toevoegen</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="row" id="eI_data">

                                </div>
                            </div>
                            <div class="col-lg-6 no-pad text-center text-lg-left text-md-left">
                                <div class="btn-container" id="addMore_eI" style="display: none;">
                                    <button class="btn btn-primary btn-cancel" onclick="addMore_eI()">Toevoegen</button>
                                </div>
                            </div>
                            <div class="col-lg-6 no-pad text-center text-lg-right text-md-right">
                                <div class="btn-container">
                                    <button class="btn btn-primary btn-prev" onclick="page(2)">Vorige</button>
                                    <button class="btn btn-primary btn-next" onclick="page(4)">Volgende</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END PAGE 3 -------------------------------------------------------------------->

                    <!-- PAGE 4 -------------------------------------------------------------------->
                    <div class="cv-pages" id="page4">
                        <div class="row">
                            <div class="col-lg-12 no-pad">
                                <div class="row">
                                    <div class="col-lg-12 order-2 order-lg-1">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <h3>Werkervaring</h3>
                                            </div>
                                            <div class="col-lg-6 text-lg-right text-sm-left">
                                                <h3 class="steps">Stap 3 van 6</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 order-1 order-lg-2 mb-3">
                                        <div class="row">
                                            <div class="col-2 tab">
                                                <span class="page-tab active">
                                                    <hr></span>
                                            </div>
                                            <div class="col-2 tab">
                                                <span class="page-tab active">
                                                    <hr></span>
                                            </div>
                                            <div class="col-2 tab">
                                                <span class="page-tab active">
                                                    <hr></span>
                                            </div>
                                            <div class="col-2 tab">
                                                <span class="page-tab">
                                                    <hr></span>
                                            </div>
                                            <div class="col-2 tab">
                                                <span class="page-tab">
                                                    <hr></span>
                                            </div>
                                            <div class="col-2 tab">
                                                <span class="page-tab">
                                                    <hr></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mt-4 no-pad form-bg" id="wE_form">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Functie</label>
                                            <input type="text" class="form-control" name="we_jobtitle">
                                            <div class="invalid-feedback">Enter functie</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Bedrijfsnaam</label>
                                            <input type="text" class="form-control" name="we_companyname">
                                            <div class="invalid-feedback">Enter bedrijfsnaam</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Locatie</label>
                                            <input type="text" class="form-control" name="we_location">
                                            <div class="invalid-feedback">Enter locatie</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Beschrijving</label>
                                            <input type="text" class="form-control" name="we_description"
                                                maxlength="150">
                                            <div class="invalid-feedback">Enter beschrijving</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>Van</label>
                                            <select class="form-control month" name="we_byMonth">
                                                <option value="" selected disabled></option>
                                            </select>
                                            <div class="invalid-feedback">Selecteer maand</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <label>&nbsp;</label>
                                            <select class="form-control year" name="we_byYear">
                                                <option value="" selected disabled></option>
                                            </select>
                                            <div class="invalid-feedback">Selecteer jaar</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>Tot</label>
                                            <select class="form-control month" name="we_untilMonth">
                                                <option value="" selected disabled></option>
                                            </select>
                                            <div class="invalid-feedback">Selecteer maand</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <label>&nbsp;</label>
                                            <select class="form-control year" name="we_untilYear">
                                                <option value="" selected disabled></option>
                                            </select>
                                            <div class="invalid-feedback">Selecteer jaar</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="we_iswh">
                                            <label class="form-check-label" for="we_iswh">Ik werk hier nog</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-lg-12">
                                        <button class="btn btn-primary btn-cancel" onclick="cancel_wE()">Annuleer</button>
                                        <button class="btn btn-primary btn-add" onclick="add_wE()"
                                            id="wE_btnAddSave">Toevoegen</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="row" id="wE_data">

                                </div>
                            </div>
                            <div class="col-lg-6 no-pad text-center text-lg-left text-md-left">
                                <div class="btn-container" id="addMore_wE" style="display: none;">
                                    <button class="btn btn-primary btn-cancel" onclick="addMore_wE()">Toevoegen</button>
                                </div>
                            </div>
                            <div class="col-lg-12 no-pad text-center text-lg-right text-md-right">
                                <div class="btn-container">
                                    <button class="btn btn-primary btn-prev" onclick="page(3)">Vorige</button>
                                    <button class="btn btn-primary btn-next" onclick="page(5)">Volgende</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END PAGE 4 -------------------------------------------------------------------->

                    <!-- PAGE 5 -------------------------------------------------------------------->
                    <div class="cv-pages" id="page5">
                        <div class="row">
                            <div class="col-lg-12 no-pad">
                                <div class="row">
                                    <div class="col-lg-12 order-2 order-lg-1">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <h3>Vaardigheden</h3>
                                            </div>
                                            <div class="col-lg-6 text-lg-right text-sm-left">
                                                <h3 class="steps">Stap 4 van 6</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 order-1 order-lg-2 mb-3">
                                        <div class="row">
                                            <div class="col-2 tab">
                                                <span class="page-tab active">
                                                    <hr></span>
                                            </div>
                                            <div class="col-2 tab">
                                                <span class="page-tab active">
                                                    <hr></span>
                                            </div>
                                            <div class="col-2 tab">
                                                <span class="page-tab active">
                                                    <hr></span>
                                            </div>
                                            <div class="col-2 tab">
                                                <span class="page-tab active">
                                                    <hr></span>
                                            </div>
                                            <div class="col-2 tab">
                                                <span class="page-tab">
                                                    <hr></span>
                                            </div>
                                            <div class="col-2 tab">
                                                <span class="page-tab">
                                                    <hr></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mt-4 no-pad form-bg">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Waar heb je kennis van?</label>
                                            <div class="input-group mb-1">
                                                <input type="text" class="form-control" name="js_knowAbout">
                                                <div class="input-group-append">
                                                    <button class="btn btn-primary btn-plus" type="button" data-toggle="tooltip" data-placement="bottom" title="Toevoegen"
                                                        onclick="add_knowAbout()">
                                                        <i class="far fa-plus"></i>
                                                    </button>
                                                </div>
                                                <div class="invalid-feedback">Enter waar heb je kennis van</div>
                                            </div>
                                            <div class="float-right" id="counter_knowAbout">0/5</div>
                                            <small>Bijvoorbeeld: Word, Excel, Photoshop, administratie, etc.</small>
                                        </div>
                                        <div class="row mb-3" id="item_knowAbout">

                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Welke talen spreek je?</label>
                                            <div class="input-group mb-1">
                                                <input type="text" class="form-control" name="js_language">
                                                <div class="input-group-append">
                                                    <button class="btn btn-primary btn-plus" type="button" data-toggle="tooltip" data-placement="bottom" title="Toevoegen"
                                                        onclick="add_language()">
                                                        <i class="far fa-plus"></i>
                                                    </button>
                                                </div>
                                                <div class="invalid-feedback">Enter welke talen spreek je</div>
                                            </div>
                                            <div class="float-right" id="counter_language">0/5</div>
                                            <small>Bijvoorbeeld: Engels, Nederlands, Duits, etc.</small>
                                        </div>
                                        <div class="row mb-3" id="item_language">

                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Welke certificaten heb je?</label>
                                            <div class="input-group mb-1">
                                                <input type="text" class="form-control" name="js_certificates">
                                                <div class="input-group-append">
                                                    <button class="btn btn-primary btn-plus" type="button" data-toggle="tooltip" data-placement="bottom" title="Toevoegen"
                                                        onclick="add_certificates()">
                                                        <i class="far fa-plus"></i>
                                                    </button>
                                                </div>
                                                <div class="invalid-feedback">Enter certificaten heb je</div>
                                            </div>
                                            <div class="float-right" id="counter_certificates">0/5</div>
                                            <small>Bijvoorbeeld: heftruckcertificaat, BHV, EHBO, etc.</small>
                                        </div>
                                        <div class="row mb-3" id="item_certificates">

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 no-pad text-center text-lg-right text-md-right">
                                <div class="btn-container">
                                    <button class="btn btn-primary btn-prev" onclick="page(4)">Vorige</button>
                                    <button class="btn btn-primary btn-next" onclick="jobSkills()">Volgende</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END PAGE 5 -------------------------------------------------------------------->

                    <!-- PAGE 6 -------------------------------------------------------------------->
                    <div class="cv-pages" id="page6">
                        <div class="row">
                            <div class="col-lg-12 no-pad">
                            <div class="row">
                                    <div class="col-lg-12 order-2 order-lg-1">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <h3>Persoonlijke eigenschappen</h3>
                                            </div>
                                            <div class="col-lg-6 text-lg-right text-sm-left">
                                                <h3 class="steps">Stap 5 van 6</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 order-1 order-lg-2 mb-3">
                                        <div class="row">
                                            <div class="col-2 tab">
                                                <span class="page-tab active">
                                                    <hr></span>
                                            </div>
                                            <div class="col-2 tab">
                                                <span class="page-tab active">
                                                    <hr></span>
                                            </div>
                                            <div class="col-2 tab">
                                                <span class="page-tab active">
                                                    <hr></span>
                                            </div>
                                            <div class="col-2 tab">
                                                <span class="page-tab active">
                                                    <hr></span>
                                            </div>
                                            <div class="col-2 tab">
                                                <span class="page-tab active">
                                                    <hr></span>
                                            </div>
                                            <div class="col-2 tab">
                                                <span class="page-tab">
                                                    <hr></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 no-pad form-bg">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Wat zijn je persoonlijke eigenschappen?</label>
                                            <input type="text" class="form-control" name="ay_characteristics"
                                                maxlength="200">
                                            <div class="invalid-feedback">Enter persoonlijke eigenschappen</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Over jezelf</label>
                                            <input type="text" class="form-control" name="ay_about" maxlength="300">
                                            <div class="invalid-feedback">Enter over jezelf</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Wat zijn je hobby's?</label>
                                            <input type="text" class="form-control" name="ay_hobbies" maxlength="200">
                                            <div class="invalid-feedback">Enter hobby's</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Wat zijn je secondaire activiteiten?</label>
                                            <input type="text" class="form-control" name="ay_activities"
                                                maxlength="200">
                                            <div class="invalid-feedback">Enter secondaire activiteiten</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 no-pad text-center text-lg-right text-md-right">
                                <div class="btn-container">
                                    <button class="btn btn-primary btn-prev" onclick="page(5)">Vorige</button>
                                    <button class="btn btn-primary btn-next" onclick="aboutYourself()">Volgende</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END PAGE 6 -------------------------------------------------------------------->

                    <!-- PAGE 7 -------------------------------------------------------------------->
                    <div class="cv-pages" id="page7">
                        <div class="row">
                            <div class="col-lg-12 no-pad">
                            <div class="row">
                                    <div class="col-lg-12 order-2 order-lg-1">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <h3>Overige informatie</h3>
                                            </div>
                                            <div class="col-lg-6 text-lg-right text-sm-left">
                                                <h3 class="steps">Stap 6 van 6</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 order-1 order-lg-2 mb-3">
                                        <div class="row">
                                            <div class="col-2 tab">
                                                <span class="page-tab active">
                                                    <hr></span>
                                            </div>
                                            <div class="col-2 tab">
                                                <span class="page-tab active">
                                                    <hr></span>
                                            </div>
                                            <div class="col-2 tab">
                                                <span class="page-tab active">
                                                    <hr></span>
                                            </div>
                                            <div class="col-2 tab">
                                                <span class="page-tab active">
                                                    <hr></span>
                                            </div>
                                            <div class="col-2 tab">
                                                <span class="page-tab active">
                                                    <hr></span>
                                            </div>
                                            <div class="col-2 tab">
                                                <span class="page-tab active">
                                                    <hr></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 no-pad form-bg">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Kies de locatie die je voorkeur heeft</label>
                                            <div class="mapouter">
                                                <div class="gmap_canvas">
                                                    <iframe width="100%" height="300" id="gmap_canvas"
                                                        src="https://maps.google.com/maps?q=Burgemeester%20Bosmastraat%203,%207101%20DE%20Winterswijk,%20Netherlands&t=&z=16&ie=UTF8&iwloc=&output=embed"
                                                        frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                                                    </iframe>
                                                    <style>
                                                        .mapouter {
                                                            position: relative;
                                                            text-align: right;
                                                            height: 300px;
                                                            width: 100%;
                                                        }
                                                    </style>
                                                    <style>
                                                        .gmap_canvas {
                                                            overflow: hidden;
                                                            background: none !important;
                                                            height: 300px;
                                                            width: 100%;
                                                        }
                                                    </style>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label style="font-size: 22px;">TipTop personeelsdiensten</label>
                                            <p style="font-weight: 500;">Burgemeester bosmastraat 3, Winterswijk</p>
                                        </div>
                                        <hr>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="accept">
                                            <label class="form-check-label" for="accept">
                                                Wij verwerken je persoonsgegevens in het kader van je sollicitatie, op je cv en eventuele 
                                                tewerkstelling. Wij behandelen je gegevens met de nodige zorg. Meer hierover lees je in onze 
                                                privacyverklaring. Om actief te kunnen bemiddelen, vragen wij graag je toestemming om deze 
                                                gegevens te verwerken en eventueel aan derden, waaronder opdrachtgevers, te verstrekken.
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 no-pad text-center text-lg-right text-md-right">
                                <div class="btn-container">
                                    <button class="btn btn-primary btn-prev" onclick="page(6)">Vorige</button>
                                    <button class="btn btn-primary btn-next" onclick="page(0)" id="btn_done"
                                        disabled>Klaar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END PAGE 7 -------------------------------------------------------------------->
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="modalCropper" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Foto bijsnijden</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12" id="cropImage" style="height: 500px;"></div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Sluiten</button>
                    <button type="button" class="btn btn-primary" onclick="crop()">Bijsnijden</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-1.12.4.min.js"
        integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
    <script src="plugins/owlcarousel/owl.carousel.min.js"></script>
    <script src="plugins/croppie/croppie.js"></script>

    <script src="js/main.js"></script>
    <script src="js/json_pI.js"></script>
    <script src="js/json_eI.js"></script>
    <script src="js/json_wE.js"></script>
    <script src="js/json_jS.js"></script>
    <script src="js/json_aY.js"></script>
</body>

</html>