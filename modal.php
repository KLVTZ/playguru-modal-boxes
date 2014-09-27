<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8' />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modal Box</title>
	<link href='http://fonts.googleapis.com/css?family=Lato:400,700,700italic'
		rel='stylesheet' type='text/css'>
	<link href='fed/css/style.css' rel='stylesheet' />
</head>
<body>
	
	<button id="modal-launcher">Price Quote Request</button>
	<div id='modal-background' class="modal-active" <?=(!empty($_POST)) ? "class='modal-active'" : ''?>></div>
	<div id='modal-content' class="modal-active" <?=(!empty($_POST)) ?  "class='modal-active'" : ''?>>
		<div class='modal-banner'>
			<div class='modal-info'>
				<div class='little-guru'>
					guru	
					<svg version="1.1" id="little-guru_x5F_one_xA0_Image_1_"
						 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 336 286"
						 enable-background="new 0 0 336 286" xml:space="preserve">
					<image overflow="visible" width="336" height="286"
					id="little-guru_x5F_one_xA0_Image" xlink:href="fed/images/little-guru.png" >
					</image>
					</svg>
				</div>
				<?php if(!empty($_POST)): ?>
					<div class='modal-title-text modal-success'><span>success!</span></div>
				<?php else: ?>
					<div class='modal-title-text'>Say hello to your <span>play guru</span></div>
				<?php endif; ?>
				<div class='close-reveal-modal'>
					<div class='modal-escape'>x</div>
				</div>
			</div>
		</div>
		<div class='modal-main'>
			<div class='modal-form-description'>
				<?php if(!empty($_POST)): ?>
				<p class="modal-par-success"><span>Our Play Gurus are playing rock / paper / scissors to
				see who gets to call you.</span> The winner will be in touch
				shortly.</p>
				<p>In the meantime, how about persuing our website?</p> 
				<div class='modal-columnOneSuccess'>
					<div class='modal-drinking-coffee'>
						<div class='modal-heading'>
							<span>Our playgrounds are the best.</span>
							<p>There. We said it.</p>
						</div>
					</div>
					<a href="#" class='modal-button'>Read up on what makes us better
							<div class='modal-circle'>&#10140;</div>
					</a>
				</div>
				<div class='modal-columnTwoSuccess'>
					<div class='modal-kids-playing'>
						<div class='modal-heading'>
							<span>Want to explore your plaground options?</span>
						</div>
					</div>
					<a href="#" class='modal-button'>Check out our product lineup
							<div class='modal-circle'>&#10140;</div>
					</a>
				</div>
				<div class='modal-bottom-link'><a href="#">Return to home</a></div>
				<?php else: ?>
				<p><span>Choosing a playground can feel like all work, no play.
			How's that for irony?</span> Well, lucky you, we have a team of play
			experts who can do the heavy lifting while you focus on stuff that
			really matters: achieving enlightenment. Or making dinner. Whatever
			floats your boat.</p>
				<form class="modal-contact-form" action="/playguru-modal-boxes/modal.php" method="post">
					<div class='modal-columnOne'
						<label for="fullName">What's your name?</label>
						<input tabindex="1" type="text" name="fullName" id="fullName"
						placeholder="first and last name..." />
						<label for="">Your email address:</label>
						<input tabindex="2" type="email" name="email" id="email" placeholder="enter here..." />
						<label for="phone">Your phone number:</label>
						<input tabindex="3" type="tel" name="phone" id="phone"
						placeholder="enter here..." />
					</div>
					<div class='modal-columnTwo'>
						<p>Can we add you to our email list?</p>
						<input checked="checked" type='checkbox' id="c1" name='cc' value='1' />
						<label for="c1"><span></span>Yes, i want the inside scoop on sales &amp; more!</label>
						<input type='checkbox' id="c2" name='cc' value='0' />
						<label for="c2"><span></span>No thanks, I'm not interested in sales.</label>
						<div tabindex="6" class='modalSubmitForm'>Let's do this!
							<div class='modal-circle'>&#10140;</div>
						</div>
					</div>
				</form>
				<?php endif; ?>
			</div>
		</div>	
	</div>
<script src='http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js'></script>
<script>
	$(function(){
		// toggle modal box
		$('#modal-launcher, #modal-background, .escape').on('click', function() {
			$('#modal-background, #modal-content').toggleClass("active");
		});

		// one selection per checkbox group
		$("input:checkbox").change(function() {
			var group = ":checked[name='" + $(this).attr("name") + "']";
			if ($(this).is(":checked")) {
				$(group).not($(this)).attr("checked", false);
			}
		});

		// onclick submit
		$(".submitForm").on("click", function() {
			$(".contact-form").submit();
		});

		$(".submitForm").on("keypress", function(e) {
			if(e.keyCode = 13) {
				$(".contact-form").submit();
			}
		});
	});
</script>
</body>
</html>
