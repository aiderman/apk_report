
	<!-- PAGE CONTENT -->

		<h2 class="page__title">Working Contact Form</h2>
              <p class="welcome">
              Example of a functional contact form made with Ajax and PHP. It uses Ajax to load the results in the same page. Includes also jQuery Validation for inputs.
              </p>	  
		<div class="fieldset">
			<h2 id="Note"></h2>
			<div class="form">
				<form class="" id="ContactForm" method="post" action="">
					<div class="form__row">
						<input type="text" name="ContactName" value="" class="form__input required" placeholder="Name" />
					</div>
					<div class="form__row">
						<input type="text" name="ContactEmail" value="" class="form__input email required" placeholder="Email" />
					</div>
					<div class="form__row">
						<div class="form__select">
							<select name="ContactSelect" class="required">
								<option value="" disabled selected>Select options</option>
								<option value="1">select one</option>
								<option value="2">select two</option>
								<option value="3">select three</option>
								<option value="4">select four</option>
								<option value="5">select five</option>
							</select>
						</div>
					</div>	
					<div class="form__row">
						<textarea name="ContactComment" class="form__textarea required" placeholder="TextArea"></textarea>
					</div>	

					<div class="form__row mt-20">
						<input type="submit" name="submit" class="form__submit button button--main button--full" id="submit" value="SUBMIT" />
						<input class="" type="hidden" name="to"  value="youremail@website.com" />
						<input class="" type="hidden" name="ContactSubject" value="Contacf form message" />
						<label id="loader" style="display:none;"><div id="loader-animation"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div></label>
					</div>
				</form>
			</div>
		</div>

		

			  



</div>
<!-- PAGE END -->

