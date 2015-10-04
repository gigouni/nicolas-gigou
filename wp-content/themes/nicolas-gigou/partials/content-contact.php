<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package nicolas-gigou
 */
?>

		<div id="contact_content" class="contact">
			<div class="grid-2">
				<!-- Google Map -->
				<div class="contact_google_map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d21320.6695797096!2d-1.666065000000011!3d48.089327149999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480edfbd97f2a08b%3A0x1c0ca5d076f41cb0!2s35200+Rennes!5e0!3m2!1sfr!2sfr!4v1443985542937" 
						height="450" 
						frameborder="0" 
						style="border:0" 
						allowfullscreen>
					</iframe>
				</div>	
				<!-- Address, email address, etc ... -->
				<div class="contact_contact_ways">
					<div class="contact_contact_way address">
						<p><span class="contact_contact_title"><i class="fa fa-home"></i> Adresse</span></p>
						<p><span class="contact_contact_value">Rennes, France.</span></p>
					</div>
					<div class="contact_contact_way email">
						<p><span class="contact_contact_title"><i class="fa fa-envelope"></i> Email</span></p>
						<p><span class="contact_contact_value">nicolas.gigou@gmail.com</span></p>
					</div>
					<div class="contact_contact_way phone">
						<p><span class="contact_contact_title"><i class="fa fa-phone"></i> Numéro de téléphone</span></p>
						<p><span class="contact_contact_value">Demandez-le moi par email <i class="fa fa-smile-o"></i></span></p>
					</div>
				</div>
			</div>

			<!-- Back to home page row -->
			<div class="grid-2">
				<div></div>
				<div class="btn">
					<button type="button" class="btn_back_home" onclick="goBackHome('contact');">
						<i class="fa fa-reply fa-2x"></i>
					</button>
				</div>
			</div>
		</div>