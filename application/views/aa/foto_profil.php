<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Wilio Survey, Quotation, Review and Register form Wizard by Ansonika.">
	<meta name="author" content="Ansonika">
	<title>Wilio | Survey, Quotation, Review and Register form Wizard</title>

	<!-- Favicons-->
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

	<!-- GOOGLE WEB FONT -->
	<link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600" rel="stylesheet">

	<!-- BASE CSS -->
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?= base_url('assets1/') ?>css/menu.css" rel="stylesheet">
	<link href="<?= base_url('assets1/') ?>css/style.css" rel="stylesheet">
	<link href="<?= base_url('assets1/') ?>css/vendors.css" rel="stylesheet">

	<!-- YOUR CUSTOM CSS -->
	<link href="<?= base_url('assets1/') ?>css/custom.css" rel="stylesheet">

	<!-- MODERNIZR MENU -->
	<script src="<?= base_url('assets1/') ?>js/modernizr.js"></script>
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
</head>

<body>
<div class="ml-2 col-sm-6">
  <div id="msg"></div>
  <form method="post" id="image-form">
    <input type="file" name="img[]" class="file" accept="image/*">
    <div class="input-group my-3">
      <input type="text" class="form-control" disabled placeholder="Upload File" id="file">
      <div class="input-group-append">
        <button type="button" class="browse btn btn-primary">Browse...</button>
      </div>
    </div>
  </form>
</div>
<div class="ml-2 col-sm-6">
  <img src="https://placehold.it/80x80" id="preview" class="img-thumbnail">
</div>	
</body>


</html>