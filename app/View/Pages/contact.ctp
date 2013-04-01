<div class="row" >
<div class="span4">
	<div id="contact-div">
		<H1>Contact Us</H1>

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
	<div class="well well-contact">
		<p>Sony World Signal </p>
		<p> Ejipura </p>
		<p> Bangalore </p>
	</div>
</div>
<div class="span4">
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