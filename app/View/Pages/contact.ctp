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