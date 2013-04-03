<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $title; ?></title>
	<?php echo Asset::css('bootstrap.css'); ?>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>
    <?php echo Asset::css('style.css'); ?> 
</head>
<body>
<header>
<div class="row">
		<div class="span10">	<?php echo Asset::img('logo.png'); ?></div>
    	<div class="span2"><?php echo Asset::img('ribbonlogo.png'); ?></div>
</div>
    	<aside class="clearfix">				
         <?php 
                    if(isset($user_info))
                    {
                        echo $user_info;
                    }
                    else
                    {
                     if(Auth::instance()->check())
					{
						$link = array("Logged in as: ".Auth::instance()->get_screen_name(), Html::anchor('users/logout', 'Logout'));
						
						//echo Form::button('name', 'value', array('style' => 'border: 2px;'));
					}
					else
					{
						$link = array(Html::anchor('users/login', 'Login'), Html::anchor('users/register', 'Register'));
					}
					echo Html::ul($link);
                    }
                ?>
    	</aside>
	<nav>
    <ul id="menu">
        <li><?php echo Html::anchor('welcome', 'Home'); ?></li>
        <li>
            <?php echo Html::anchor('item', 'Search Items'); ?>
            <ul>
                <li><?php  if(Auth::instance()->check())
					{ echo Html::anchor('users/index', 'Your Items');} ?></li>

            </ul>
        </li>
        <li><?php echo Html::anchor('about', 'About'); ?></li>
		<li><?php echo Html::anchor('partners', 'Partners'); ?></li>
        <li><?php echo Html::anchor('contact', 'Contact'); ?></li>
		  
    </ul>
    
    </nav>	
</header>
<div id="wrap">
	<div id="main" class="container">
		
			<div class="row">
				<h1><?php echo $title; ?></h1>
				<hr>
                
                <?php if (Session::get_flash('success')): ?>
                                <div class="alert-message success">
                                    <p>
                                    <?php echo implode('</p><p>', (array) Session::get_flash('success')); ?>
                                    </p>
                                </div>
                <?php endif; ?>
                <?php if (Session::get_flash('error')): ?>
                                <div class="alert-message error">
                                    <p>
                                    <?php echo implode('</p><p>', (array) Session::get_flash('error')); ?>
                                    </p>
                                </div>
                <?php endif; ?>
			</div>

			<div >
				<?php echo $content; ?>
			</div>
           <div class="clearDiv"></div>
	

	</div>
</div>    
    <footer>
            <div class="container">
                <p>&copy; ProveYouOwnIt.com 2013</p>
            </div>
    </footer>
</body>
</html>
