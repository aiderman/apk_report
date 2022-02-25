<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Ansonika">
    <title></title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="<?= base_url('assets1/') ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('assets1/') ?>css/style.css" rel="stylesheet">
    <link href="<?= base_url('assets1/') ?>css/vendors.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="<?= base_url('assets1/') ?>css/custom.css" rel="stylesheet">

    <script type="text/javascript">
        function delayedRedirect() {
            window.location = "<?php echo base_url('c_regist/wizard') ?>"
        }
    </script>

</head>

<body onLoad="setTimeout('delayedRedirect()', 0.01)" style="background-color:#fff;">
    <?php
    $mail = $_POST['email'];
    $to = "info@domain.com";/* YOUR EMAIL HERE */
    $subject = "Registration from Wilio";
    $headers = "From: Registration from Wilio <noreply@yourdomain.com>";
    $message = "DETAILS\n";
    $message .= "\nFirst name: " . $_POST['first_name'];
    $message .= "\nJudul aduan: " . $_POST['judul_aduan'];
    $message .= "\nrtrw: " . $_POST['rtrw'];
    $message .= "\nLast name: " . $_POST['last_name'];
    $message .= "\nEmail: " . $_POST['email'];
    $message .= "\nkategori: " . $_POST['kategori'];
    $message .= "\nkategori: " . $_POST['kategori1'];
    $message .= "\nTerms and conditions accepted: " . $_POST['terms'] . "\n";

    $message .= "\nACCOUNT DETAILS";
    $message .= "\nUser Name: " . $_POST['user_name'];
    $message .= "\nPassword: " . $_POST['password2'];


    //Receive Variable
    $sentOk = mail($to, $subject, $message, $headers);

    //Confirmation page
    $user = "$mail";
    $usersubject = "Thank You";
    $userheaders = "From: info@Wilio.com\n";
    /*$usermessage = "Thank you for your time. Your quotation request is successfully submitted.\n"; WITH OUT SUMMARY*/
    //Confirmation page WITH  SUMMARY
    $usermessage = "Thank you for your time. Your request is successfully submitted. We will reply shortly.\n\nBELOW A SUMMARY\n\n$message";
    mail($user, $usersubject, $usermessage, $userheaders);

    ?>
    <!-- END SEND MAIL SCRIPT -->

</body>

</html>