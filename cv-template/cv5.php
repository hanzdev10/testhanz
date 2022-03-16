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
            font-family: "Times-Roman";
        }
        body { 
            margin: 0; 
            padding: 0;
            width: 0;
            height: 0;
            font-family: "Times-Roman";
        }
        
        #cv {
            position: relative;
            width: 210mm;
            height: 297mm;
            background: gray;
        }

        /* ----------------------------------------------------------------------- */

        .body-left {
            position: absolute;
            top: 0px;
            height: 1103px;
            width: 214px;
            background: #eff5fa;
            border-right: 1px solid black;
            border-bottom: 20px solid black;
        }
        
        .body-left .content {
            color: black;
            margin-right: 20px;
            margin-left: 20px;
            display: block;
        }

        .body-left .content .img-placeholder {
            width: 214px;
            height: 184px;
            z-index: 999;
            margin-left: -20px;
        }

        .body-left .content .img-placeholder .user-img {
            width: 214px;
            height: 184px;
            object-fit: cover;
        }

        .body-left .content .name {
            font-weight: bold;
            margin-top: 30px;
            font-size: 16px;
            border-bottom: 1px solid black;
            padding-bottom: 10px;
            margin-bottom: 40px;
        }

        .body-left .content .address, .phone, .mail {
            margin-bottom: 10px;
            font-size: 12px;
            font-weight: bold;
            font-family: "Helvetica";
        }

        .body-left .content .profile {
            margin-top: 40px;
            font-weight: bold;
            font-size: 16px;
            color: black;
            margin-bottom: 10px;
        }

        .body-left .content .profile-content {
            font-size: 12px;
            color: black;
        }

        .body-left .content .dateOfBirth, .language, .hobbies {
            font-weight: bold;
            color: black;
            font-size: 14px;
            margin-bottom: 10px;
            margin-top: 40px;
        }

        .body-left .content .dateOfBirth-content, .language-content, .hobbies-content {
            color: black;
            font-size: 12px;
        }

        .body-left .content .skills {
            color: black;
            font-size: 16px;
            display: block;
            margin-bottom: 20px;
            margin-top: 40px;
            font-weight: bold;
        }
        
        .body-left .content .skills-list {
            color: black;
            font-size: 12px;
            display: block;
        }

        .body-left .content .skills-list .list {
            width: 101px;
            display: inline-block;
        }

        .body-left .content .skills-list .rate {
            width: 70px;
            display: inline-block;
        }

        .body-left .content .skills-list .rate .dot {
            height: 7px;
            width: 10px;
            background-color: rgba(0, 0, 0, .3);
            display: inline-block;
        }

        .body-left .content .skills-list .rate .dot.checked {
            background-color: rgba(0, 0, 0, 1);
        }

        /* -------------------------------------------------------------------------------------------------- */
        
        .body-right {
            position: absolute;
            top: 0px;
            left: 215px;
            height: 1103px;
            width: 579px;
            background: #eff5fa;
            border-right: 1px solid black;
            border-bottom: 20px solid black;
        }
        
        .body-right .content {
            color: black;
            margin-right: 20px;
            margin-left: 20px;
            display: block;
        }

        .body-right .content .title {
            font-weight: bold;
            font-size: 14px;
            color: black;
            margin-bottom: 10px;
            margin-top: 20px;
            border-bottom: 1px solid black;
            padding-bottom: 10px;
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
            width: 355px;
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

        <div class="body-left">
            <div class="content">

                <div class="img-placeholder">
                    <img src="<?php echo $_POST['json_pI']['image']; ?>" class="user-img">
                </div>

                <div class="name"><?php echo $_POST['json_pI']['firstname'] . ' ' . $_POST['json_pI']['lastname']; ?></div>

                <div class="address">
                    <?php
                        $addr = '';
                        $addr .= $_POST['json_pI']['postalcode'] . ', ';
                        $addr .= $_POST['json_pI']['housenumber'] . ', ';
                        $addr .= $_POST['json_pI']['street'] . ', ';
                        $addr .= $_POST['json_pI']['residence'] . ', ';
                        $addr .= $_POST['json_pI']['country'] . ' ' . $_POST['json_pI']['addon'];

                        echo $addr;
                    ?>
                </div>
                <div class="phone">
                    <?php echo $_POST['json_pI']['phonenumber'] ?>
                </div>
                <div class="mail">
                    <?php echo $_POST['json_pI']['email']; ?>
                </div>

                <div class="profile">PROFIEL</div>
                <div class="profile-content">
                    <?php echo $_POST['json_aY']['ay_about']; ?>
                </div>

                <div class="dateOfBirth">GEBOORTEDATUM</div>
                <div class="dateOfBirth-content">
                    <?php 
                        echo $_POST['json_pI']['dobDay'] . ' ' . $_POST['json_pI']['dobMonth'] . ', ' . $_POST['json_pI']['dobYear'];
                    ?>
                </div>

                <div class="hobbies">HOBBY'S</div>
                <div class="hobbies-content">
                    <?php echo $_POST['json_aY']['ay_hobbies']; ?>
                </div>

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

                <div class="language">TAAL</div>
                <div class="language-content">
                    <?php
                        $c_L = count($_POST['json_jS_language']);
                        if ($c_L > 0) {
                            for ($i=0; $i<$c_L; $i++) { 
                                echo $_POST['json_jS_language'][$i]['title'];
                                if ($i < $c_L-1) {
                                    echo ', ';
                                }
                            }
                        }
                    ?>
                </div>

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

                <?php
                    $c_eI = isset($_POST['json_eI']) ? count($_POST['json_eI']) : 0;
                    if ($c_eI > 0) {
                        echo '<div class="title">EDUCATIE</div>';

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