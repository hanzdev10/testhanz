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

        .header {
            background-color: #f6f8fc;
            height: 84px;
        }

        .header .bg {
            position: absolute;
            right: -115px;
            width: 150px;
            height: 84px;
            background: #222c67;
            border-left: 15px solid #faa94f;
            transform: skewX(50deg);
        }

        .header .name {
            position: absolute;
            top: 10px;
            left: 218px;
            font-size: 42px;
            margin-right: 5px;
            color: #222c67;
            font-family: "Times-Roman";
        }

        .header .name > .lastname {
            color: #faa94f;
        }

        .header .divider {
            content: "";
            position: absolute;
            top: 60px;
            left: 218px;
            border-bottom: 1px solid #222c67;
            width: 500px;
        }
        

        /* ----------------------------------------------------------------------- */
        
        .img-placeholder {
            position: absolute;
            width: 198px;
            height: 243px;
            z-index: 999;
            top: 0px;
            left: 0px;
        }

        .img-placeholder .user-img {
            width: 198px;
            height: 243px;
            object-fit: cover;
        }

        /* ----------------------------------------------------------------------- */

        .body-left {
            position: absolute;
            top: 243px;
            height: 880px;
            width: 198px;
            background: #222c67;
        }
        
        .body-left .content {
            position: absolute;
            top: 0px;
            color: white;
            margin-left: 20px;
            margin-right: 20px;
            display: block;
        }

        .body-left .content .profile {
            font-size: 16px;
            color: #faa94f;
            margin-bottom: 15px;
            margin-right: -20px;
            margin-left: -20px;
            background: #2c3973;
            padding: 10px 20px;
            font-family: "Times-Roman";
        }

        .body-left .content .profile-content {
            font-size: 12px;
            color: white;
        }

        .body-left .content .dateOfBirth, .language, .hobbies {
            font-size: 16px;
            color: #faa94f;
            margin-top: 40px;
            margin-bottom: 15px;
            margin-right: -20px;
            margin-left: -20px;
            background: #2c3973;
            padding: 10px 20px;
            font-family: "Times-Roman";
        }

        .body-left .content .dateOfBirth-content, .language-content, .hobbies-content {
            color: white;
            font-size: 12px;
        }

        .body-left .content .info {
            position: absolute;
            top: 720px;
            background: #faa94f;
            margin-left: -20px;
            padding: 30px 20px 30px 20px;
            font-size: 12px;
            height: 100px;
            width: 158px;
        }

        .body-left .content .info > .address, .phone, .mail {
            margin-bottom: 10px;
            font-size: 12px;
            color: #2c3973;
            font-weight: bold;
        }

        /* --------------------------------------------------------------------------- */

        .body-right {
            position: absolute;
            top: 84px;
            left: 198px;
            height: 1039px;
            width: 596px;
            background-color: #f6f8fc;
        }

        .body-right .content {
            margin-left: 20px;
            margin-right: 20px;
            display: block;
        }

        .body-right .content .title {
            font-weight: bold;
            font-size: 14px;
            color: #faa94f;
            margin-bottom: 10px;
            margin-top: 20px;
            font-family: "Times-Roman";
            padding: 5px 5px 5px 5px;
            background: #2c3973;
            display: inline-block;
        }

        .body-right .content .we-list, .body-right .content .e-list {
            margin-bottom: 10px;
        }

        .body-right .content .we-list .left, .body-right .content .e-list .left {
            width: 180px;
            display: inline-block;
            vertical-align: top;
            color: rgb(14, 32, 49);
            border-right: 2px solid #faa94f;
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
            width: 345px;
            display: inline-block;
            color: rgb(14, 32, 49);
            vertical-align: top;
            overflow-wrap: break-word;
            margin-left: 20px;
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

        .body-right .content .skills-container {
            position: absolute;
            top: 859px;
            background: #eaeef2;
            margin-left: -20px;
            padding: 30px 20px 30px 20px;
            font-size: 12px;
            height: 100px;
            width: 556px;
        }

        .body-right .content .skills-container .skills {
            color: #faa94f;
            font-size: 16px;
            font-family: "Times-Roman";
            margin-bottom: 10px;
        }

        .body-right .content .skills-container .skills-list {
            color: #2c3973;
            font-size: 12px;
            font-weight: bold;
        }

        .body-right .content .skills-container .skills-list div > .skill_1::before, .skill_2::before, .skill_3::before, .skill_4::before, .skill_5::before  {
            color: #faa94f;
            content: "• ";
        }

        .body-right .content .skills-container .skills-list .skill_1, .skill_2, .skill_3, .skill_4, .skill_5 {
            width: 183px;
            display: inline-block;
        }

    </style>

</head>

<body>

    <div id="cv">

        <div class="header">
            <span class="name"><?php echo $_POST['json_pI']['firstname']; ?> <span class="lastname"><?php echo $_POST['json_pI']['lastname']; ?></span></span>
            <span class="divider"></span>
            <span class="bg"></span>
        </div>

        <div class="img-placeholder">
            <img src="<?php echo $_POST['json_pI']['image']; ?>" class="user-img">
        </div>

        <div class="body-left">
            <div class="content">

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

                <div class="info">
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
                </div>
                
            </div>
        </div>

        <div class="body-right">
            <div class="content">

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

            <div class="skills-container">
                <div class="skills">VAARDIGHEDEN</div>
                <div class="skills-list">
                    <?php
                        $skill_1 = ''; $skill_2 = ''; $skill_3 = ''; $skill_4 = ''; $skill_5 = '';

                        $c_kA = count($_POST['json_jS_knowAbout']);
                        if ($c_kA > 0) {
                            for ($i=0; $i<$c_kA; $i++) { 
                                if ($i == 0)
                                    $skill_1 = $_POST['json_jS_knowAbout'][$i]['title'];
                                if ($i == 1)
                                    $skill_2 = $_POST['json_jS_knowAbout'][$i]['title'];
                                if ($i == 2)
                                    $skill_3 = $_POST['json_jS_knowAbout'][$i]['title'];
                                if ($i == 3)
                                    $skill_4 = $_POST['json_jS_knowAbout'][$i]['title'];
                                if ($i == 4)
                                    $skill_5 = $_POST['json_jS_knowAbout'][$i]['title'];
                            }
                        }
                    ?>
                    <div style="margin-bottom: 10px;">
                        <span class="skill_1">
                            <?php echo $skill_1; ?>
                        </span>
                        <span class="skill_2">
                            <?php echo $skill_2; ?>
                        </span>
                        <span class="skill_3">
                            <?php echo $skill_3; ?>
                        </span>
                    </div>
                    <div>
                        <span class="skill_4">
                            <?php echo $skill_4; ?>
                        </span>
                        <span class="skill_5">
                            <?php echo $skill_5; ?>
                        </span>
                    </div>
                </div>
            </div>
            
        </div>

    </div>

</body>

</html>