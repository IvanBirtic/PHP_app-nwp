<?php 
error_reporting(0);
	print '
	<h1>Kontaktirajte nas</h1>
		<div id="contact">
			<iframe src="https://maps.google.com/maps?width=100%25&amp;height=400&amp;hl=en&amp;q=Ku%C5%A1lanova%2010+(Ku%C5%A1lanova)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
			<form action="#" id="contact_form" name="contact_form" method="POST"><br/><br/><br/>
				<label for="fname">Ime*</label>
				<input type="text" id="fname" name="firstname" placeholder="Vaše ime..." required>

				<label for="lname">Prezime*</label>
				<input type="text" id="lname" name="lastname" placeholder="Vaše prezime.." required>
				
				<label for="lname">Elektronička adresa*</label>
				<input type="email" id="email" name="email" placeholder="Vaša e-mail adresa..." required>

				<label for="country">Država</label>
				<select id="country" name="country">
				  <option value="">Odaberite</option>
				  <option value="BE">Belgija</option>
				  <option value="HR" selected>Hrvatska</option>
				  <option value="FR">Francuska</option>
                  <option value="SRB">Srbija</option>
                  <option value="BiH">Bosna i Hercegovina</option>
                  <option value="CG">Crna Gora</option>
                  <option value="MK">Makedonija</option>
				</select>

				<label for="subject">Opis</label>
				<textarea id="subject" name="subject" placeholder="Ovdje upišite upit..." style="height:200px"></textarea>

				<input type="submit" value="Pošalji poruku">
			</form>
		</div>';
?>