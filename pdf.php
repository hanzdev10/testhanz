<?php
    $rootUrl = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';

    $postdata = http_build_query(
        array(
            'json_pI' => $_POST['json_pI'],
            'json_eI' => isset($_POST['json_eI']) ? $_POST['json_eI'] : [],
            'json_wE' => $_POST['json_wE'],
            'json_jS_knowAbout' => $_POST['json_jS_knowAbout'],
            'json_jS_language' => $_POST['json_jS_language'],
            'json_jS_certificates' => $_POST['json_jS_certificates'],
            'json_aY' => $_POST['json_aY']
        )
    );

    $opts = array('http' =>
        array(
            'method'  => 'POST',
            'header'  => 'Content-Type: application/x-www-form-urlencoded',
            'content' => $postdata
        )
    );

    $context  = stream_context_create($opts);

    $html = file_get_contents('cv-template/cv1.php', false, $context);
    if ($_POST['cv'] == 1) {
        $html = file_get_contents('cv-template/cv1.php', false, $context);
    }
    else if ($_POST['cv'] == 2) {
        $html = file_get_contents('cv-template/cv2.php', false, $context);
    }
    else if ($_POST['cv'] == 3) {
        $html = file_get_contents('cv-template/cv3.php', false, $context);
    }
    else if ($_POST['cv'] == 4) {
        $html = file_get_contents('cv-template/cv4.php', false, $context);
    }
    else if ($_POST['cv'] == 5) {
        $html = file_get_contents('cv-template/cv5.php', false, $context);
    }
    else if ($_POST['cv'] == 6) {
        $html = file_get_contents('cv-template/cv6.php', false, $context);
    }

    $filename = time().'-'.$_POST['json_pI']['lastname'];

    require_once 'dompdf/autoload.inc.php';

    use Dompdf\Dompdf;

    $dompdf = new Dompdf();
    $dompdf->load_html($html);

    $dompdf->setPaper('A4', 'portrait');

    $dompdf->render();

    $dompdf->get_canvas()->get_cpdf()->setEncryption('', '@metis2021', array());

    $output = $dompdf->output();

    file_put_contents('output-cvs/'.$filename.'.pdf', $output);

    //send mail ---------------------------------------------------------------------------------------

    $htmlMsg = '<html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>CV Maker</title>
                
                </head>
                
                <body style="margin: 0; font-family: -apple-system, BlinkMacSystemFont, \'Segoe U\', Roboto, \'Helvetica Neue\', Arial, sans-serif, \'Apple Color Emoji\',\'Segoe UI Emoji\', \'Segoe UI Symbol\'; font-size: 1rem; font-weight: 400; line-height: 1.5; color: #212529; text-align: left; background-color: #fff">
                
                    <div class="container" style="max-width: 1140px; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto; margin-top: 50px; margin-bottom: 50px;">
                        <div style="text-align: center;">
                            <img src="https://tiptoppersoneelsdiensten.nl/wp-content/uploads/2021/09/tiptoppersoneelsdiensten.png" alt="tiptop" style="max-width: 100%; height: auto; margin-bottom: 50px;">
                        </div>
                        <div style="background-color: #fff; border: 1px solid rgba(0, 0, 0, .125); border-radius: .25rem; text-align: center;">
                            <div style="border: #0cacde 1px solid; background: #0cacde">
                                <p style="font-weight: 500; font-size: 32px; color: #fff;">Gratis CV-Maker</p>
                            </div>
                            <div style="padding: 1.25rem">
                                <p style="margin: 40px 0 100px 0; font-size: 24px;">Bedankt voor het gebruik maken van TipTop CV-Maker.</p>
                                <div style="margin-bottom: 50px;">
                                    <a href="https://tiptoppersoneelsdiensten.nl/CV-maker/downloader?file='.$filename.'"><button style="cursor: pointer; color: #fff; border: rgb(12, 172, 222) 1px solid; background: rgb(12, 172, 222); padding: 15px 25px; font-size: 20px; font-weight: 300;">Ga naar de download link</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                
                </body>
                
                </html>';

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require 'vendor/autoload.php';

    $mail = new PHPMailer(true);
    try {
        //$mail->SMTPDebug = 1;
        $mail->isSMTP();
        $mail->Host = 'mailout.one.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'cv@gratis-cvmaker.nl';
        $mail->Password = 'tiptopmetis';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 465;

        $mail->setFrom('cv@gratis-cvmaker.nl', 'TipTop CV-Maker');

        $mail->addAddress($_POST['json_pI']['email']);

        $mail->isHTML(true);
        $mail->Subject = 'TipTop CV-Maker';
        $mail->Body = $htmlMsg;
        $mail->AltBody    = 'Bedankt voor het gebruik maken van TipTop CV-Maker.<br><br> <a href="https://tiptoppersoneelsdiensten.nl/CV-maker/downloader?file='.$filename.'">Ga naar de download link</a>';
        $mail->send();

        echo 'CV has been sent.';
    } 
    catch (Exception $e) {
        echo $e->getMessage();
    }

    /* try {
        $to      = $_POST['json_pI']['email'];
    
        $subject = 'TipTop CV-Maker';

        $message = $htmlMsg;

        $headers = array(
            'MIME-Version' => '1.0',
            'Content-type' => 'text/html; charset=iso-8859-1',
            'Reply-To' => 'tiptop@gratis-cvmaker.nl',
            'From' => 'TipTop <tiptop@gratis-cvmaker.nl>',
            'X-Mailer' => 'PHP/' . phpversion()
        );

        mail($to, $subject, $message, $headers);

        echo 'CV has been sent.';
        
    } catch (Exception $e) {
        echo $e->getMessage();
    } */

?>