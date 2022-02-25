	/*  Wizard */
	jQuery(function ($) {
		"use strict";
		// Chose here which method to send the email, available:
		
		$('form#wrapped').attr('action', 'cek_data');
		$("#wizard_container").wizard({
			stepsWrapper: "#wrapped",
			submit: ".submit",
			beforeSelect: function (event, state) {
				if ($('input#website').val().length != 0) {
					return false;
				}
				if (!state.isMovingForward)
					return true;
				var inputs = $(this).wizard('state').step.find(':input');
				return !inputs.length || !!inputs.valid();
			}
		}).validate({
			errorPlacement: function (error, element) {
				if (element.is(':radio') || element.is(':checkbox')) {
					error.insertBefore(element.next());
				} else {
					error.insertAfter(element);
				}
			}
		});
		//  progress bar
		$("#progressbar").progressbar();
		$("#wizard_container").wizard({
			afterSelect: function (event, state) {
				$("#progressbar").progressbar("value", state.percentComplete);
				$("#location").text("(" + state.stepsComplete + "/" + state.stepsPossible + ")");
			}
		});
		// Validate select and password match
		$('#wrapped').validate({
			ignore: [],
			rules: {
				select: {
					required: true
				},
				password1: {
					required: true,
					minlength: 5
				},
				password2: {
					required: true,
					minlength: 5,
					equalTo: "#password1"
				}
			},
			errorPlacement: function (error, element) {
				if (element.is('select:hidden')) {
					error.insertAfter(element.next('.nice-select'));
				} else {
					error.insertAfter(element);
				}
			}
		});
	});

	// Summary 
	function getVals(formControl, controlType) {
		switch (controlType) {

			case 'first_name':
				// Get the value for a input text
				var value = $(formControl).val();
				$("#first_name").text(value);
				break;

			case 'last_name':
				// Get the value for a input text
				var value = $(formControl).val();
				$("#last_name").text(value);
				break;

			case 'email':
				// Get the value for a input text
				var value = $(formControl).val();
				$("#email").text(value);
				break;
			case 'demo':
				// Get the value for a input text
				var value = $(formControl).val();
				$("#demo").text(value);
				break;

			case 'nama_lengkap':
				// Get the value for a select
				var value = $(formControl).val();
				$("#nama_lengkap").text(value);
				break;
			case 'tanggal_lahir':
				// Get the value for a select
				var value = $(formControl).val();
				$("#tanggal_lahir").text(value);
				break;
			case 'rtrw1':
				// Get the value for a select
				var value = $(formControl).val();
				$("#rtrw1").text(value);
				break;
			
			case 'kecamatan':
				// Get the value for a select
				var value = $(formControl).val();
				$("#kecamatan").text(value);
				break;
			
			case 'kelurahan':
				// Get the value for a select
				var value = $(formControl).val();
				$("#kelurahan").text(value);
				break;
			
			case 'long':
				// Get the value for a select
				var value = $(formControl).val();
				$("#long").text(value);
				break;
			case 'lat':
				// Get the value for a select
				var value = $(formControl).val();
				$("#lat").text(value);
				break;
			

			case 'username':
				// Get the value for a input text
				var value = $(formControl).val();
				$("#username").text(value);
				break;

			case 'password':
				// Get the value for a input text
				var value = $(formControl).val();
				$("#password").text(value);
				break;

			case 'kategori':
				// Get the value for a select
				var value = $(formControl).val();
				$("#kategori").text(value);
				break;
			case 'kategori1':
				// Get the value for a select
				var value = $(formControl).val();
				$("#kategori1").text(value);
				break;
			case 'sub_kategori':
				// Get the value for a select
				var value = $(formControl).val();
				$("#sub_kategori").text(value);
				break;

			case 'judul_aduan':
				// Get the value for a input text
				var value = $(formControl).val();
				$("#judul_aduan").text(value);
				break;
			case 'isi_aduan':
				// Get the value for a input text
				var value = $(formControl).val();
				$("#isi_aduan").text(value);
				break;
			case 'file-ip-1':
				// Get the value for a input text
				var value = $(formControl).val();
				$("#file-ip-1").text(value);
				break;

		}
	}
