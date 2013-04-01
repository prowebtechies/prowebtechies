<H1>Contact Us</H1>
<hr>
<div class="row" >
<div class="span4 form-span">
	<p><strong>Drop Us a Message</strong></p>
	<div id="contact-div">

		<?php 
		echo $this->Form->create('Contact', array('url' => array('controller' => 'contacts', 'action' => 'add'), 'id' => 'contactForm'));
		echo $this->Form->input('name');
		echo $this->Form->input('email');
		echo $this->Form->input('message', array('type' => 'textarea'));
		echo $this->Form->submit('Submit', array('class' => 'btn btn-inverse btn-large') );
		?>
	</div>
	<div id="success-message">
		<h3>Thank you for contacting us.</h3>
	</div>
	<div id="failure-message">
		<h3>There was an error in submitting the form. Please try again.</h3>
	</div>
</div>
<div class="span4">
	<p><strong>Would you like to meet us over a cup of coffee!!!</strong></p>
	<div class="well well-contact">
		<p><strong>Address:-</strong></p>
		<p>Sony World Signal </p>
		<p> Ejipura, Koramangala </p>
		<p> Bangalore - 560047 </p>
	</div>
	<div class="well well-contact">
		<p><strong>Email:-</strong></p>
		<p><?php echo $this->Html->link('prowebtechies@gmail.com', 'mailto:prowebtechies@gmail.com', array('target' => '_blank')); ?></p>
		<p><strong>Phone:-</strong></p>
		<p> +91-888-4757-407 </p>
	</div>
</div>
<div class="span4 map-span">
	<p><strong>Find Us on Google Maps</strong></p>
	<iframe width="370" height="350" frameborder="0" scrolling="no" marginheight="0" 
	marginwidth="0" src="http://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp
	;geocode=&amp;q=Sony+World,+100+Feet+Road,+Koramangala+4+Block,+Ejipura,+Bangalore,
	+Karnataka&amp;aq=0&amp;oq=sony&amp;sll=12.953997,77.63094&amp;sspn=0.801659,1.234589&amp;
	ie=UTF8&amp;hq=&amp;hnear=Sony+World,+100+Feet+Rd,+Koramangala+4+Block,+Ejipura,+Bangalore,
	+Bengaluru,+Karnataka+560095&amp;t=m&amp;z=14&amp;iwloc=A&amp;output=embed">
	</iframe>
	<br />
	<small>
		<a href="http://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;
		geocode=&amp;q=Sony+World,+100+Feet+Road,+Koramangala+4+Block,+Ejipura,+Bangalore,
		+Karnataka&amp;aq=0&amp;oq=sony&amp;sll=12.953997,77.63094&amp;sspn=0.801659,1.234589&amp;
		ie=UTF8&amp;hq=&amp;hnear=Sony+World,+100+Feet+Rd,+Koramangala+4+Block,+Ejipura,+Bangalore,
		+Bengaluru,+Karnataka+560095&amp;t=m&amp;z=14&amp;iwloc=A" style="color:#0000FF;
		text-align:left">View Larger Map</a>
	</small>
</div>
</div>