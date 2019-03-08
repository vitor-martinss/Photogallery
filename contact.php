<!DOCTYPE html>
<html>
	<head>
		<title>Contact</title>
		<?php 
			include('header.php');
		?>
	</head>
	<body>
		<div class="wrapper">
			<div class="contact-page">
				<div class="transbox">
					<img src="images/background_contact.jpg"> 
				</div>

				<div class="content-contact">
					<h1>CONTACT</h1>
					<article>
						<span>Get in touch</span>
						filling the form below or
						<span>find me</span> in the 
						<span>social media</span> and let me know<span> how</span><span> I can help you</span> 
					</article>		
				</div>			

				<div class="layout-centro">
					<div class="formulario">
						<form class="grupo-entrada" action="#" method="post">

							<ul class="form-group">
								<li>
									<label for="Name">Name</label>
									<input id="Name" type="text" name="Name" placeholder="Full Name" required>
								</li>	

								<li>
									<label for="email">E-mail</label>
									<input id="email" type="email" name="email" placeholder="E-mail" required>
								</li>
									
								<li>
									<label for="Message">Message</label>
									<textarea id="Message" type="text" name="Message" placeholder="I know you want to send me a message but this is just an example of contact page and it won't work.

									But don't be upsad, you can contact me by clicking on the linkedin icon!"></textarea>
								</li>	

								<li>
									<input type="submit" value="SUBMIT" name="submit" disabled="">
								</li>	
							</ul>	
						</form>
					</div>

					
					<div class="extra-info">
						<ul>
							<li><a href="https://www.linkedin.com/in/vitormartinssss" target="_blank" class="fa fa-linkedin"></a></li>
							<li><a href="#" class="fa fa-facebook"></a></li>
							<li><a href="#" class="fa fa-instagram"></a></li>
							<li><a href="#" class="fa fa-map-marker"></a></li>
						</ul>				
					</div>
					
				</div>
			</div>
			<?php 
				include('footer.php');
			?>
		</div>
	</body>
</html>