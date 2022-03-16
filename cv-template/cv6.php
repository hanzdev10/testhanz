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
            background: gray;
        }

        /* ----------------------------------------------------------------------- */

        .body-left {
            position: absolute;
            top: 0px;
            height: 1123px;
            width: 507px;
            background: #eff5fa;
        }
        
        .body-left .content {
            color: #2b452e;
            margin-right: 20px;
            margin-left: 20px;
            margin-top: 20px;
            display: block;
        }

        .body-left .content .name {
            font-size: 32px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .body-left .content .address, .phone, .mail {
            margin-bottom: 10px;
            font-size: 12px;
            font-weight: bold;
            font-family: "Helvetica";
            color: black;
        }
        
        .body-left .content .profile {
            margin-top: 20px;
            font-weight: bold;
            font-size: 16px;
            color: #2b452e;
            margin-bottom: 10px;
        }

        .body-left .content .profile-content {
            font-size: 12px;
            color: black;
            margin-bottom: 20px;
        }

        .body-left .content .title {
            font-weight: bold;
            font-size: 14px;
            color: #13351e;
            margin-bottom: 10px;
            border-bottom: 1px solid black;
            padding-bottom: 10px;
        }

        .body-left .content .we-list {
            margin-bottom: -50px;
        }

        .body-left .content .we-list .left {
            width: 180px;
            display: inline-block;
            vertical-align: top;
            color: rgb(14, 32, 49);
        }

        .body-left .content .we-list .left .company {
            font-size: 12px;
            font-weight: bolder;
            display: block;
            margin-bottom: 5px;
        }

        .body-left .content .we-list .left .location  {
            font-size: 11px;
            display: block;
            margin-bottom: 5px;
        }
        
        .body-left .content .we-list .left .byUntil {
            font-size: 11px;
            display: block;
        }

        .body-left .content .we-list .right {
            width: 287px;
            display: inline-block;
            color: rgb(14, 32, 49);
            vertical-align: top;
            overflow-wrap: break-word;
        }

        .body-left .content .we-list .right .job {
            font-size: 12px;
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        .body-left .content .we-list .right .description {
            font-size: 11px;
            display: block;
            margin-bottom: 5px;
        }

        /* --------------------------------------------------------------- */

        .body-right {
            position: absolute;
            top: 0px;
            left: 507px;
            height: 1123px;
            width: 287px;
            background: #e4ebf0;
        }
        
        .body-right .content {
            color: #2b452e;
            margin-right: 20px;
            margin-left: 20px;
            display: block;
        }

        .body-right .content .img-placeholder {
            width: 286px;
            height: 280px;
            z-index: 999;
            margin-left: -20px;
        }

        .body-right .content .img-placeholder .user-img {
            width: 286px;
            height: 280px;
            object-fit: cover;
        }

        .body-right .content .dateOfBirth, .language, .hobbies {
            font-weight: bold;
            font-size: 14px;
            margin-bottom: 10px;
            margin-top: 20px;
        }

        .body-right .content .dateOfBirth-content, .language-content, .hobbies-content {
            color: black;
            font-size: 12px;
        }

        .body-right .content .skills {
            font-size: 16px;
            display: block;
            margin-bottom: 20px;
            margin-top: 20px;
            font-weight: bold;
            
        }
        
        .body-right .content .skills-list {
            color: black;
            font-size: 12px;
            display: block;
        }

        .body-right .content .skills-list .list {
            width: 101px;
            display: inline-block;
            margin-bottom: 5px;
        }

        .body-right .content .skills-list .rate {
            width: 90px;
            display: inline-block;
        }

        .body-right .content .skills-list .rate .dot {
            height: 7px;
            width: 15px;
            background-color: rgba(33, 101, 89, .3);
            border-radius: 30%;
            display: inline-block;
        }

        .body-right .content .skills-list .rate .dot.checked {
            background-color: rgba(33, 101, 89, 1);
        }

        .body-right .content .title {
            font-weight: bold;
            font-size: 14px;
            color: #13351e;
            margin-bottom: 10px;
            margin-top: 20px;
        }

        .body-right .content .e-list {
            margin-bottom: 10px;
        }

        .body-right .content .e-list .left {
            width: 80px;
            display: inline-block;
            vertical-align: top;
            color: rgb(14, 32, 49);
        }

        .body-right .content .e-list .left .institute {
            font-size: 12px;
            font-weight: bolder;
            display: block;
            margin-bottom: 5px;
        }

        .body-right .content .e-list .left .location, .body-right .content .e-list .left .level  {
            font-size: 11px;
            display: block;
            margin-bottom: 5px;
        }
        
        .body-right .content .e-list .left .byUntil {
            font-size: 11px;
            display: block;
        }

        .body-right .content .e-list .right {
            width: 162px;
            display: inline-block;
            color: rgb(14, 32, 49);
            vertical-align: top;
            overflow-wrap: break-word;
        }

        .body-right .content .e-list .right .direction {
            font-size: 12px;
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        .body-right .content .e-list .right .description {
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

                <div class="profile">Profiel</div>
                <div class="profile-content">
                    <?php echo $_POST['json_aY']['ay_about']; ?>
                </div>

                <?php
                    $c_wE = count($_POST['json_wE']);
                    if ($c_wE > 0) {
                        echo '<div class="title">Werkervaring</div>';
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

            </div>
        </div>

        <div class="body-right">
            <div class="content">

                <div class="img-placeholder">
                    <img src="<?php echo $_POST['json_pI']['image']; ?>" class="user-img">
                </div>

                <div class="dateOfBirth">Geboortedatum</div>
                <div class="dateOfBirth-content">
                    <?php 
                        echo $_POST['json_pI']['dobDay'] . ' ' . $_POST['json_pI']['dobMonth'] . ', ' . $_POST['json_pI']['dobYear'];
                    ?>
                </div>

                <div class="hobbies">Hobby's</div>
                <div class="hobbies-content">
                    <?php echo $_POST['json_aY']['ay_hobbies']; ?>
                </div>

                <div class="language">Taal</div>
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

                <span class="skills">Vaardigheden</span>
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

                <?php
                    $c_eI = isset($_POST['json_eI']) ? count($_POST['json_eI']) : 0;
                    if ($c_eI > 0) {
                        echo '<div class="title">Educatie</div>';

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