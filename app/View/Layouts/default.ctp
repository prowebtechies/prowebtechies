<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo 'ProWeb Techies '; ?>| <?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->element('analytics');
		echo $this->Html->meta('icon');
		echo $this->Html->css('bootstrap.min');
	?>
	<style type="text/css">
		body {
			padding-top: 60px
		}
	</style>
	<?php
		echo $this->Html->css('bootstrap-responsive.min');

		echo $this->Html->css('default');
		echo $this->Html->script('jquery-1.8.1.min');
		echo $this->Html->script('bootstrap.min');
		echo $this->Html->script('default');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>

</head>
<body>
	<header>
	    <div class="navbar navbar-fixed-top navbar-inverse">
		    <div class="navbar-inner">
		    	<div class="container">
		    		<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
		    			<span class="icon-bar"></span>
		    			<span class="icon-bar"></span>
		    			<span class="icon-bar"></span>
		    		</a>
		    		<?php echo $this->Html->link( $this->Html->image('logo.png', array('alt' => 'ProWeb Techies')), '/', array('class' => 'brand', 'escape' => false)); ?>
			    	<div class="nav-collapse">
					    <ul class="nav nav-fix pull-right">
						    <li class="active"><?php echo $this->Html->link('Home', '/'); ?></a></li>
						    <!-- <li><?php echo $this->Html->link('About', '/about'); ?></li> -->
					    	<li><?php echo $this->Html->link('Contact Us', '/contact'); ?></li>
					    	<li><?php echo $this->Html->link('FAQ', '/faq'); ?></li>
				    	</ul>
				    </div>
			    </div>
		    </div>
		</div>
	</header>
	<div class="container container-fix">
		<div id="content">
			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
	</div>
	<div id="push"></div>
	<footer>
			<div class="navbar navbar-inverse navbar-fixed-bottom">
				<div class="navbar-inner">
					<?php echo $this->Html->link($this->Html->image('fb.png'), 'http://www.facebook.com/ProWebTechies.entrepreneurs', array('target' => '_blank', 'escape' => false, 'class' => 'social-networks-fb')); ?> <?php echo $this->Html->link($this->Html->image('tw.png'), 'http://www.twitter.com/ProWebTechies', array('target' => '_blank', 'escape' => false)); ?>
				</div>
			</div>
	</footer>
</body>
</html>
