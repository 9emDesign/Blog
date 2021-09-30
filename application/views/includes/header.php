<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo 'base_url'('Foundation/assets/css/foundation.css'); ?>">
    <link rel="stylesheet" href="<?php echo 'base_url'('Foundation/assets/css/main.css'); ?>">
	<link rel="stylesheet" href="<?php echo 'base_url'('FontAwesome/css/fontawesome.css'); ?>">
	<title><?php echo $title ?></title>
	
</head>

<body>
	<div class="grid-container fluid">
		<div class="grid-x grid-margin-x">
			<div class="cell small-12 medium-12 large-12" style="background-color: #b7d79d;">
				<h1 style="margin-left: 16px;"><?php echo $header; ?></h1>
			</div>
		</div>
		<div class="grid-x">
			<div class="cell small-12 medium-12 large-12">
				<div class="top-bar" style="background-color: #A18671;">
					<div class="top-bar-left">
						<ul class="menu" style="background-color: #A18671;color:indigo">
							<li class="menu-text">Relax Blog</li>
							<li><a style="color:indigo" href="<?php echo 'base_url'(); ?>">Home</a></li>
							<li><a  style="color:indigo" href="<?php echo 'base_url'(); ?>posts">Blog</a></li> 
							<li><a  style="color:indigo" href="<?php echo 'base_url'(); ?>about">About</a></li>
						</ul>
					</div>

					<div class="top-bar-right">
						<?php if(!$this->session->userdata('logged_in')) { ?>
						<a href="<?php echo 'base_url'('users/login'); ?>"><button class="button">Login</button></a>
						<a href="<?php echo 'base_url'('users/register'); ?>"><button class="button">Sign-up</button></a>
						<?php }else if ($this->session->userdata('logged_in')) {?>
						<a href="<?php echo 'base_url'('users/logout'); ?>"><button class="button">Logout</button></a>
							<a href="<?php echo 'base_url'('users/register'); ?>"><button class="button">Sign-up</button></a>
							<?php } ?>

					
							
						<input
						class="switch-input Switch"
						id="Switch"
						type="checkbox"
						name="exampleSwitch"
					/>
					
					<label class="switch-paddle" for="Switch">
						<span class="show-for-sr">Download Kittens</span>
					</label>
				
			
					</div>
				</div>

			</div>
		</div>
