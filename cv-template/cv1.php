<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <style>
        @page { 
            margin: 0;
            padding: 0;
            width: 0;
            height: 0;
            font-family: "Helvetica";
        }
        body { 
            margin: 0; 
            padding: 0;
            width: 0;
            height: 0;
            font-family: "Helvetica";
        }
        
        #cv {
            position: relative;
            width: 210mm;
            height: 297mm;
        }

        .header {
            background-color: rgb(14, 32, 49);
            height: 297px;
        }

        .header .img-placeholder {
            display: inline-block;
            position: absolute;
            width: 264px;
            height: 297px;
            background: red;
        }

        .header .img-placeholder .user-img {
            width: 264px;
            height: 297px;
            object-fit: cover;
        }

        .header .left {
            display: inline-block;
            position: absolute;
            left: 264px;
            width: 264px;
            height: 297px;
        }

        .header .left .dash::before {
            position: absolute;
            top: 25px;
            content: "";
            border-top: 5px solid #f04e37;
            width: 50px;
            margin-left: 30px;
        }
        
        .header .left .firstname {
            margin-top: 25px;
            color: white;
            font-weight: normal;
            font-size: 55px;
            margin-left: 30px;
            display: block;
        }

        .header .left .lastname {
            color: white;
            font-weight: bold;
            font-size: 55px;
            margin-left: 30px;
            display: block;
            margin-bottom: 20px;
        }

        .header .left .address, .phone, .mail {
            margin-bottom: 10px;
            font-weight: normal;
            font-size: 12px;
            color: #dddddd;
            margin-left: 30px;
            display: block;
        }

        /* ---------------------------- */

        .header .right {
            display: inline-block;
            position: absolute;
            left: 530px;
            width: 264px;
            height: 297px;
        }

        .header .right .profile {
            position: absolute;
            top: 40px;
            color: #f04e37;
            font-weight: bold;
            font-size: 14px;
            margin-left: 30px;
            margin-right: 20px;
            display: inline-block;
        }

        .header .right .content {
            position: absolute;
            top: 70px;
            color: #dddddd;
            font-weight: normal;
            font-size: 12px;
            margin-left: 30px;
            margin-right: 20px;
            display: inline-block;
        }

        /* ---------------------------- */

        i {
            color: #f04e37;
            margin-right: 20px;
        }

        /* ---------------------------- */

        .body-left {
            position: absolute;
            top: 297px;
            height: 825px;
            width: 264px;
            background: rgb(224, 230, 238);
        }

        .body-left .content {
            position: absolute;
            top: 30px;
            color: white;
            margin-left: 30px;
            margin-right: 20px;
            display: block;
        }

        .body-left .content .dateOfBirth {
            color: rgb(14, 32, 49);
            font-weight: bold;
            font-size: 14px;
            display: inline-block;
            margin-bottom: 20px;
        }

        .body-left .content .dateOfBirth-content {
            color: rgb(14, 32, 49);
            font-weight: normal;
            font-size: 12px;
            padding-bottom: 30px;
            display: block;
            border-bottom: 3px solid rgba(240, 78, 55, .5);
            margin-bottom: 50px;
            width: 200px;
        }

        .body-left .content .hobbies {
            color: rgb(14, 32, 49);
            font-weight: bold;
            font-size: 14px;
            display: inline-block;
            margin-bottom: 20px;
        }

        .body-left .content .hobbies-content {
            color: rgb(14, 32, 49);
            font-weight: normal;
            font-size: 12px;
            padding-bottom: 30px;
            display: block;
            border-bottom: 3px solid rgba(240, 78, 55, .5);
            margin-bottom: 50px;
            width: 200px;
        }

        .body-left .content .skills {
            color: rgb(14, 32, 49);
            font-weight: bold;
            font-size: 14px;
            display: block;
            margin-bottom: 20px;
        }
        

        .body-left .content .skills-list {
            color: rgb(14, 32, 49);
            font-weight: normal;
            font-size: 12px;
            display: block;
            padding-bottom: 30px;
            border-bottom: 3px solid rgba(240, 78, 55, .5);
            margin-bottom: 50px;
        }

        .body-left .content .language {
            color: rgb(14, 32, 49);
            font-weight: bold;
            font-size: 14px;
            display: block;
            margin-bottom: 20px;
        }
        

        .body-left .content .language-list {
            color: rgb(14, 32, 49);
            font-weight: normal;
            font-size: 12px;
            display: block;
            padding-bottom: 30px;
            border-bottom: 3px solid rgba(240, 78, 55, .5);
            margin-bottom: 50px;
        }

        .body-left .content .skills-list .list, .body-left .language-list .list {
            width: 130px;
            display: inline-block;
        }

        .body-left .content .skills-list .rate, .body-left .language-list .rate {
            width: 70px;
            display: inline-block;
        }

        .body-left .content .skills-list .rate .dot, .body-left .language-list .rate .dot {
            height: 10px;
            width: 10px;
            background-color: rgba(240, 78, 55, .3);
            border-radius: 20%;
            display: inline-block;
        }

        .body-left .content .skills-list .rate .dot.checked, .body-left .language-list .rate .dot.checked {
            background-color: rgba(240, 78, 55, 1);
        }

        .body-left .content .certificate {
            color: rgb(14, 32, 49);
            font-weight: bold;
            font-size: 14px;
            display: block;
            margin-bottom: 20px;
        }

        .body-left .content .certificate-content {
            color: rgb(14, 32, 49);
            font-weight: normal;
            font-size: 12px;
            padding-bottom: 30px;
            display: block;
            border-bottom: 3px solid rgba(240, 78, 55, .5);
        }


        /* ------------------------------------- */

        .body-right {
            position: absolute;
            top: 297px;
            left: 264px;
            height: 825px;
            width: 530px;
            background: rgb(239, 245, 250);
        }

        .body-right .content {
            position: absolute;
            top: 20px;
            color: white;
            margin-left: 30px;
            margin-right: 20px;
            display: block;
        }

        .body-right .content .title {
            color: white;
            font-weight: bold;
            font-size: 14px;
            display: inline-block;
            background: rgba(240, 78, 55, 1);
            padding: 5px;
            margin-bottom: 20px;
        }

        .body-right .content .we-list, .body-right .content .e-list {
            margin-bottom: 10px;
        }

        .body-right .content .we-list .left, .body-right .content .e-list .left {
            width: 180px;
            display: inline-block;
            vertical-align: top;
            color: rgb(14, 32, 49);
        }

        .body-right .content .we-list .left .company, .body-right .content .e-list .left .institute {
            font-size: 12px;
            font-weight: bolder;
            display: block;
            margin-bottom: 5px;
        }

        .body-right .content .we-list .left .location, .body-right .content .e-list .left .location, .body-right .content .e-list .left .level  {
            font-size: 11px;
            display: block;
            margin-bottom: 5px;
        }
        
        .body-right .content .we-list .left .byUntil, .body-right .content .e-list .left .byUntil {
            font-size: 11px;
            display: block;
        }

        .body-right .content .we-list .right, .body-right .content .e-list .right {
            width: 285px;
            display: inline-block;
            color: rgb(14, 32, 49);
            vertical-align: top;
            overflow-wrap: break-word;
        }

        .body-right .content .we-list .right .job, .body-right .content .e-list .right .direction {
            font-size: 12px;
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        .body-right .content .we-list .right .description, .body-right .content .e-list .right .description {
            font-size: 11px;
            display: block;
            margin-bottom: 5px;
        }

    </style>

</head>

<body>

    <div id="cv">
        <div class="header">
            <div class="img-placeholder">
                <img src="<?php echo $_POST['json_pI']['image']; ?>" class="user-img">
            </div>
            <div class="left">
                <span class="dash"></span>
                <span class="firstname">
                    <?php echo $_POST['json_pI']['firstname']; ?>
                </span>
                <span class="lastname">
                    <?php echo $_POST['json_pI']['lastname']; ?>
                </span>
                <span class="jobtitle">
                    <!-- Software Engineer -->
                </span>
                <span class="address"><i class="fa fa-map-marker"></i> 
                    <?php
                        $addr = '';
                        $addr .= $_POST['json_pI']['postalcode'] . ', ';
                        $addr .= $_POST['json_pI']['housenumber'] . ', ';
                        $addr .= $_POST['json_pI']['street'] . ', ';
                        $addr .= $_POST['json_pI']['residence'] . ', ';
                        $addr .= $_POST['json_pI']['country'] . ' ' . $_POST['json_pI']['addon'];

                        echo $addr;
                    ?>
                </span>
                <span class="phone"><i class="fa fa-phone"></i> 
                    <?php echo $_POST['json_pI']['phonenumber'] ?>
                </span>
                <span class="mail"><i class="fa fa-envelope"></i> 
                    <?php echo $_POST['json_pI']['email']; ?>
                </span>
            </div>
            <div class="right">
                <span class="profile">PROFIEL</span>
                <span class="content">
                    <?php echo $_POST['json_aY']['ay_about']; ?>
                </span>
            </div>
        </div>
        <div class="body-left">
            <div class="content">
                <span class="dateOfBirth">GEBOORTEDATUM</span>
                <span class="dateOfBirth-content">
                    <?php 
                        echo $_POST['json_pI']['dobDay'] . ' ' . $_POST['json_pI']['dobMonth'] . ', ' . $_POST['json_pI']['dobYear'];
                    ?>
                </span>
                <span class="skills">VAARDIGHEDEN</span>
                <span class="skills-list">
                    <?php
                        $c_kA = count($_POST['json_jS_knowAbout']);
                        if ($c_kA > 0) {
                            for ($i=0; $i<$c_kA; $i++) { 
                                $rate1 = $_POST['json_jS_knowAbout'][$i]['rate'] >= 1 ? 'checked' : '';
                                $rate2 = $_POST['json_jS_knowAbout'][$i]['rate'] >= 2 ? 'checked' : '';
                                $rate3 = $_POST['json_jS_knowAbout'][$i]['rate'] >= 3 ? 'checked' : '';
                                $rate4 = $_POST['json_jS_knowAbout'][$i]['rate'] >= 4 ? 'checked' : '';
                                $rate5 = $_POST['json_jS_knowAbout'][$i]['rate'] >= 5 ? 'checked' : '';

                                echo '<div>
                                        <span class="list">
                                            '.$_POST['json_jS_knowAbout'][$i]['title'].'
                                        </span> 
                                        <span class="rate">
                                            <span class="dot '.$rate1.'"></span>
                                            <span class="dot '.$rate2.'"></span>
                                            <span class="dot '.$rate3.'"></span>
                                            <span class="dot '.$rate4.'"></span>
                                            <span class="dot '.$rate5.'"></span>
                                        </span>
                                    </div>';
                            }
                        }
                    ?>
                </span>
                <span class="hobbies">HOBBY'S</span>
                <span class="hobbies-content">
                    <?php echo $_POST['json_aY']['ay_hobbies']; ?>
                </span>
                <span class="language">TAAL</span>
                <span class="language-list">
                    <?php
                        $c_L = count($_POST['json_jS_language']);
                        if ($c_L > 0) {
                            for ($i=0; $i<$c_L; $i++) { 
                                $rate1L = $_POST['json_jS_language'][$i]['rate'] >= 1 ? 'checked' : '';
                                $rate2L = $_POST['json_jS_language'][$i]['rate'] >= 2 ? 'checked' : '';
                                $rate3L = $_POST['json_jS_language'][$i]['rate'] >= 3 ? 'checked' : '';
                                $rate4L = $_POST['json_jS_language'][$i]['rate'] >= 4 ? 'checked' : '';
                                $rate5L = $_POST['json_jS_language'][$i]['rate'] >= 5 ? 'checked' : '';

                                echo '<div>
                                        <span class="list">
                                            '.$_POST['json_jS_language'][$i]['title'].'
                                        </span> 
                                        <span class="rate">
                                            <span class="dot '.$rate1L.'"></span>
                                            <span class="dot '.$rate2L.'"></span>
                                            <span class="dot '.$rate3L.'"></span>
                                            <span class="dot '.$rate4L.'"></span>
                                            <span class="dot '.$rate5L.'"></span>
                                        </span>
                                    </div>';
                            }
                        }
                    ?>
                </span>
                <span class="certificate">CERTIFICAAT</span>
                <span class="certificate-content">
                    <?php
                        $c_C = count($_POST['json_jS_certificates']);
                        $c = $c_C-1;
                        if ($c_C > 0) {
                            for ($i=0; $i<$c_C; $i++) { 
                                echo $_POST['json_jS_certificates'][$i]['title'];
                                echo $i != $c ? ', ' : '';
                            }
                        }
                    ?>
                </span>
            </div>
        </div>
        <div class="body-right">
            <div class="content">
                <?php
                    $c_wE = count($_POST['json_wE']);
                    if ($c_wE > 0) {
                        echo '<div class="title">WERKERVARING</div>';
                        for ($i=0; $i<$c_wE; $i++) { 
                            $wE_until = $_POST["json_wE"][$i]["we_untilMonth"] == null ? 'Tot Heden' : $_POST["json_wE"][$i]["we_untilMonth"].' '.$_POST["json_wE"][$i]["we_untilYear"];
                            echo '<div class="we-list">
                                    <span class="left">
                                        <span class="company">
                                            '.$_POST["json_wE"][$i]["we_companyname"].'
                                        </span>
                                        <span class="location">
                                            '.$_POST["json_wE"][$i]["we_location"].'
                                        </span>
                                        <span class="byUntil">
                                            '.$_POST["json_wE"][$i]["we_byMonth"].' '.$_POST["json_wE"][$i]["we_byYear"].' - '.$wE_until.'
                                        </span>
                                    </span>
                                    <span class="right">
                                        <span class="job">
                                            '.$_POST["json_wE"][$i]["we_jobtitle"].'
                                        </span>
                                        <span class="description">
                                            '.$_POST["json_wE"][$i]["we_description"].'
                                        </span>
                                    </span>
                                </div>';
                        }
                    }
                ?>
                <!-- EDUC --------------------------------------------- -->
                <?php
                    $c_eI = isset($_POST['json_eI']) ? count($_POST['json_eI']) : 0;
                    if ($c_eI > 0) {
                        echo '<div class="title" style="margin-top: 20px;">EDUCATIE</div>';

                        for ($i=0; $i<$c_eI; $i++) { 
                            echo '<div class="e-list">
                                        <span class="left">
                                            <span class="institute">
                                                '.$_POST['json_eI'][$i]["educationalinstitution"].'
                                            </span>
                                            <span class="location">
                                                '.$_POST['json_eI'][$i]["location"].'
                                            </span>
                                            <span class="level">
                                                '.$_POST['json_eI'][$i]["level"].'
                                            </span>
                                            <span class="byUntil">
                                                '.$_POST['json_eI'][$i]["by"].' - '.$_POST['json_eI'][$i]["until"].'
                                            </span>
                                        </span>
                                        <span class="right">
                                            <span class="direction">
                                                '.$_POST['json_eI'][$i]["educationaldirection"].'
                                            </span>
                                            <span class="description">
                                                '.$_POST['json_eI'][$i]["description"].'
                                            </span>
                                        </span>
                                    </div>';
                        }
                    }
                ?>
            </div>
        </div>
    </div>

</body>

</html>