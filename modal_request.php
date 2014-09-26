<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8' />
	<meta name="viewport" content="initial-scale=1">
    <title>Modal Box</title>
	<link href='http://fonts.googleapis.com/css?family=Lato:400,700,700italic'
		rel='stylesheet' type='text/css'>
	<link href='fed/css/style.css' rel='stylesheet' />
</head>
<body>
	
	<button id="modal-launcher">Price Quote Request</button>
	<div id='modal-background' class="active" <?=(!empty($_POST)) ? "class='active'" : ''?>></div>
	<div id='modal-content' class="active" <?=(!empty($_POST)) ? "class='active'" : ''?>>
		<div class='banner'>
			<div class='info'>
				<div class='little-guru'>
					guru	
					<svg class="smart-guru" version="1.1" id="smart-guru_xA0_Image_1_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
						 x="0px" y="0px" viewBox="0 0 280 298" enable-background="new 0 0 280 298" xml:space="preserve">
					<image overflow="visible" width="280" height="298"
id="smart-guru_xA0_Image" xlink:href="fed/images/smart-guru.png" >
					</image>
					</svg>
				</div>
				<?php if(!empty($_POST)): ?>
					<div class='title-text smart success'><span>Whoo Hoo!</span></div>
				<?php else: ?>
					<div class='title-text smart'>Request a<span> free quote</span></div>
				<?php endif; ?>
				<div class='close-reveal-modal'>
					<div class='escape'>x</div>
				</div>
			</div>
		</div>
		<div class='main'>
			<div class='form-description'>
				<?php if(!empty($_POST)): ?>
				<p class="par-success"><span>Eating tacos. Snuggling kittens.
Writing quote packages.</span> These are the things that tickle a Play Guru's
whiskers. Your Gur will be in touch shortly. In the meantime, how about persuing
our website?</p>
				<div class='columnOneSuccess'>
					<div class='drinking-coffee'>
						<div class='heading'>
							<span>Our playgrounds are the best.</span>
							<p>There. We said it.</p>
						</div>
					</div>
					<a href="#" class='button'>Read up on what makes us better
							<div class='circle'>&#10140;</div>
					</a>
				</div>
				<div class='columnTwoSuccess'>
					<div class='kids-playing'>
						<div class='heading'>
							<span>Want to explore your plaground options?</span>
						</div>
					</div>
					<a href="#" class='button'>Check out our product lineup
							<div class='circle'>&#10140;</div>
					</a>
				</div>
				<div class='bottom-link'><a href="#">Return to home</a></div>
				<?php else: ?>
				<p><span>Looking at a product that needs installation or
				surfacing? Or, gasp!, both installation AND surfacing?</span>
Don't panic. Our Play Gurus are giddy at the prospect of helping you sort it all
out. Send them your info and they'll get right on it!
	
				<form class="contact-form" action="/playguru-modal-boxes/modal_request.php" method="post">
					<div class='columnOne'
						<label for="fullName">What's your name?</label>
						<input tabindex="1" type="text" name="fullName" id="fullName"
						placeholder="first and last name..." />
						<label for="">Your email address:</label>
						<input tabindex="2" type="email" name="email" id="email" placeholder="enter here..." />
						<label for="phone">Your phone number:</label>
						<input tabindex="3" type="tel" name="phone" id="phone"
						placeholder="enter here..." />
					</div>
					<div class='columnTwo'>
						<p>Can we add you to our email list?</p>
						<input checked="checked" type='checkbox' id="c1" name='cc' value='1' />
						<label for="c1"><span></span>Yes, i want the inside scoop on sales &amp; more!</label>
						<input type='checkbox' id="c2" name='cc' value='0' />
						<label for="c2"><span></span>No thanks, I'm not interested in sales.</label>
						<div tabindex="6" class='submitForm getToWork'>Get to work, Play Guru
							<div class='circle'>&#10140;</div>
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
