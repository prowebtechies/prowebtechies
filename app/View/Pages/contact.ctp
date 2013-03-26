<H1>Contact Us</H1>

<?php echo $this->Form->create('Contact', array('url' => array('controller' => 'contacts', 'action' => 'add')));

echo $this->Form->input('name');
echo $this->Form->input('email');
echo $this->Form->input('message', array('type' => 'textarea'));
echo $this->Form->submit('Submit', array('class' => 'btn btn-inverse btn-large') );
?>
